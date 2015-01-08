<?php 
	
require_once ("constants.php");

/* Conexion a la base de datos */
$conexion = 
mysql_connect (DB_SERVER,DB_USERNAME,DB_PASSWORD);

if (!$conexion)
{
	die ("No se ha podido conectar al servidor:" . mysql_error());
}

/* Seleccion de la base de datos */
$bd_seleccionada = 
mysql_select_db(DB_NAME, $conexion);

if (!$bd_seleccionada) {
	die("No hemos podido seleccionar la base de datos <br />");
}


?>