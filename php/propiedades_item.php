<?php

function mostrar_propiedades ($propiedades){
while ($propiedad = mysql_fetch_array($propiedades)) {
echo '<div class="col-xs-12 thumbnail">';
echo	'<div class="xxs col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">';
echo		'<a href="#"> <img src="img/destacado_1.jpg" class="img-responsive"/> </a></div>';
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
?>