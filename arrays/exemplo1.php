<?php

$frutas = array("batata", "uva", "maçã", "pera");

print_r($frutas);

echo "<br><br>";

$nome[0][0] = 'lucas';
$nome[0][1] = 'maria';
$nome[0][2] = 'pedro';

$nome[1][0] = 'marcelo';
$nome[1][1] = 'joao';
$nome[1][2] = 'ivan';

// end --> traz o último elemento daquela linha
echo end($nome[1]);

?>