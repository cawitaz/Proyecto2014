<html>
<head>

	<script type="text/javascript">
	

    </script>
	</head>
	<body>

<div class="modal-dialog">
			<div class="modal-content">

				<?php 
	    $idVehiculo='';
	    if(isset($_POST['idVehiculo'])){
		$idVehiculo= $_POST['idVehiculo'];
		
		//Realizar una solicitud de información

		include("sql_select_vehiculo_modal.php");
			}
			?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">VEHICULO <label id="idVehiculoModal"><?php echo $idVehiculo; ?></label></h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="idVehi"  class="controllabel hidden-xs">Placa</label>
					  </div>
					  <div class="col-md-4 col-sm-4"><input id="idVehi" type="text" class="form-control form-text" 
					  	size="25" readonly="readonly" value="<?php echo getAM_numPlacas(); ?>"</div>
					</div>

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="tipoVehi" class="controllabel hidden-xs">Tipo </label>
					  </div>
					  <div class="col-md-4 col-sm-4" id="tipoVehi" > 
					  	<select id="tipo" class="form-control">
					        <option value="">opcion 1</option>
					        <option value="">opcion 2</option>
					      </select>

					  	<!-- Combobox para el tipo de vehículo--></div>
					</div>

					<div class="row">
						<div class="col-md-5 col-sm-5"><label for="colorVehi" class="controllabel hidden-xs">Color</label>
						</div>
						<div class="col-md-4 col-sm-4"><input id="colorVehi" type="text" class="form-control form-text" 
					  	 size="25" placeholder="Ingrese color de vehículo" value="<?php echo getAM_colorVehiculo(); ?>"></div>
					</div>


					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="marcaVehi" class="controllabel hidden-xs">Marca</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="marcaVehi"
									placeholder="Ingrese la marca" value="<?php echo getAM_marcaVehiculo(); ?>"></div>
					</div><!--Fin de marca -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="yearVehi" class="controllabel hidden-xs">A&#241o</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="number" class="form-control" size="25" id="yearVehi"
									placeholder="Ingrese el A&#241o" value="<?php echo getAM_anioVehiculo(); ?>"></div>
					</div><!--Fin del año -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="chasisVehi" class="controllabel hidden-xs">Chasis #</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="chasisVehi"
									placeholder="Ingrese n&#250mero de Chasis" value="<?php echo getAM_numChasis(); ?>"></div>
					</div><!--Fin del chasis -->

					<div class="row">
					  <div class="col-md-5 col-sm-5"><label for="tarjeVehi" class="controllabel hidden-xs">Tarjeta de circulaci&#244n</label> </div>
					  <div class="col-md-4 col-sm-4"><input type="text" class="form-control" size="25" id="tarjeVehi"
									placeholder="Ingrese tarjeta circulaci&#243n" value="<?php echo getAM_numTarjetaCirc(); ?>"></div>
					</div><!--Fin del  -->

					

					


				
				<div class="modal-footer">
					
					
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Eliminar</button>
						<button type="button" class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</body>
	</html>