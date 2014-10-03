<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body"> 
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row"> <!-- Id Mantenimiento -->
						<div class="col-md-5 col-sm-5"><label for="idManto" class="controllabel hidden-xs">ID solicitud</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="idManto" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="ID"></div>
					</div>

					<div class="row"> <!-- Departamento -->
						<div class="col-md-5 col-sm-5"><label for="depto" class="controllabel hidden-xs">Departamento</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="depto" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="Departamento 1"></div>
					</div>

					<div class="row"> <!-- Vehículo -->
						<div class="col-md-5 col-sm-5"><label for="placasVeh" class="controllabel hidden-xs">Vehículo</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="placasVeh" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="N001-001"></div>
					</div>

					<div class="row"><!-- Id Solicitud Compra -->
						<div class="col-md-5 col-sm-5">
							<label for="estado"  class="controllabel hidden-xs">Estado de solicitud</label>
						</div>
						<div class="col-md-4 col-sm-4">
							<select id="estado" class="form-control">
								<option value="2">Seleccione estado</option>
								<option value="">Pendiente</option>
							    <option value="">Autorizado</option>
							    <option value="">Denegado</option>
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