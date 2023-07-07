<?php

// tipos básicos: string, int, bool float

$nome = 'lucas';
$idade = 23;
$salario = 5400.50;
$bloqueado = true;

echo $nome;
echo "<br/>";

echo $idade;
echo "<br/>";

echo $salario;
echo "<br/>";

echo $bloqueado;
echo "<br/>";
/////////////////////////////////////////////////////

$vetor = array("curso", "mateus");
echo $vetor[0];
echo "<br/>";

echo $vetor[1];
echo "<br/>";
////////////////////////////////////////////////////

$objeto_data = new DateTime();
var_dump($objeto_data);
echo "<br/>";
/////////////////////////////////////////
// Especiais

$arquivo = fopen("variaveis.php", "r");
var_dump($arquivo);
echo "<br/>";

// ausência de valor
$nulo = NULL;
var_dump($nulo);


?>