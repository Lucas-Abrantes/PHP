<?php

session_id("bcn97hn1cfksk8msc5ppurv0p7");
require_once("config.php");

//gerar novos ids
session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>