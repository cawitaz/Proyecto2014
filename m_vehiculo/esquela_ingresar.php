<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar Esquela</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idEsquela"  class="controllabel hidden-xs">N&#250mero de esquela</label>
				  </div>
				  <div class="col-md-3"><input id="idEsquela" type="text" class="form-control form-text" 
				  	size="25" placeholder="Ingrese N&#250mero de Esquela"></div>
				</div>

				<div class="row">
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Conductor </label>
				  </div>
				  <div class="col-md-3" id="conductor" > 
				  	<select class="form-control">
				        <option value="">Conductor 1</option>
				        <option value="">Conductor 2</option>
				      </select>

				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<div class="row">
					<div class="col-md-5"><label for="motivo" class="controllabel hidden-xs">Motivo</label>
					</div>
					<div class="col-md-3"><textarea rows="3" id="motivo" type="text" class="form-control form-text" 
				  	 size="25" placeholder="Ingrese motivo de la esquela"></textarea></div>
				</div>


				<div class="row">
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Monto </label>
				  </div>
				  <div class="col-md-3" id="conductor" > 
				  	<select class="form-control">
				        <option value="100">$ 100.00</option>
				        <option value="200">$ 200.00</option>
				        <option value="300">$ 300.00</option>
				      </select>

				  	<!-- Combobox para los distintos conductores--></div>
				</div>

				<div class="row">
				  <div class="col-md-5"><label for="fechaRecib" class="controllabel hidden-xs">Fecha de recibida</label> </div>
				  <div class="col-md-3"><input type="text" class="form-control" readonly="readonly" size="25" id="fechaRecib"
								placeholder="fecha_recibido"></div>
				</div><!--Fecha de recibido -->

				<div class="row">
				  <div class="col-md-5"><label for="fechaRecib" class="controllabel hidden-xs">Fecha de recibida</label> </div>
				  <div class="col-md-3"><input type="text" class="form-control" readonly="readonly" size="25" id="fechaRecib"
								placeholder="fecha_vence"></div>
				</div><!--Fecha de vencimiento -->



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
