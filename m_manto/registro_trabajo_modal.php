<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Opciones</h4>
		</div>
		<div class="modal-body">
			<!-- Inicio de los objetos del formulario mediante filas -->
			<form class="form-horizontal form-inline" role="form">

				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="row"> <!-- Id Mantenimiento -->
					<div class="col-md-5 col-sm-5"><label for="idManto" class="controllabel hidden-xs">ID solicitud</label>
					</div>
					<div class="col-md-4 col-sm-4"><input id="idManto" type="text" class="form-control form-text" 
						size="25" readonly="readonly" value="ID"></div>
					</div>

				<div class="row">
					<div class="col-md-5 col-sm-5"><label for="tipoManto" class="controllabel hidden-xs">Tipo de mantenimiento</label>
				    </div>
				    <div class="col-md-4 col-sm-4" id="tipoManto" > 
				    	<select class="form-control" >
					    	<option value="0">Tipo de mantenimiento</option>
					    	<option value="1">Preventivo</option>
					       	<option value="2">Correctivo</option>
					    </select>
					    <!-- Combobox para los distintos tipos de mantenimiento-->
					</div>
				</div>

				<div class="row"><!-- id del vehículo-->
					<div class="col-md-5 col-sm-5"><label for="idVehiculo"  class="controllabel hidden-xs">Vehículo </label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control">
							<option value="0">Seleccione vehículo</option>
				    		<option value="VEH-000001">Pickup N001-001</option>
				        	<option value="VEH-000002">Camioneta N001-002</option>
				    	</select>
					</div>
				</div>

				<div class="row"><!-- Solicitante -->
					<div class="col-md-5 col-sm-5"><label for="descripcion"  class="controllabel hidden-xs">Descripción</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<textarea id="descripcion" rows="5" placeholder="Ingrese breve descripción de mantenimiento">Descripción breve del mantenimiento</textarea>
					</div>
				</div>

						
			</form>
		</div>

		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
