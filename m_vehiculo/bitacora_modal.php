<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
var urlparainsertar="./m_vehiculo/sql_select_bitacora_modificar.php";
		var campos = {

         idBitacora    : $('#idBitacora').val(), 
	    destinoModal    : $('#destinoModal').val(), 
		finali   : $('#finali').val(),
		Inicial : $('#Inicial').val(),
		idVe : $('#idVe').val(),
		idCo : $('#idCo').val(),
		};
		
		// proceso para operaciones intermedias
		function obtener (url_encabezado, divs, arreglo) {
			
			var jqxhr = $.post( url_encabezado, arreglo, function(data) {
                $(divs).val(data);
            })
            .done(function() {
                //done es una subfuncion que se ejecuta despues del metodo de exito
            })
            .fail(function() {
                //fail es una subfuncion que se ejecuta cuando falla el proceso
            })
            .always(function() {
                //always es una subfuncion que se ejecuta cuando termina el proceso,
                //independientemente de si se ejecuto con exito o fracaso
            });
		}
		function ejecutar(){
		campos['idBitacora']       =$('#idBitacora').val();
		campos['destinoModal']       =$('#destinoModal').val();
		campos['finali']		=$('#finali').val();
		campos['Inicial']	=$('#Inicial').val();
		campos['idVe']	=$('#idVe').val();
		campos['idCo']	=$('#idCo').val();
		//alert(campos['descripcion']);
		
		ejecutarconsulta(urlparainsertar, campos);
		
		}
			function cambiarColor (foco_si) {
       foco_si.style.background="#27b2f3";
        }
        function defectoColor (foco_no) {
        foco_no.style.background="white";
        }

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
						<label for="destino" class="controllabel hidden-xs">ID Bitacora</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="idBitacora" class="btn btn-default" 
						placeholder="Ingrese destino" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo $idBitacora; ?>" >
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="destino" class="controllabel hidden-xs">Destino</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="destinoModal" class="btn btn-default" 
						placeholder="Ingrese destino" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_destino(); ?>" >
					</div>
				</div>

												
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Kilometraje Final</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="finali" class="btn btn-default" 
						placeholder="Kilometraje Final" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_kmFinal(); ?>"> 
					</div>

				</div>
				<div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Kilometraje Inicial</label>
					</div>
					<div class="col-sm-4 col-md-4">
						<input type="text" class="form-control" size="25" id="Inicial" class="btn btn-default" 
						placeholder="Kilometraje Inicial" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_kmInicial(); ?>" >
					</div>
				</div>

                <div class="row">
					<div class="col-md-5 col-sm-5">
						<label for="final" class="controllabel hidden-xs">Vehiculo</label>
					</div>
					<div class="col-sm-4 col-md-4">
				<select class="form-control"   id="idVe"  onfocus="cambiarColor(this)" onBlur="defectoColor (this)"title="Seleccione un vehiculo">
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
				<select class="form-control"   id="idCo"  onfocus="cambiarColor(this)" onBlur="defectoColor (this)"title="Seleccione un Conductor">
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
				<button type="button" class="btn btn-primary" onclick= "ejecutar();">Guardar cambios</button>
			</div>
		</div>
	</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</body>
</html>