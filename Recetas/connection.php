<?php
//App que consulta a una base de datos y muestra info

$servidor="localhost";
$usuario="alumno";
$pass="alumno";
$base_datos="recetas";

//Conexion a BBDD
$descriptor=mysqli_connect($servidor, $usuario, $pass, $base_datos)
or die("Imposible conectar");
?>