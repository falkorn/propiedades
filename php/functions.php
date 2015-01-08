<?php 

function verificar_consulta($consulta)
{
	if (!$consulta) 
	{
		die ("No se ha podido realizar la consulta:" . mysql_error() );
	}
}

function obtener_propiedades()
{
	global $conexion;
	$consulta = "SELECT * FROM prop_db";
	$propiedades = mysql_query ($consulta,$conexion);
	verificar_consulta($propiedades);
	return $propiedades;
}

function propiedad_por_id($propiedad_selec)
{
	global $conexion;
	$consulta = "SELECT * FROM prop_db WHERE PROP_ID=" . $propiedad_selec . " LIMIT 1";
	$respuesta = mysql_query ($consulta,$conexion);
	verificar_consulta($respuesta);
	if ($propiedad = mysql_fetch_array($respuesta)) 
	{
		return $propiedad;
	}else
	{
		return NULL;
	}
}



?>