<?php

class Carro{

    private $placa;
    private $modelo;
    private $ano;

    public function getPlaca():string{
        return $this->placa;
    }

    public function setPlaca($placa){
        $this->placa = $placa;
    }


    public function getModelo(): string{
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getAno(): int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }


    public function exibir(){
        return array(
            "placa"=> $this->getPlaca(),
            "modelo"=> $this->getModelo(),
            "ano"=> $this->getAno()
        );
    }
}

$carro = new Carro();

//$carro->modelo = "prima lt";

$carro->setPlaca("WRO12");
$carro->setModelo("prisma lt");
$carro->setAno(2019);

print_r($carro->exibir());
var_dump(($carro->exibir()));


?>