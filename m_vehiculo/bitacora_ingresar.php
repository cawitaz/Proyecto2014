<!DOCTYPE html>	
	<html lang="es-ES">
	<head>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">

       
		//Inicialización de valores
		var urlparainsertar="./m_vehiculo/sql_insertarbitacora.php";
		
		var campos = {//Almacena los valores que necesitamos para realizar la consulta sql
				"idbitacora"		: $('#idbitacora').val(),
				"fecha"            	: $('#fecha').val(),
				"conductor"	        : $('#conductor').val(),
				"destino"	        : $('#destino').val(),
				"solicita"			: $('#solicita').val(),
				"idVe"			    : $('#idVe').val(),
							};

		//Este método debe de ir en el onclick del button
		function ejecuta(){
			
			campos['idbitacora']=$('#idbitacora').val();
			campos['fecha']	    =$('#fecha').val();
			campos['conductor']	=$('#conductor').val();
			campos['destino']	=$('#destino').val();
			campos['solicita']	=$('#solicita').val();
			campos['idVe']	    =$('#idVe').val();

			//Para más información ver template/encabezado.php
			ejecutarconsulta(urlparainsertar, campos);
		};

		function cambiarColor (foco_si) {
       foco_si.style.background="#27b2f3";
        }
        function defectoColor (foco_no) {
        foco_no.style.background="white";
        }

       
		

	</script>
    </head>
	<body>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar bit&#225;cora de veh&#237;culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				
				<form    class="form-horizontal form-inline"   id="formulario" role="form" onsubmit="return false;">

				<!-- Inicio de los objetos del formulario mediante filas -->

				<div class="row"><!-- #bitacora -->
				  <div class="col-md-5"><label for="idbitacora" class="controllabel hidden-xs">Numero de Bitacora</label> </div>
				  <div class="col-md-4"><input onfocus="cambiarColor(this)" onBlur="defectoColor (this)" title="Ingrese ID"  type="text" class="form-control" size="20" id="idbitacora" 
								 placeholder="BI-000"     required/></div>
				</div>


				
				<div class="row"><!-- Fecha sustraida del sistema -->
					<div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label></div>
					<div class="col-md-4"><input onfocus="cambiarColor(this)" onBlur="defectoColor (this)" title="Fecha automatica"  id="fecha" type="text" class="form-control form-text" 
						size="20"  readonly="readonly" value="<?php echo date("Y-m-d"); ?>" /></div>
				</div>


				<div class="row"><!--Conductor -->
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Conductor </label> </div>
				  <div class="col-md-4"> 
				  	<select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)" id="conductor" title="seleccione un conductor">
				        <option value="C0-001">Conductor 1</option>
				        <option value="C0-002">Conductor 2</option>
				        <option value="C0-003">Conductor 3</option>
				      </select>
				  	<!-- Combobox para los distintos conductores--></div>
				</div>

                  <div class="row"><!-- Destino -->
				  <div class="col-md-5"><label for="destino"  class="controllabel hidden-xs">Destino </label> </div>
				  <div class="col-md-4"><input  onfocus="cambiarColor(this)"  onBlur="defectoColor (this)" title="Ingrese Destino" type="text" class="form-control"  size="20" id="destino" placeholder="Ingrese el Destino" required/></div>
				 
				  </div>
                  <div class="row"><!--Conductor -->
				  <div class="col-md-5"><label for="solicita" class="controllabel hidden-xs">Usuario</label></div>
				  <div class="col-md-3">
				  <select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"  id="solicita" title="Seleccione un vehiculo">
	                    <?php
                        
                        include ("conexion.php");

                        $sql = "SELECT * FROM FVAM_usuario_2014";
                        $stmt = sqlsrv_query( $conn, $sql );
                        if( $stmt === false) {
                        die( print_r( sqlsrv_errors(), true) );
                          }

                        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
                        echo"<option>";	
                        echo $row['AM_idUsuario']."<br />";
                        echo"</option>";	
                        }
 
                         sqlsrv_free_stmt( $stmt);
                         ?>
				    		<!--<option value="VEH-000001">Vehículo 1</option>-->
				        	<!--<option value="VEH-000002">Vehículo 2</option>-->
				   	</select>
					</div>
				</div>
                     <div class="row"><!--Vehiculo-->
					<div class="col-md-5"><label for="idVe" class="controllabel hidden-xs"> veh&#237;culo </label></div>
				    <div class="col-md-3"> 
				    	<select class="form-control" onfocus="cambiarColor(this)" onBlur="defectoColor (this)"  id="idVe"  title="Seleccione un vehiculo">
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
				    		<!--<option value="VEH-000001">Vehículo 1</option>-->
				        	<!--<option value="VEH-000002">Vehículo 2</option>-->
				    	</select>
				    	<!-- Combobox para los distintos conductores-->
				    </div>
				</div>

				<!-- Botones Guardar y cancelar -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input id="enviar" type="submit" onclick="ejecuta();" class="btn btn-default btn-primary" 
						 value="Guardar"/>
					</div>
					<br>
				</div>
					
				</form>
			
			</div>
	</div>
</body>
</html>

