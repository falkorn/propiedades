<!DOCTYPE html>

<?php $pagina = 'plantilla'; ?> <!-- Menu dinamico -->
<?php require_once ("php/conexion_bd.php"); ?>
<?php require_once ("php/functions.php"); ?>
<?php 

if (isset($_GET["propiedad"])) 
{
		$propiedad_selec = $_GET["propiedad"];
		$propiedad = propiedad_por_id ($propiedad_selec);
}


?>
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
<?php 
echo '<h1>' . utf8_encode($propiedad['PROP_TITULO']) . '</h1>';
?>
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
					<?php echo "<td>" . utf8_encode($propiedad['PROP_CATEGORIA']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Operación</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_ESTADO']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Comuna</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_COMUNA']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Dormitorios</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_DORM']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Baños</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_BANOS']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Estacionamiento</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_CAR']) . "</td>"; ?>
				</tr>
				<tr>
					<td>Mt&sup2</td>
					<?php echo "<td>" . utf8_encode($propiedad['PROP_M2']) . "</td>"; ?>
				</tr>
			</table>
			<table class="table">
				<?php echo "<th class=\"text-center\">$" . utf8_encode($propiedad['PROP_VALOR']) . "</th>"; ?>
			</table>
		</div>

	</div>

	<div class="xxs col-xs-12 col-sm-8">
		<h2>Descripción</h2>
		<p class="text-justify">
			<?php echo (nl2br (utf8_encode($propiedad['PROP_DESC'])) ); ?>
		</p>
	</div>

	<div class="col-xs-12 col-sm-4">
		<h2 class="text-center">Contacto</h2>
			<p class="contacto">
				<i class="glyphicon glyphicon-earphone earphone"></i>
				<b>
					<a href="tel:+569 875 455 55">513 780 40</a> 
				</b>
			<p>
		<div class="col-xs-12">
			<form class="form-horizontal" role="form" method="get" action="php/correo.php">
				<div class="form-group">
					<input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email">
				</div>
				<div class="form-group">
					<textarea type="password" class="form-control" id="textarea_mensaje" rows="5" name="textarea_mensaje" placeholder="Escriba su mensaje"></textarea>
				</div>
				<div class="form-group">
						<button type="submit" class="btn btn-primary pull-right enviar" name="btn_enviar_correo">Enviar</button>
				</div>
			</form>
		</div>
	</div>

	<hr class="featurette-divider">


<!-- ********************* Destacados ***********************-->
<?php require ('php/destacados.php') ?>
<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>