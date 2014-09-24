<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5"><label for="idPoliza" class="controllabel hidden-xs">P&#243;liza</label>
						</div>
						<div class="col-md-3"><input id="idPoliza" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="Ingrese p&#243;liza"></div>
					</div>

					<div class="row"><!-- Fecha sustraida del sistema -->
						<div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
						</div>
						<div class="col-md-3"><input id="fecha" type="text" class="form-control form-text" 
							size="25"  value="Fecha"></div>
					</div>

					<div class="row"><!-- Solicitante -->
						<div class="col-md-5"><label for="vehiPoliza"  class="controllabel hidden-xs">
							Veh&#237;culo</label>
						</div>
						<div class="col-md-3">
							<select id="vehiPoliza" class="form-control">
						  		<option value="">veh&#237;culo 1</option>
						        <option value="">veh&#237;culo 2</option>
						    </select>
						</div>
					</div>

					<!-- Descripcion -->
					<div class="row">
						<div class="col-md-5"><label for="descrip" class="controllabel hidden-xs">Descripci&#243;n</label>
						</div>
						<div class="col-md-3">
							<textarea id="descrip" cols="30" rows="5"></textarea>
						</div>
					</div>


				</div>
				<div class="modal-footer">
					
					
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Eliminar</button>
						<button type="button" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->