<div class="container main">
	<div class="row">
		<div class="col-xs-9 col-sm-6 col-sm-offset-3">
	    <a href="index.html">
	    	<figure class="logo">
	    	<img class="logo_img" alt="Torres Propiedades" src="img/torres_propiedades.png">
	    	</figure>
	    </a>
	    </div>
	</div>

	<div class="row">
		<div class="navbar navbar-default justify">
			<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
			</div>
			<div class="navbar-collapse collapse">
			    <ul class="nav nav-pills nav-justified">
					<li <?php if ($pagina == 'inicio') {echo 'class="active"';} ?> ><a href="index.php">Inicio</a></li>
					<li <?php if ($pagina == 'propiedades') {echo 'class="active"';} ?> ><a href="propiedades.php">Propiedades </a></li>
					<li <?php if ($pagina == 'servicios') {echo 'class="active"';} ?> ><a href="servicios.php">Servicios</a></li>
					<li <?php if ($pagina == 'contacto') {echo 'class="active"';} ?> ><a href="contacto.php">Contacto</a></li>
			    </ul>
			</div>
		</div> <!-- End Navbar -->
	</div> <!-- End row -->