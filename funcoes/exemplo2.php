<?php

$valor = 100;

//passagem por referência
function ola(&$valor1){
    $valor1 = 50;
    //$argumentos = func_get_args();
    return $valor1;
}

echo ola($valor)."<br>";
echo "$valor"."<br>";



?>