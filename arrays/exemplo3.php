<?php


$pessoas = array();


array_push($pessoas, array(
    "nome"=> "lucas",
    "idade"=> 23
));

// transforma em json
echo json_encode($pessoas);

?>