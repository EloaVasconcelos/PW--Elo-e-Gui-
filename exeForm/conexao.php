<?php
$servidor = "localhost";
$usuario = "root";
$senha = "12345678";
$banco = "dbBDPWA";

$cn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);

?>
