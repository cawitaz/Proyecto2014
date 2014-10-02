
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Inventario del Taller</h4>
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
				
				<div class="table-responsive">
					<table id="tabla" class="table table-hover">						
						<tr>
							<th>ID Articulo</th>
							<th>Nombre</th>
							<th>Otro</th>
						</tr>
						<tr>
							<td>ART-000001</td>
							<td>Tornillos</td>
							<td>
								<a data-toggle="modal" href="#miModal" class="btn btn-default btn-xs">Más opciones</a>
							</td>
						</tr>
						<tr>
							<td>ART-000002</td>
							<td>Desatornillador philips</td>
							<td>
								<a data-toggle="modal" href="#miModal" class="btn btn-default btn-xs">Más opciones</a>
							</td>
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

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("taller_modal.php"); ?>
	</div><!-- /.modal -->
