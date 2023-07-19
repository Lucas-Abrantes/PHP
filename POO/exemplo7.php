<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function frenar($velocidade);

    public function trocarMarcha($marcha);
}

// Interface é um contrato, ou seja, ela obriga a classe ter os
// métodos
class TipoVeiculo implements Veiculo{

    public function acelerar($velocidade){
        echo "O veículo acelerou "."$velocidade"."km/h";
    }

    public function frenar($velocidade){
        echo "O carro frenou a ". "$velocidade". "m/s";
    }

    public function trocarMarcha($marcha){

        echo "O carro trocou de marcha para a". "$marcha";
    }
}

$carro = new TipoVeiculo();

$carro->acelerar(25);




?>