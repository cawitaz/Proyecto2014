	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="m_vehiculo/recoger.js"></script>
	<?php
	include("conexion.php");
	?>
	<div class="panel panel-primary" >
			<div class="panel-heading "><h4>Ingresar bit&#225;cora de veh&#237;culo</h4></div>
			<div class="panel-body" align="center">
				<!-- Inicio del formulario -->
				
				<form    class="form-horizontal form-inline"   id="formDatos">

				<!-- Inicio de los objetos del formulario mediante filas -->

				<div class="row"><!-- #bitacora -->
				  <div class="col-md-5"><label for="idbitacora" class="controllabel hidden-xs">Numero de Bitacora</label> </div>
				  <div class="col-md-4"><input title="Ingrese ID" type="text"  name="numbitacora" class="form-control" size="20" id="idbitacora" 
								placeholder="ID de bitacora" required/></div>
				</div>


				
				<div class="row"><!-- Fecha sustraida del sistema -->
					<div class="col-md-5"><label for="fecha"  class="controllabel hidden-xs">Fecha </label>
					</div>
					<div class="col-md-4"><input title="Fecha automatica" id="fecha" type="text" name="fechas" class="form-control form-text" 
						size="20"  readonly="readonly" value="<?php echo date("Y-m-d"); ?>" required/>

					</div>

				</div>


				<div class="row"><!--Conductor -->
				  <div class="col-md-5"><label for="conductor" class="controllabel hidden-xs">Conductor </label>
				  </div>
				  <div class="col-md-4" id="conductor" name="conductores" > 
				  	<select class="form-control" title="seleccione un conductor">
				        <option value="">Conductor 1</option>
				        <option value="">Conductor 2</option>
				        <option value="">Conductor 3</option>
				      </select>
				  	<!-- Combobox para los distintos conductores--></div>
				</div>

<div class="row"><!-- Destino -->
				  <div class="col-md-5"><label for="destino" class="controllabel hidden-xs">Destino del veh&#237;culo</label> </div>
				  <div class="col-md-4"><input title="Ingrese Destino" type="text" class="form-control" name="destinos" size="20" id="destino"
								placeholder="Ingrese el Destino" required/></div>
				</div>

				<div class="row"><!-- Solicitante -->
					<div class="col-md-5"><label for="solicita"  class="controllabel hidden-xs">Solicitante</label>
					</div>
					<div class="col-md-4">
						<input id="solicita" title="Seleccione Usuario" type="text" name"solicitante" class="form-control form-text" 
						size="20"   placeholder="Solicitante" required/>
					</div>
				</div>
                     <div class="row"><!--Vehiculo-->
					<div class="col-md-5"><label for="idVe" class="controllabel hidden-xs"> veh&#237;culo </label>
				    </div>
				    <div class="col-md-4" id="idVe" name="idVes"> 
				    	<select class="form-control" name="vehiculo" title="Seleccione un vehiculo">
	<?php
include("conexion.php");

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
					<div class="col-xs-1 col-md-1"> <input  type="submit" class="btn btn-default btn-primary" 
						 value="Guardar"/>
					</div>
					<br>
				</div>
					
				</form>
			
			</div>
	</div>


