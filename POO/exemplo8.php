<?php

interface Veiculo {

    public function acelerar($velocidade);

    public function frenar($velocidade);

    public function trocarMarcha($marcha);
}

// um classe abstrata não pode ser instanciada

abstract class TipoVeiculo implements Veiculo{

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

class Honda extends TipoVeiculo{
    public function potenciaMotor(){

    }
}


$carro_honda = new Honda();

$carro_honda->acelerar(25);



?>
