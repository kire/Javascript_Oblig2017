<?php


$dn = $_GET["kode"];
$n = $_GET["navn"];
$p = $_GET["epost"];


$fil = fopen("join.dat","a");
fwrite($fil,$dn . ";" . $n . ";" . $p . "\n");
fclose($fil);





?>