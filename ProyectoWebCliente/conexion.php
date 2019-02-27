<?php
$server="localhost";
$user= "root";
$pass = "";
$db="webcliente";

$con=mysql_connect($server,$user,$pass)or die("no se a podido establecer la conexion");
$sdb=mysql_select_db($db,$con) or die("La base de datos no existe");


?>