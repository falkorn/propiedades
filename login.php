<!DOCTYPE html>

<?php require_once ("php/conexion_bd.php"); ?>
<html lang="es">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login Torres Propiedades</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Panel de Acceso</h1>
      </div>
      <div class="modal-body">
       <div class="row">
          <form class="form col-md-12 center-block">
            <div class="form-group">
            <input type="text" class="form-control input-lg" placeholder="Nombre de Usuario">
            </div>
            <div class="form-group">
            <input type="password" class="form-control input-lg" placeholder="Contraseña">
            </div>
            <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block">Ingresar</button>
            </div>
            <button class="btn btn-danger btn-lg btn-block" data-dismiss="modal" aria-hidden="true">Cancelar</button>
          </form>
        </div>
      </div>
  </div>
  </div>
</div>
<?php   mysql_close ($conexion); ?>

</body>
</html>