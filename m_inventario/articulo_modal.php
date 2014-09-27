<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Opciones</h4>
		</div>

		<div class="modal-body">
			<!-- Inicio de los objetos del formulario mediante filas -->
			<div class="row">
				<div class="col-md-5"><label for="idconductor"  class="controllabel hidden-xs">Id  art&#237;culo</label>
				</div>
				<div class="col-md-4"><input id="idconductor" type="text" readonly="readonly" class="form-control form-text" 
				  	size="25" value="Id_conductor"></div>
			</div>

			<div class="row"><!-- Id Solicitud Compra -->
				<div class="col-md-5">
					<label for="idSolicitud"  class="controllabel hidden-xs">Solicitud de compra</label>
				</div>
				<div class="col-md-4">
					<select id="idSolicitud" class="form-control">
						<option value="">Solicitud de compra 1</option>
					    <option value="">Solicitud de compra 2</option>
					</select>
				</div>
			</div> 
				
			<div class="row"><!-- Nombre de artículos -->
				<div class="col-md-5">
					<label for="nomArticulo"  class="controllabel hidden-xs">Art&#237;culo</label>
				</div>
				<div class="col-md-4">
					<select id="nomArticulo" class="form-control">
						<option value="">Nombre de artículo 1</option>
					    <option value="">Nombre de artículo 2</option>
					</select>
				</div>
			</div> 

			<div class="row"><!--Precio del artículo.-->
				<div class="col-md-5"><label for="precio" class="controllabel hidden-xs">Precio</label>
				</div>
				<div class="col-md-4"><input id="precio" type="text" class="form-control form-text" 
			  	 size="25" value="$ " readonly="readonly" placeholder="Ingrese precio de artículo"></div>
			</div>

			<div class="row"><!--Cantidad del artículo.-->
				<div class="col-md-5"><label for="cantidad" class="controllabel hidden-xs">Cantidad</label>
				</div>
				<div class="col-md-4"><input id="cantidad" type="text" class="form-control form-text" 
			  	 size="25" value="#" readonly="readonly" placeholder="Ingrese cantidad el artículo"></div>
			</div>
			
			<div class="row"><!--Fecha -->
				<div class="col-md-5"><label for="fechaCompra" class="controllabel hidden-xs">Fecha de la compra</label>
				</div>
				<div class="col-md-4"><input id="fechaCompra" type="text" class="form-control form-text" 
			  	 size="25" value="dd/mm/aaaa" placeholder="Ingrese fecha de compra"></div>
			</div>

		</div>
		
		<div class="modal-footer">
			<!-- Bloque de botones de ventana emergente -->
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->