<?php
// escopo de variáveis --> até onde essa variável pode ser
// enxergada

$nome = "Lucas,";


function exibeNome(){
    global $nome;
    echo $nome . " " . "a primeira função está ok";
    echo "<br/>";
}


function exibeNome2(){
    $nome = dados;
    echo $nome;
}


exibeNome();
exibeNome2("ola");

?>