
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Modificar artículos</h4>
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
							<th>ID artículo</th>
							<th>Nombre artículo</th>
							<th>Fecha de compra</th>
							<th>Otro</th>
						</tr>
						<div class="contenido">
							<tr>
								<td>ART-000001</td>
								<td>Articulo 1</td>
								<td>01/01/2001</td>
								<td>
									<a data-toggle="modal" href="#miModal" class="btn btn-default btn-xs">Más opciones</a>
								</td>
							</tr>
							<tr>
								<td>ART-000002</td>
								<td>Articulo 2</td>
								<td>01/01/2002</td>
								<td>
									<a data-toggle="modal" href="#miModal" class="btn btn-default btn-xs">Más opciones</a>
								</td>
							</tr>
						</div>
					</table>
				</div>

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

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("articulo_modal.php"); ?>
	</div><!-- /.modal -->
