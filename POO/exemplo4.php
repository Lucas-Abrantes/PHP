<?php

class Endereco{
    private $numero;
    private $bairro;
    private $cep;

    // o métedo construct inicializa as variáveis
    // do programa ao ser instanciado
    public function __construct($a, $b, $c){
        $this->numero = $a;
        $this->bairro = $b;
        $this->cep = $c;
    }

    public function __destruct(){
        //var_dump("Variável foi limpada da memória.");
    }

    public function __toString(){
        return "Bairro: ".$this->bairro ."<br>" . "numero: ".$this->numero."<br>". "CEP: ".$this->cep;
    }
}


$meuEndereco = new Endereco(25, "estacao", "1235644");

var_dump(($meuEndereco));
echo "<br>";

echo $meuEndereco;

//unset($meuEndereco);


?>