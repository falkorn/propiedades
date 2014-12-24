<?php 

/* Conexion a la base de datos */
	$conexion = mysql_connect ("localhost","portafol_tp","lpc389537");
	
	if (!$conexion)
	{
		die ("No se ha podido conectar al servidor:" . mysql_error());
	}
	else
	{
		echo "La coneccion se a realizado correctamente. <br />";
	}

	// 2.- Seleccion de la base de datos

	$bd_seleccionada = mysql_select_db("portafol_tp", $conexion);

	if (!$bd_seleccionada) {
		die("No hemos podido seleccionar la base de datos <br />");
	}
	else
	{
		echo "Base de Datos Seleccionada Correctamente. <br />";
	}

	// 3.- Enviamos la consulta a la base de datos seleccionada
	$resultados = mysql_query("SELECT * FROM prop_db",$conexion);

	// 4.- Trabajamos con la respuesta
	while ($fila = mysql_fetch_array($resultados)) {
		echo $fila[0] . "<br />";
		echo $fila[1] . "<br />";
		echo $fila[2] . "<br />";
		echo $fila[3] . "<br />";
		echo $fila[4] . "<br />";
		echo $fila[5] . "<br />";
		echo $fila[6] . "<br />";
		echo $fila[7] . "<br />";
		echo $fila[8] . "<br />";
		echo $fila[9] . "<br />";
		echo $fila[10] . "<br />";
		echo $fila[11] . "<br />";
		echo $fila[12] . "<br />";
		echo $fila[13] . "<br />";
		echo nl2br($fila[14])  . "<br />";
		echo $fila[15] . "<br />";
		echo $fila[16] . "<br />";
		echo $fila[17] . "<br />";
	}
/* Cerrar base de datos */
	// 5.- Desconectamos la base de datos.
	mysql_close ($conexion);
?>