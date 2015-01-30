<?php

function mostrar_propiedades ($propiedades){
while ($propiedad = mysql_fetch_array($propiedades)) {

	global $conexion;
	$consulta = "SELECT * FROM img_db WHERE PROP_ID=" . $propiedad['PROP_ID'];
	$respuesta = mysql_query ($consulta,$conexion);
	verificar_consulta($respuesta);
	$thumb=mysql_fetch_array($respuesta);

echo '<div class="col-xs-12 thumbnail">
	  <div class="xxs col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">';
	if ($thumb['IMG_NOMBRE']!=NULL) 
	{
	echo	' <img src="img/' . $thumb['IMG_NOMBRE'] . '" class="img-responsive"/> </div>';
	}else
	{
	echo	' <img src="img/default.jpg" class="img-responsive"/> </div>';
	}

echo		'<div class="xxs col-xs-12 col-sm-8">';
echo			'<div class="col-xs-12">';
echo			'<a class="title" href="plantilla.php?propiedad=' . $propiedad['PROP_ID'] . '"><h3>' . utf8_encode($propiedad['PROP_TITULO']) . '</h3> </a></div>';
echo			'<div class="xxs col-xs-6 no-padding">';
echo				'<ul class="list-group right">';		
echo					'<li class="list-group-item">';
echo				    '<span class="badge">' . $propiedad['PROP_DORM'] . '</span>';
echo				    'Dormitorios';
echo					'</li>';
echo				'</ul>';
echo			'</div>';
echo			'<div class="xxs col-xs-6 no-padding">';
echo				'<ul class="list-group">		';			
echo					'<li class="list-group-item">';
echo				    '<span class="badge">' . $propiedad['PROP_BANOS'] . '</span>';
echo				   ' Baños';
echo					'</li>';
echo				'</ul>';
echo			'</div>';
echo			'<div class="xxs col-xs-6 no-padding">';
echo				'<ul class="list-group right">	'	;			
echo					'<li class="list-group-item">';
echo				    '<span class="badge">' . $propiedad['PROP_CAR'] . '</span>';
echo				   ' Estacionamiento';
echo					'</li>';
echo				'</ul>';
echo			'</div>';
echo				'<div class="xxs col-xs-6 no-padding">';
echo				'<ul class="list-group">	'			;	
echo					'<li class="list-group-item">';
echo				    '<span class="badge">' . $propiedad['PROP_M2'] . '</span>';
echo				    'Mt&sup2';
echo					'</li>';
echo				'</ul>';
echo			'</div>';
echo			'<div class="col-xs-12 no-padding">';
echo				'<div class="panel panel-primary">';
echo					'<div class="panel-heading">';
echo					'<h2 class="panel-title text-center">Valor: $ ' . $propiedad['PROP_VALOR'] . '</h2>';
echo					'</div>';
echo				'</div>';
echo			'</div>';
echo		'</div>';			
echo	'</div>';
}
}

function mostrar_imagenes($imagenes)
{
	echo 	
	'<div class="xxs col-xs-12 col-md-8">
	<div id="carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">';
	$c = 0;
	if($imagenes == NULL)
	{
	echo  
	'<div class="item active">    
	<img src="img/default.jpg" alt="...">
	</div>';	
	}else
	{

		while($imagen = mysql_fetch_array($imagenes))
		{

			if($c == 0)
			{
			echo  '<div class="item active">';    
			echo  '<img src=" img/' . $imagen['IMG_NOMBRE'] . '" alt="...">';
			echo  '</div>';	
			$c += 1;
			}
			else
			{
			echo  '<div class="item">';    
			echo  '<img src=" img/' . $imagen['IMG_NOMBRE'] . '" alt="...">';
			echo  '</div>';	
			$c += 1;
			}
			
		}
	}
	echo 
	'</div>
	  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	  </a>
	  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	  </a>
	</div>
	</div>';
}

?>