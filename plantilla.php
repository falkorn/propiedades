<!DOCTYPE html>

<?php $pagina= 'plantilla'; ?> <!-- Navegacion dinamica en el menu -->

<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Torres Propiedades</title>		
	<meta name="description" content="Casas, Departamentos y Terrenos en Venta y arriendo - Asesorias - Corredora de Propiedades - San Felipe" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1"/>
	<meta name="author" content="Torres Propiedades">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/styles.css">
</head>



<body>
<!-- ********************* Header ***********************-->
<?php require ('php/header.php') ?> 



<div class="col-xs-12">
<h1 class="titulo">Titulo</h1> <!-- Titulo del anuncio -->
</div>


	<div class="xxs col-xs-12 col-md-8">
		<div id="carousel" class="carousel slide" data-ride="carousel">
		 
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		    <div class="item active">
		      <img src="img/1.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/2.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/3.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/4.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/5.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/6.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/7.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/8.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/9.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/10.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/11.jpg" alt="...">
		    </div>
		    <div class="item">
		      <img src="img/12.jpg" alt="...">
		    </div>		    
		  </div>
		 
		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		  </a>
		  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		  </a>
		</div> <!-- Carousel -->
	</div>

	<div class="xxs col-xs-12 col-md-4">
		<div class="panel panel-primary">
			<div class="panel-heading">
			    <h2 class="panel-title text-center">Detalle</h2>
			</div>

			<table class="table">
				<tr>
					<td>Categoria</td>
					<td>Casa</td>
				</tr>
				<tr>
					<td>Operación</td>
					<td>Arriendo</td>
				</tr>
				<tr>
					<td>Comuna</td>
					<td>San Felipe</td>
				</tr>
				<tr>
					<td>Dormitorios</td>
					<td>3</td>
				</tr>
				<tr>
					<td>Baños</td>
					<td>2</td>
				</tr>
				<tr>
					<td>Estacionamiento</td>
					<td>1</td>
				</tr>
				<tr>
					<td>Mt&sup2</td>
					<td>3</td>
				</tr>
			</table>
			<table class="table">
				<th class="text-center">$ 32.000.000</th>
			</table>
		</div>

	</div>
	<hr class="featurette-divider">


<!-- ********************* Destacados ***********************-->
<?php require ('php/destacados.php') ?>
<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>