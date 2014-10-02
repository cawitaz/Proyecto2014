<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Asignando vehículo...</h4>
		</div>
		<div class="modal-body">
			<!-- Inicio de los objetos del formulario mediante filas -->
			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="fecha" class="controllabel hidden-xs">Fecha</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="fecha" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="dd/mm/aaaa"></div>
			</div>

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="idPeticion" class="controllabel hidden-xs">ID Petición</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="idPeticion" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="PP-0000001"></div>
			</div>

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="deptoPeticion" class="controllabel hidden-xs">Departamento solicitante</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="deptoPeticion" type="text" class="form-control form-text" 
					size="25" readonly="readonly" value="Depto-0001"></div>
			</div>

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="usuario" class="controllabel hidden-xs">Usuario solicitante</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="usuario" type="text" class="form-control form-text" 
					size="25" readonly="readonly" value="usuario_solicitante"></div>
			</div>

			<!-- Descripcion -->
			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="razon" class="controllabel hidden-xs">Razón de préstamo</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<textarea id="razon" readonly="readonly" cols="30" rows="5" placeholder="Descripcion">Razón de la solicitud</textarea>
				</div>
			</div>

			<div class="row"><!-- Vehículo disponibles -->
				<div class="col-md-5 col-sm-5"><label for="idVehículo" class="controllabel hidden-xs">Vehículos disponibles</label>
				</div>
				<div class="col-md-4 col-sm-4" id="dptopeticion" > 
				  	<select class="form-control" >
				        <option value="VEHI-0001">Vehículo 1</option>
				        <option value="VEHI-0002">Vehículo 2</option>
				    </select>
				</div>
			</div>
		</div>
		
		<div class="modal-footer">
					
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Rechazar solicitud</button>
				<button type="button" class="btn btn-primary">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
