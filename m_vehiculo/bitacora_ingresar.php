<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar bit&#225cora de veh&#237culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idBitacora" class="controllabel hidden-xs">Bit&#225cora de veh&#237culo </label>
				  </div>
				  <div class="col-md-3" id="idBitacora" > 
				  	<select class="form-control">
				        <option value="">Vehículo 1</option>
				        <option value="">Vehículo 2</option>
				    </select>
				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<div class="row"><!-- Fecha sustraida del sistema -->
				  <div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
				  </div>
				  <div class="col-md-3"><input id="fecha" type="text" class="form-control form-text" 
				  	size="25" readonly="readonly" value="Fecha"></div>
				</div>

				<div class="row"><!-- Solicitante -->
					<div class="col-md-5"><label for="solicita"  class="controllabel hidden-xs">Solicitante</label>
					</div>
					<div class="col-md-3">
						<select id="solicita" class="form-control">
					  		<option value="">Usuario1</option>
					        <option value="">Usuario2</option>
					    </select>
					</div>
				</div>
				

				<div class="row"><!-- Destino -->
				  <div class="col-md-5"><label for="destino" class="controllabel hidden-xs">Destino del veh&#237culo</label> </div>
				  <div class="col-md-3"><input type="text" class="form-control" size="25" id="destino"
								placeholder="Ingrese el destino"></div>
				</div>

				<div class="row"><!--Conductor -->
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Conductor </label>
				  </div>
				  <div class="col-md-3" id="conductor" > 
				  	<select class="form-control">
				        <option value="">Conductor 1</option>
				        <option value="">Conductor 2</option>
				        <option value="">Conductor 3</option>
				      </select>
				  	<!-- Combobox para los distintos conductores--></div>
				</div>


				<!-- Botones Guardar y cancelar -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
						onclick="limpiar('#panel1');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
					</div>
					<br>
				</div>
					
				</form>
			</div>
	</div>
</body>
</html>
