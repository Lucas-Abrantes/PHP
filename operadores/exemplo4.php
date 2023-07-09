<?php



$a = NULL;

$b = NULL;

$c = NULL;

$d = 15;

// esse procedimento verifica cada variável
// caso tenha um valor diferente de vazio, ele exibe e para
echo $a ?? $b ?? $c ?? $d;
echo "<br>";
echo "Parei no valor $d";


?>