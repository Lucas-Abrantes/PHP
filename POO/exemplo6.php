<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}


class Cpf extends Documento{
    public function validar():bool{
        $numeroCpf = $this->getNumero();
        return true;
    }
}

$doc = new Cpf();

$doc->setNumero("111.555.999");

var_dump($doc->validar());  
echo $doc->validar();





?>