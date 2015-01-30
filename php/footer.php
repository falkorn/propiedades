<div class="row">
	<div class="col-xs-12 footer">
	<ul class="foot">
		<li > <i class="glyphicon glyphicon-earphone"></i><b style="font-size:22px;">  <a href="tel:+569 513 780 40">+569 513 780 40</a> </b></li>
		<li> <a href="mailto:contacto@torrespropiedades.cl">contacto@torrespropiedades.cl</a></li>
		<li>Freire N° 751, Oficina 3 - San Felipe de Aconcagua.</li>

	</ul>
		<div class="col-xs-12">
			<hr class="divider-small">
			<ul class="intranet">
				<li class="pull-left"><i class="glyphicon glyphicon-envelope"></i><a href="#"> Webmail</a></li> 
				<li class="pull-right"><i class="glyphicon glyphicon-home"></i><a href="#"> Intranet</a></li>
			</ul>
		</div>
	
	</div>
</div>

</div> <!-- End Container -->

<div class=""></div>

<!-- *******************
		Scripts
*********************-->
  <!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-49363656-1', 'torrespropiedades.cl');
	  ga('send', 'pageview');

	</script>
<?php 	
if (isset($conexion)) {
	mysql_close ($conexion);
}
?>