
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Elaborar Petición de compra</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
				  <div class="col-md-5 col-sm-5"><label for="idSoliCompra"  class="controllabel hidden-xs">Código de solicitud</label>
				  </div>
				  <div class="col-md-4 col-sm-4"><input id="idSoliCompra" type="text" readonly="readonly" class="form-control form-text" 
				  	size="25" value="Id Petición"></div>
				</div>

				<!-- Precio del artículo. Este valor no se debe capturar ya que este es unico 
				y se encuentra en su orden de compra correspondiente -->

				<!--Cantidad del artículo. Este valor se encuentra en la orden de compra -->


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
					<div class="col-sm-2 col-md-2 ">
						<input type="button" id="cancelar" class="btn btn-default" value="Cancelar" onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" >
					</div>
					<div class="col-sm-2 col-md-2">
						<input type="button" id="eliminar" class="btn btn-default" value="Eliminar" >
					</div>
					<div class="col-sm-2 col-md-2">
						<input type="button" id="agregar" class="btn btn-default" value="Modificar" >
					</div>
					<div class="col-sm-2 col-md-2">
						<input type="button" id="agregar" class="btn btn-default" value="Agregar" >
					</div>
					<div class=""> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("compra_modal.php"); ?>
	</div><!-- /.modal -->
