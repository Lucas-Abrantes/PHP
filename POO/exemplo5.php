<?php

// atributos privados não são passados
// para classes filhas, ou seja, só são exibidos
// dentro da classe pai


class Cadastro{

    public $nome = "Lucas";

    protected $idade = 23;

    private $cpf = "5151551000-89";

    // exibir dados tem acesso porque está dentro da classe
    public function exibirDados(){
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->cpf . "<br>";
    }
}



class Porgramador extends Cadastro{

    // a classe que herda não tem acesso a objetos privados
    public function exibirDados(){
        echo get_class($this);
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        //echo $this->cpf . "<br>";
    }
}


$programador = new Porgramador();

$programador->exibirDados();

//$pessoa = new Cadastro();

//$pessoa->exibirDados();



?>