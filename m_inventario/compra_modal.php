<!-- No usado actualmente -->

<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="idArticulo" class="controllabel hidden-xs">ID artículo</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="idArticulo" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="IdArticulo"></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="idSolicitudCompra" class="controllabel hidden-xs">ID solicitud de compra</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="idSolicitudCompra" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="idSolicitudDeCompra"></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="nomArticulo" class="controllabel hidden-xs">Nombre del artículo</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="nomArticulo" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="Nombre del artículo"></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="cantidad" class="controllabel hidden-xs">Cantidad de producto</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="cantidad" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="Cantidad de producto"></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="precio" class="controllabel hidden-xs">precio del artículo</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="precio" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="precio unitario"></div>
					</div>

					<div class="row"><!-- Fecha sustraida del sistema -->
						<div class="col-md-5 col-sm-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="fecha" type="text" class="form-control form-text" 
							size="25"  value="dd/mm/aaaa" placeholder="Ingrese fecha"></div>
					</div>


					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="costoT" class="controllabel hidden-xs">Costo total</label>
						</div>
						<div class="col-md-4 col-sm-4">
							<input id="costoT" type="text" class="form-control form-text" 
							size="25" readonly="readonly" placeholder="Costo total"></div>
					</div><!-- Costo total -->

				</div>
				<div class="modal-footer">
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						
						<button type="button" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->