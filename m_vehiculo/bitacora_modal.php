<?php
$idBitacora=$_GET['uno'];
$destino=$_GET['dos'];

?>

<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title">Opciones</h4>
		</div>
		<div class="modal-body">
			<!-- Inicio de los objetos del formulario mediante filas -->
			<div class="row">
				<div class="col-md-5 col-sm-5"><center><label for="idBitacora" class="controllabel hidden-xs">Bitácora del vehículo</center></label>
				</div>
				<div class="col-md-4 col-sm-4"><center><input id="idBitacora" type="text" class="form-control form-text" 
					size="25" readonly="readonly" value="<?php echo "$idBitacora" ?>"</center></div>
			</div>

			<div class="row"><!-- Fecha sustraida del sistema -->
				<div class="col-md-5 col-sm-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="fecha" type="text" class="form-control form-text" 
					size="25"  value="dd/mm/aaaa" placeholder="Ingrese fecha" ></div>
			</div>

			<div class="row"><!-- Conductor -->
				<div class="col-md-5 col-sm-5"><label for="conductor"  class="controllabel hidden-xs">
					Conductor</label>
			</div>
				<div class="col-md-4 col-sm-4">
					<select id="conductor" class="form-control">
				  		<option value="">conductor 1</option>
				        <option value="">conductor 2</option>
				    </select>
				</div>
			</div>

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="destino" class="controllabel hidden-xs">Destino</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input id="destino" type="text" class="form-control form-text" value="<?php echo "$destino" ?>"
					size="25" placeholder="Ingrese el destino" > </div>
			</div><!-- Fin de ingrese destino -->

			<div class="row"> 
				<div class="col-md-5 col-sm-5"><label for="solicitante" class="controllabel hidden-xs">Solicitante</label>
				</div>
				<div class="col-md-4 col-sm-4"><input id="solicitante" type="text" class="form-control form-text" 
			  	 size="25" readonly="readonly" value="Solicitante"></div>
			</div><!--Fin de solicitante. Este es el usuario que hizo la solicitud para el vehículo -->


			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="kmInicial" class="controllabel hidden-xs">Kilometraje inicial</label> </div>
				<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="kmInicial"
					readonly="readonly" value="kmInicial"></div>
			</div><!--Fin de km Inicial -->

			<div class="row">
			</body>
			</html>
				<div class="col-md-5 col-sm-5"><label for="kmFinal" class="controllabel hidden-xs">Kilometraje final</label> </div>
				<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="kmFinal"
					value="kmFinal"></div>
			</div><!--Fin del kmFinal -->

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="horaSalida" class="controllabel hidden-xs">Hora de salida</label> </div>
				<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="horaSalida"
					value="horaSalida" placeholder="hora de salida"></div>
			</div><!--Fin del hora de salida -->

			<div class="row">
				<div class="col-md-5 col-sm-5"><label for="horaEntrada" class="controllabel hidden-xs">Tarjeta de circulaci&#244n</label> </div>
				<div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="horaEntrada"
					value="horaEntrada" placeholder="Ingrese hora de entrada"></div>
			</div><!--Fin de hora de entrada  -->

			<div class="row"><!-- Estado actual del vehículo -->
				<div class="col-md-5 col-sm-5"><label for="vehiPoliza"  class="controllabel hidden-xs">Estado del 
					Veh&#237;culo</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<select id="vehiPoliza" class="form-control">
				  		<option value="1">Disponible</option>
				        <option value="2">Ocupado</option>
				        <option value="0">Fuera de uso</option>
				    </select>
				</div>
			</div><!--Fin del estado del vehículo -->

		</div>

		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
