
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Asignación de vehículos</h4>
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
							<th>Fecha</th>
							<th>Departamento que solicita</th>
							<th>Estado</th>
							<th>Otro</th>
						</tr>
						<tr>
							<td>01/12/2013</td>
							<td>Gerencia de Servicio</td>
							<td>Completada</td>
							<td>
								<a data-toggle="modal" disabled="true" href="#miModal" class="btn btn-default btn-xs">Cambiar estado</a>
							</td>
						</tr>
						<tr>
							<td>01/10/2014</td>
							<td>Activo Fijo</td>
							<td>Pendiente</td>
							<td>
								<a data-toggle="modal"  href="#miModal" class="btn btn-default btn-xs">Cambiar estado</a>
								
							</td>
						</tr>
						
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("peticion_modal.php"); ?>
	</div><!-- /.modal -->
