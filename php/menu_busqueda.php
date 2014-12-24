	
<div class="col-xs-12 menu-busqueda">

	<button type="button" class="form-toggle btn-info" data-toggle="collapse" data-target=".form-collapse">
	<i class="glyphicon glyphicon-filter"> Filtros </i>
	</button>


	<form class="form-inline form-collapse collapse" role="form">

		<label>Categoria:</label>
		<select class="form-control">
			<option>Todas</option>
			<option>Casa</option>
			<option>Departamento</option>
			<option>Comercial</option>
			<option>Terreno</option>
		</select>

		<label>Operacion:</label>
		<select class="form-control">
			<option>Todo</option>
			<option>Venta</option>
			<option>Arriendo</option>
		</select>

		<label>Precio:</label>
		<div class="form-group">
		<div class="input-group">
		<label class="sr-only" for="minimmo">Minimo</label>
		<div class="input-group-addon">$</div>
		<input type="number" class="form-control" id="minimo" placeholder="Minimo">
		</div>
		</div>

		<label> <i class="glyphicon glyphicon-minus"></i> </label>

		<div class="form-group">
		<div class="input-group">
		<label class="sr-only" for="maximo">Maximo</label>
		<div class="input-group-addon">$</div>
		<input type="number" class="form-control" id="maximo" placeholder="Maximo">
		</div>
		</div>

		<button type="submit" class="btn btn-default">Buscar</button>

	</form>
</div>