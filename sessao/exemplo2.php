<?php

require_once('config.php');
//session_start();

// limpa as variáveis da sessão
session_unset($_SESSION["nome"]);
echo $_SESSION["nome"];

//limpa todos os dados do usuário
session_destroy();

?>