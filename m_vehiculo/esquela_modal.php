<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">Opciones</h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5"><label for="idEsquela" class="controllabel hidden-xs">Número de esquela</label>
						</div>
						<div class="col-md-4"><input id="idEsquela" type="text" class="form-control form-text" 
							size="25" readonly="readonly" value="Número de esquela"></div>
					</div>

					<div class="row"><!-- Conductor -->
						<div class="col-md-5"><label for="conductor"  class="controllabel hidden-xs">
							Conductor</label>
						</div>
						<div class="col-md-4">
							<select id="conductor" class="form-control">
						  		<option value="">conductor 1</option>
						        <option value="">conductor 2</option>
						    </select>
						</div>
					</div>


					<div class="row"><!-- Fecha sustraida del sistema -->
						<div class="col-md-5"><label for="fechaRecibida"  class="controllabel hidden-xs">Fecha recibida</label>
						</div>
						<div class="col-md-4"><input id="fechaRecibida" type="text" class="form-control form-text" 
							size="25"  value="dd/mm/aaaa" placeholder="Ingrese fecha de recibido"></div>
					</div><!-- Fecha recibida-->

					<div class="row">
						<div class="col-md-5"><label for="fechaVence"  class="controllabel hidden-xs">Fecha de vencimiento</label>
						</div>
						<div class="col-md-4"><input id="fechaVence" type="text" class="form-control form-text" 
							size="25"  value="dd/mm/aaaa" placeholder="Ingrese fecha de vencimiento"></div>
					</div><!--Fecha de vencimiento -->


					<div class="row"><!-- Estado actual del vehículo -->
						<div class="col-md-5"><label for="montoEsquela"  class="controllabel hidden-xs">Monto</label>
						</div>
						<div class="col-md-4">
							<select id="montoEsquela" class="form-control">
						  		<option value="100">$ 100.00</option>
						        <option value="200">$ 200.00</option>
						        <option value="300">$ 300.00</option>
						    </select>
						</div>
					</div><!--Fin del Monto de la esquela -->

					<div class="row">
						<div class="col-md-5"><label for="motivo" class="controllabel hidden-xs">Motivo</label>
						</div>
						<div class="col-md-3"><textarea rows="3" id="motivo" type="text" class="form-control form-text" 
					  	 size="35" placeholder="Ingrese motivo de la esquela"></textarea></div>
					</div><!--Fin del motivo de la esquela-->

				</div>
				<div class="modal-footer">
					
					
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						
						<button type="button" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->