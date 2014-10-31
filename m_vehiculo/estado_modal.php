<!DOCTYPE html>
<html>
<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">

       
		//Inicialización de valores
		var urlparainsertar="./m_vehiculo/sql_actualizarEstado.php";
		
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"tipoModal"		: $('#tipoModal').val(),
				
							};

		//Este método debe de ir en el onclick del button
		function ejecuta(){
			
			campos['tipoModal']=$('#tipoModal').val();
			

			//Para más información ver template/encabezado.php
			ejecutarconsulta(urlparainsertar, campos);
		};
		</script>
	</head>
	<body>


<div class="modal-dialog">
	<div class="modal-content">

		<?php 

	    $idVehiculo='';
	    if(isset($_POST['idVehiculo'])){
		$idVehiculo=$_POST['idVehiculo'];
	
		//Realizar una solicitud de información

		include("sql_select_estado_modal.php");
			}

	 ?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title"><label id="idVehiculo">VEHICULO <?php echo $idVehiculo; ?></label></h4>
			<h4 class="modal-title"><label id="estado">Estado Actual <?php echo getAM_estadoVehiculo(); ?></label></h4>
			<label id="placas">Placas #: <?php echo getAM_numPlacas(); ?></label></h4>
		</div>
		
		<div class="modal-body">
				
			
			
				<div class="row">
					<div class="col-md-5 col-sm-5 ">
						<label for="tipoModal" class="controllabel">Cambiar Estado del Vehiculo</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<select id="tipoModal" class="form-control">
							<option value="1" <?php if (getAM_estadoVehiculo()=='1' || getAM_estadoVehiculo()=='2') {echo 'selected';} ?> >Habilitado</option>
					        <option value="0" <?php if (getAM_estadoVehiculo()=='0') {echo 'selected';} ?> >Deshabilitado</option>

					    </select>
					</div>

				</div>
				

				

		<div class="modal-footer">
			<div class="row">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
				<button type="button" class="btn btn-primary" onclick="ejecuta();">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>