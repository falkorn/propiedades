<!DOCTYPE html>

<?php $pagina= 'propiedades'; ?> <!-- Navegacion dinamica en el menu -->
<?php require_once ("php/conexion_bd.php"); ?>
<?php require_once ("php/functions.php"); ?>
<?php require ("php/mostrar.php"); ?>
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
<hr class="featurette-divider">
<!-- *******************************    Propiedades    *********************************-->
<?php 
	$propiedades = obtener_propiedades ($conexion);
	mostrar_propiedades ($propiedades);
?>

<!-- ********************* Destacados ***********************-->
<?php require ('php/destacados.php') ?>
<!-- ********************* Footer  *************************-->
<?php include_once ("php/footer.php"); ?>


</body>
</html>