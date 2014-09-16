<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar p&#243liza de veh&#237culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5"><label for="idPoliza" class="controllabel hidden-xs">P&#243liza</label>
				  </div>
				  <div class="col-md-3"><input id="idPoliza" type="text" class="form-control form-text" 
				  	size="25" placeholder="Ingrese p&#243liza"></div>
				</div>

				<div class="row"><!-- Fecha sustraida del sistema -->
				  <div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
				  </div>
				  <div class="col-md-3"><input id="fecha" type="text" class="form-control form-text" 
				  	size="25" readonly="readonly" value="Fecha"></div>
				</div>

				<div class="row"><!-- Solicitante -->
					<div class="col-md-5"><label for="vehiPoliza"  class="controllabel hidden-xs">Veh&#237culo</label>
					</div>
					<div class="col-md-3">
						<select id="vehiPoliza" class="form-control">
					  		<option value="">veh&#237culo 1</option>
					        <option value="">veh&#237culo 2</option>
					    </select>
					</div>
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
