<!DOCTYPE html>

<?php $pagina= 'contacto'; ?> <!-- Navegacion dinamica en el menu -->

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





<!-- *******************************
		Contenedor Principal
*********************************-->
<div class="row">
	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
<?php
if (isset($_GET["status"])) 
{
	$status = $_GET["status"];
	if($status == "success"){
	echo '<div class="alert alert-success alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	<p class="text-center"><strong>¡Mensaje enviado con Exito!</strong></p></div>';
	}
	if($status == "error"){
	echo '<div class="alert alert-danger alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
	<p class="text-center"><strong>¡Error al enviar el mensaje!</strong></p></div>';
	}
} 
?>
		<h2 class="text-center">Contacto</h2>
			<p class="contacto">
				<i class="glyphicon glyphicon-earphone earphone"></i>
				<b>
					<a href="tel:+569 513 780 40">513 780 40</a> 
				</b>
			<p>
		<div class="col-xs-12">
			<form class="form-horizontal" role="form" method="get" action="php/correo.php">

				<div class="form-group">
					<input type="text" class="form-control" id="txt_nombre" name="txt_nombre" placeholder="Nombre">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control" pattern='\d{6}||\d{7}||\d{8}' id="txt_telephone" name="txt_telephone" placeholder="Telefono">
				</div>				
				<div class="form-group">
					<input type="email" class="form-control" id="txt_email" name="txt_email" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="txt_asunto" name="txt_asunto" placeholder="Asunto">
				</div>
				<div class="form-group">
					<textarea type="text" class="form-control" id="textarea_mensaje" rows="5" name="textarea_mensaje" placeholder="Escriba su mensaje"></textarea>
				</div>
				<div class="form-group">
						<button type="submit" class="btn btn-primary pull-right enviar" name="btn_enviar_correo">Enviar</button>
				</div>
			</form>
		</div>

	</div>



<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>