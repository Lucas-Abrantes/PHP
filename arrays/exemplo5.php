<?php

define("SERVIDOR", "800");

echo SERVIDOR;
echo "<br><br>";

define("BANCO_DE_DADOS", [
    "nome"=>"root",
    "senha"=>"password",
    "ano"=> 2023
]);

print_r(BANCO_DE_DADOS);
echo "<br><br>";

//VERSAO DO PHP
echo PHP_VERSION;

//ALTERAR A BARRA
// FACILITA PARA MOVER ARQUIVOS
//DE UM SISTEMA OPERACIONAL PARA OUTRO
echo DIRECTORY_SEPARATOR;

?>