<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container show-top-margin separate-rows tall-rows">
		<div class="panel panel-primary col-md-6 col-md-offset-3" >
			<div class="panel-heading "><h4>Datos de Usuario</h4>
			</div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				<form class="form-horizontal form-inline" role="form">
					<div class="row center-text">
						<br>
						
						<div > 
							<input type="text" id="idBuscar" placeholder="Buscar">
							<span class="glyphicon glyphicon-search"></span>
							<input type="button" value="Buscar">
						</div>
						
						<br>

					</div>

					<!-- Inicio de los objetos del formulario mediante filas -->
					<table id="tabla" class="table table-hover">
						<tr>
							<th>Nombre</th>
							<th>Cabecera 2</th>
							<th>Cabecera 3</th>
							<th>Correo</th>
						</tr>
						<tr>
							<td>Hola</td>
						</tr>
					</table>

					<!-- Botones -->
					<div class="row center-text">
						<br>
						
						<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
							onclick="limpiar('#panel1');" ></div>
						<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
						</div>
						<br>
					</div>
				</form>
			</div> <!-- Fin del panel-body -->
		</div>
	</div>
</body>
</html>
