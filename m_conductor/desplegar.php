﻿
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Datos de los conductores</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<div class="row center-text">
					<br>
					<input type="text" id="idBuscar" placeholder="Busqueda">
					<div class="btn-group">
						<span class="glyphicon glyphicon-search"></span>
							</span> <input type="button" class="btn btn-default" value="Buscar"> 
						
					</div>

				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>Departamento</th>
							<th>Nombre </th>
							<th>Telefono</th>
							<th>Licencia</th>
						</tr>
						<tr>
							<td>Administrativo</td>
							<td>Conductor 1</td>
							<td>1111-1111</td>
							<td>Licencia 1</td>
						</tr>
						<tr>
							<td>Depto 2</td>
							<td>Conductor 2</td>
							<td>1111-1112</td>
							<td>Licencia 2</td>
						</tr>
						
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
