
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
							</span> <input type="button" value="Buscar"> 
						
					</div>
					

				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>Departamento</th>
							<th>Nombre </th>
							<th>Estado</th>
							<th>Otro</th>
						</tr>
						<tr>
							<td>Administrativo</td>
							<td>Conductor 1</td>
							<td>Autorizado</td>
							<td><input type="button" class="btn btn-default btn-xs" value="Cambiar estado"></td>
						</tr>
						<tr>
							<td>Depto 2</td>
							<td>Conductor 2</td>
							<td>No autorizado</td>
							<td><input type="button" class="btn btn-default btn-xs" value="Cambiar estado"></td>
						</tr>
						
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default " value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>
