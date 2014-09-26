<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5"><label for="idConductor" class="controllabel hidden-xs">Id del Conductor</label>
						</div>
						<div class="col-md-4"><input id="idConductor" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="ID del conductor"></div>
					</div>

					<div class="row"><!-- Nombre del conductor -->
						<div class="col-md-5"><label for="nomConductor"  class="controllabel hidden-xs">Nombre del conductor</label>
						</div>
						<div class="col-md-4"><input id="nomConductor" type="text" class="form-control form-text" 
							size="25"  placeholder="Nombre del conductor"></div>
					</div><!-- Fin de Nombre del conductor-->


					<div class="row"><!-- Conductor -->
						<div class="col-md-5"><label for="depto"  class="controllabel hidden-xs">
							Departamento</label>
						</div>
						<div class="col-md-4">
							<select id="depto" class="form-control">
						  		<option value="1">departamento 1</option>
						        <option value="2">departamento 2</option>
						    </select>
						</div>
					</div>


					<div class="row"><!-- Fecha sustraida del sistema -->
						<div class="col-md-5"><label for="departamento"  class="controllabel hidden-xs">Fecha recibida</label>
						</div>
						<div class="col-md-4"><input id="departamento" type="text" class="form-control form-text" 
							size="25"  placeholder="Ingrese Teléfono"></div>
					</div><!-- Fin de numero de telefono-->

					<div class="row">
						<div class="col-md-5"><label for="licencia"  class="controllabel hidden-xs">Número de licencia</label>
						</div>
						<div class="col-md-4"><input id="licencia" type="text" class="form-control form-text" 
							size="25"  placeholder="Ingrese Numero de licencia"></div>
					</div><!--fin de número de licencia -->


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