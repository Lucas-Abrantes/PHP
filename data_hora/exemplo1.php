<?php

echo date("d/m/Y H:i:s", 1689360877);

echo "<br>";

echo time();
echo "<br>";
echo "<br>";

$data = strtotime("2001-09-15");

echo date("l d/m/Y", $data);
echo "<br>";

echo date("l d/m/Y H:i:s",1689361096);
echo "<br>";
echo strtotime("now");

?>