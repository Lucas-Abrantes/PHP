<?php

$vetor = array(
    "nome" => "pedro",
    "idade"=> 50
);


foreach($vetor as &$value){
    if(gettype($value) == 'integer'){
        $value += 10;
        echo "$value"."<br>";
    }
};

print_r($vetor);


?>