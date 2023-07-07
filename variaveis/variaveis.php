<?php

//variavel
$nome = "Lucas ";
$idade = 25;
$sobrenome = "Abrantes";
//concatenar
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;

//para a execução aqui
exit;

echo $nome;
echo $idade;

// pula linha
echo "<br/>";

//permite ver o tipo e a quantidade de caractere
var_dump($nome);
var_dump($idade);

echo "<br/>";
echo "<br/>";

//remove o valor na memória
// apaga o valor da variável
unset($nome);

echo $nome;

// isset --> verifica se existe aquela variável
if(isset($nome)){
    echo $nome;
}

if(isset($idade)){
    echo $idade;
    echo " a variavel existe";
}


?>