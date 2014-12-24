<!DOCTYPE html>

<?php $pagina= 'propiedades'; ?> <!-- Navegacion dinamica en el menu -->
<?php require_once ("php/conexion_bd.php"); ?>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Propiedades en Venta y Arriendo - Torres Propiedades</title>		
	<meta name="description" content="Propiedades en Venta y Arriendo - Casas, Departamentos, Terrenos, Parcelas, Comerciales - Torrespropiedades San Felipe" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<meta name="author" content="Torres Propiedades">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>



<body>
<!-- ********************* Header ***********************-->
<?php require ('php/header.php'); ?> 
<!-- ******************** Menu de busqueda *******************-->
<?php require_once ('php/menu_busqueda.php'); ?>

<!-- *******************************    Divisor    *********************************-->
	<hr class="featurette-divider">

<!-- *******************************    Propiedad 1    *********************************-->
		<div class="col-xs-12 thumbnail">
			
			<div class="xxs col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
				<a href="#"> <img src="img/destacado_1.jpg" class="img-responsive"/> </a>
			</div>
			<div class="xxs col-xs-12 col-sm-8"> 
				<div class="col-xs-12">
					<a class="title" href="#"><h3>Casa en villa El Señorial</h3> </a>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Dormitorios
						</li>
					</ul>
				</div>
				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Baños
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Estacionamiento
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Mt&sup2
						</li>
					</ul>
				</div>
				<div class="col-xs-12 no-padding">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<h2 class="panel-title text-center">Valor: $ 32.000.000</h2>
						</div>
					</div>
				</div>
			</div>
			
		</div>

<!-- *******************************    Propiedad 2    *********************************-->
		<div class="col-xs-12 thumbnail">
			
			<div class="xxs col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
				<a href="#"> <img src="img/destacado_2.jpg" class="img-responsive"/> </a>
			</div>
			<div class="xxs col-xs-12 col-sm-8"> 
				<div class="col-xs-12">
					<a class="title" href="#"><h3>Casa en villa El Señorial</h3> </a>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Dormitorios
						</li>
					</ul>
				</div>
				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Baños
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Estacionamiento
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Mt&sup2
						</li>
					</ul>
				</div>
				<div class="col-xs-12 no-padding">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<h2 class="panel-title text-center">Valor: $ 32.000.000</h2>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<div class="col-xs-12 thumbnail">
			
			<div class="xxs col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-0">
				<a href="#"> <img src="img/destacado_3.jpg" class="img-responsive"/> </a>
			</div>
			<div class="xxs col-xs-12 col-sm-8"> 
				<div class="col-xs-12">
					<a class="title" href="#"><h3>Casa en villa El Señorial</h3> </a>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Dormitorios
						</li>
					</ul>
				</div>
				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Baños
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group right">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Estacionamiento
						</li>
					</ul>
				</div>

				<div class="xxs col-xs-6 no-padding">
					<ul class="list-group">					
						<li class="list-group-item">
					    <span class="badge">14</span>
					    Mt&sup2
						</li>
					</ul>
				</div>
				<div class="col-xs-12 no-padding">
					<div class="panel panel-primary">
						<div class="panel-heading">
						<h2 class="panel-title text-center">Valor: $ 32.000.000</h2>
						</div>
					</div>
				</div>
			</div>
			
		</div>




<!-- ********************* Destacados ***********************-->
<?php require ('php/destacados.php') ?>
<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>