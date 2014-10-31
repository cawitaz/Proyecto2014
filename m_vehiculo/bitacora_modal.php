<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">

	</script>
	</head>
	<body>


<div class="modal-dialog">
	<div class="modal-content">

		<?php 

	    $idBitacora='';
	    if(isset($_POST['idBitacora'])){
		$idBitacora=$_POST['idBitacora'];
	
		//Realizar una solicitud de información

		include("sql_select_bitacora_modal.php");
			}

	 ?>
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			<h4 class="modal-title"><label id="idBitacoraodal">BITACORA <?php echo $idBitacora; ?></label></h4>
			<h4 class="modal-title"><label id="idvehiculo">Del Vehiculo <?php echo getAM_idVehiculo(); ?></label></h4>
			<label id="idvehiculo">Motorista: <?php echo getAM_idConductor(); ?></label></h4>
		</div>
		
		<div class="modal-body">
				
			
			
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="destino" class="controllabel hidden-xs">Destino</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="destinoModal" class="btn btn-default" 
						placeholder="Ingrese destino" value="<?php echo getAM_destino(); ?>" >
					</div>
				</div>

												
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Kilometraje Final</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="final" class="btn btn-default" 
						placeholder="Kilometraje Final" value="<?php echo getAM_kmFinal(); ?>"> 
					</div>

				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Kilometraje Inicial</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="final" class="btn btn-default" 
						placeholder="Kilometraje Inicial" value="<?php echo getAM_kmInicial(); ?>" >
					</div>
				</div>

                <div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Vehiculo</label>
					</div>
					<div class="col-sm-4 col-md-4">
				<select class="form-control"   id="idVe"  title="Seleccione un vehiculo">
	                    <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT AM_idVehiculo FROM FVAM_vehiculo_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_idVehiculo']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				    		<!--<option value="VEH-000001">Vehículo 1</option>-->
				        	<!--<option value="VEH-000002">Vehículo 2</option>-->
				    	</select>

				    	</div>
				</div>

				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Conductor</label>
					</div>
					<div class="col-sm-4 col-md-4">
				<select class="form-control"   id="idCo"  title="Seleccione un Conductor">
	                    <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT AM_idConductor FROM FVAM_Conductor_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_idConductor']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				    		<!--<option value="VEH-000001">Vehículo 1</option>-->
				        	<!--<option value="VEH-000002">Vehículo 2</option>-->
				    	</select>

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
</body>
</html>