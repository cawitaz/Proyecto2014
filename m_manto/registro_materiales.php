
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Registro de materiales utilizados</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row">
					<div class="col-md-5 col-sm-5"><label for="idManto"  class="controllabel hidden-xs">Solicitud de mantenimiento</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select id="idManto" class="form-control" size="4" >
							<option value="idManto1">Solicitud de mantenimiento 1</option>
						    <option value="idManto2">Solicitud de mantenimiento 2</option>
						</select>
					</div>
				</div>

				<!-- Precio del artículo. Este valor no se debe capturar ya que este es unico 
				y se encuentra en su orden de compra correspondiente -->

				<!--Cantidad del artículo. Este valor se encuentra en la orden de compra -->

				<div class="row text_center">
					<br>
					<label for="idSoliCompra"  class="controllabel hidden-xs">Artículos</label>
				</div>
				<div class="row">

					<div class="table-responsive">
						<table id="tabla" class="table table-hover">						
							<tr>
								<th> </th>
								<th>Nombre</th>
								<th>Cantidad</th>
								<th>Precio unitario</th>
							</tr>
							<tr>
								<td>
									<input id="cant00" type="checkbox" class="form-control form-text" name="check00">
								</td>
								<td>Tornillos</td>
								<td>
									<input id="cant00" type="number" class="form-control form-text" name="cant00"  value="12">
								</td>
								<td>
									<input id="precio00" type="number" class="form-control form-text" name="cant00"  value="12">
								</td>
							</tr>							
							<tr>
								<td>
									<input id="cant00" type="checkbox" class="form-control form-text" name="check00">
								</td>
								<td>Aceite</td>
								<td>
									<input id="cant01" type="number" class="form-control form-text" name="cant01"  value="12">
								</td>
								<td>
									<input id="precio01" type="number" class="form-control form-text" name="cant01"  value="12">
								</td>
							</tr>
							
							
						</table>
					</div>
				</div>
				

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					
					<div class="col-sm-2 col-md-2 col-sm-offset-1 col-md-offset-1">
						<input type="button" id="cancelar" class="btn btn-default" value="Cancelar" onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" >
					</div>
					<div class="col-sm-2 col-md-2">
						<input type="button" id="eliminar" class="btn btn-default" value="Eliminar" >
					</div>
					<div class="col-sm-2 col-md-2">
						<input type="button" id="agregar" class="btn btn-default" value="Agregar" >
					</div>
					<div class="col-sm-2 col-md-2"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
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
