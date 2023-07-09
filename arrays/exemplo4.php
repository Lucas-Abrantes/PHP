<?php

$json = '[{"nome": "lucas","idade": 23}]';

//transforma em array
$data = json_decode($json, true);

var_dump($data);
?>