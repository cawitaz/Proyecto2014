<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="idSolicitudCompra" class="controllabel hidden-xs">ID solicitud de compra</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="idSolicitudCompra" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="idSolicitudDeCompra"></div>
					</div>

					<div class="row">
						<div class="table-responsive">
							<table id="tabla" class="table table-hover">						
								<tr>
									<th>Nombre</th>
									<th>Cantidad</th>
									<th>Precio</th>
								</tr>
								<tr>
									<td>Tornillos</td>
									<td>
										<input id="cant00" type="number" readonly="readonly" class="form-control form-text" name="cant00"  value="12">
									</td>
									<td>
										<input id="precio00" type="number" readonly="readonly" class="form-control form-text" name="cant00"  value="12">
									</td>
								</tr>							
								<tr>
									<td>Aceite</td>
									<td>
										<input id="cant01" type="number" readonly="readonly" class="form-control form-text" name="cant01"  value="12">
									</td>
									<td>
										<input id="precio01" type="number" readonly="readonly" class="form-control form-text" name="cant01"  value="12">
									</td>
								</tr>
								
								
							</table>
						</div>
					</div>

					<div class="row"><!-- Estado de Solicitud de Compra -->
						<div class="col-md-5 col-sm-5">
							<label for="estado"  class="controllabel hidden-xs">Estado de solicitud de compra</label>
						</div>
						<div class="col-md-4 col-sm-4">
							<select id="estado" class="form-control">
								<option value="2">Seleccione estado</option>
							    <option value="1">Completada</option>
							    <option value="0">Cancelada</option>
							</select>
						</div>
					</div> 

				</div>
				<div class="modal-footer">
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						
						<button type="button" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->