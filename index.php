<!DOCTYPE html>

<?php $pagina= 'inicio'; ?> <!-- Navegacion dinamica en el menu -->

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
<div id="carousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active"><img src="img/portada1.jpg" alt="..."></div>
		<div class="item"><img src="img/portada2.jpg" alt="..."></div>    
	</div>
</div> <!-- Carousel -->

</div>




<!-- ********************* Destacados ***********************-->
<?php require ('php/destacados.php') ?>
<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>