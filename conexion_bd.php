<?php

function conectar_bd(){

// Puerto -> Host
$host ="localhost";
// usuario db
$usuario ="root";
// contraseña bd
$contraseña = "";
// Nombre de la bd
$base_datos = "sistema";
// usamos el metodo conectar
$conectar = mysqli_connect($host,$usuario,$contraseña);

mysqli_select_db($conectar,$base_datos);
//print_r ($conectar);
return $conectar;

};

?>