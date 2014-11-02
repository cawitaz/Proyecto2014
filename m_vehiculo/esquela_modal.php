<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
var urlparainsertar="./m_vehiculo/sql_select_esquela_modificar.php";
		var campos = {

        idEsquela     : $('#idEsquela').val(), 
	    conductor     : $('#conductor').val(), 
		montoEsquela  : $('#montoEsquela').val(),
		vehiculo      : $('#vehiculo').val(),
		
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
		campos['idEsquela']       =$('#idEsquela').val();
		campos['conductor']       =$('#conductor').val();
		campos['montoEsquela']		=$('#montoEsquela').val();
		campos['vehiculo']	=$('#vehiculo').val();
		
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
<div class="modal-dialog">
			<div class="modal-content">
				<?php 

	    $idEsquela='';
	    if(isset($_POST['idEsquela'])){
		$idEsquela=$_POST['idEsquela'];
	
		//Realizar una solicitud de información

		include("sql_select_esquela_modal.php");
			}

	 ?>
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title">ESquela # <?php echo $idEsquela; ?></h4>
					<h4 <label id="con">Para el Conductor: <?php echo getAM_nombreConductor(); ?></label></h4>
					<h4 <label id="con">En el vehiculo: <?php echo getAM_idVehiculo(); ?></label> <label> de: $<?php echo getAM_montoEsquela(); ?></label></h4>
				</div>
				<div class="modal-body">
					<!-- Inicio de los objetos del formulario mediante filas -->
					<div class="row">
						<div class="col-md-5"><label for="idEsquela" class="controllabel hidden-xs">Número de esquela</label>
						</div>
						<div class="col-md-4"><input id="idEsquela" type="text" class="form-control form-text" 
							size="25" readonly="readonly" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo $idEsquela; ?>"></div>
					</div>

					<div class="row"><!-- Conductor -->
						<div class="col-md-5"><label for="conductor"  class="controllabel hidden-xs">
							Conductor</label>
						</div>
						<div class="col-md-4">
							<select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_nombreConductor(); ?>"onfocus="cambiarColor(this)" onBlur="defectoColor (this)" id="conductor" title="seleccione un conductor">
				       <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT * FROM FVAM_conductor_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_nombreConductor']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				      </select>
						</div>
					</div>


				
					<div class="row"><!-- Estado actual del vehículo -->
						<div class="col-md-5"><label for="montoEsquela"  class="controllabel hidden-xs">Monto</label>
						</div>
						<div class="col-md-4">
							<select id="montoEsquela" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_montoEsquela(); ?>"class="form-control">
						  		<option value="11.43">$ 11.43</option>
						        <option value="34.29">$ 34.29</option>
						        <option value="57.14">$ 57.14</option>
						    </select>
						</div>
					</div><!--Fin del Monto de la esquela -->
                      

					<div class="row"><!-- Conductor -->
						<div class="col-md-5"><label for="vehiculo"  class="controllabel hidden-xs">
							Conductor</label>
						</div>
						<div class="col-md-4">
							<select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"value="<?php echo getAM_idVehiculo(); ?>"onfocus="cambiarColor(this)" onBlur="defectoColor (this)" id="vehiculo" title="seleccione un conductor">
				       <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT * FROM FVAM_vehiculo_2014";
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
				      </select>
						</div>
					</div>

					

					
				<div class="modal-footer">
					
					
					
					<div class="row">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						
						<button type="button" onclick="ejecutar(); "class="btn btn-primary">Guardar cambios</button>
					</div>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</body>
	</html>