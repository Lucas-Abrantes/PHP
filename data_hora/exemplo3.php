<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("l d/m/Y H:i:s");
//adicionar uma nova data

echo "<br>";
$dt->add($periodo);

echo $dt->format("l d/m/Y H:i:s");


?>