<?php

// classe -> é uma representação de um conteúdo do mundo
// real no formato de código

// atributos -> são variáveis que estão dentro de uma classe,
// porém com recursos adicionais

// método -> são funções que estão dentro da classe

// objeto -> é uma variável que recebe/representa uma determinada
// classe

class ExibeNome{

    public $nome;

    public function falar(){
        return "Meu nome é ".$this->nome;
    }
}

$pessoa = new ExibeNome();

$pessoa->nome = "lucas";

echo $pessoa->falar();







?>