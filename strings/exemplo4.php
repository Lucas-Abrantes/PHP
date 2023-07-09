<?php

$frase = "Processamento Digital de Sinais em Tempo Discreto";

$palavra = "Sinais";
// passo a variável e até onde eu quero pegar o texto
$q = strpos($frase, "em");
echo $q;
echo "<br>";

// passo a variável, o início e o fim
$q2 = substr($frase, 0, $q);
echo $q2;
echo "<br>";

$q2 = substr($frase, $q + 2, strlen($frase));
echo $q2;

?>