<?php

$condicao = true;

while($condicao){
    $numero = rand(1, 10);
    echo $numero."<br><br>";
    if($numero === 3){
        echo "Encontrou o $numero";
        $condicao = false;
    }
}


?>