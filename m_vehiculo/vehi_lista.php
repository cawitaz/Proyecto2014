<?php
	include("conexion.php");
	?>
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Datos de Vehículos</h4>
		</div>
		<div class="panel-body" align="center">
			<!-- Inicio del formulario -->
			<form class="form-horizontal form-inline" role="form">
				<div class="row center-text">
					<br>
					<input type="text" id="idBuscar" placeholder="Busqueda">
					<div class="btn-group">
						<span class="glyphicon glyphicon-search"></span>
							</span> <input type="button" value="Buscar"> 
						
					</div>
					

				</div>
				<br>
				<!-- Inicio de los objetos del formulario mediante filas -->
				<div class="table-responsive">
					<table id="tabla" name="tabla" class="table table-hover">		
					<tr>
							<center><th>Vehículo</th></center>
							<center><th>Placa</th></center>
							<center><th>Modelo</th></center>
							<center><th>Tipo</th></center>
						</tr>				
												
	<?php
$server = "(local)\SQLEXPRESS";
$connectionInfo = array( "Database"=>"BD_FlotaVehicular", "UID"=>"sa", "PWD"=>"base_dsi" );
$conn = sqlsrv_connect( $server, $connectionInfo );


if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}

$sql = "SELECT * FROM FVAM_vehiculo_2014";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      $uno=	$row['AM_idVehiculo'];
      $dos=	$row['AM_numPlacas'];
      $tres=$row['AM_marcaVehiculo'];
      $cuatro=$row['AM_tipoVehiculo'];
     
      echo"<tr>";
      echo "<td>$uno</td><td>$dos</td><td>$tres</td><td>$cuatro</td>";
      echo '<td><center><a data-toggle="modal" href="#miModal" class="btn btn-default btn-xs">Más opciones </a></center></td>';
      echo "</tr>";
     

}

sqlsrv_free_stmt( $stmt);

?>
						
						
					</table>
				</div>

				<!-- Botones -->
				<div class="row center-text">
					<br>
					
					<div class="col-xs-7 col-sm-7 col-md-7"> <input type="button" id="cancelar" class="btn btn-default" value="Cancelar" 
						onclick="limpiar('#panel1');cargar('#panel1', 'template/inicio.php');" ></div>
					<div class="col-xs-1 col-md-1"> <input type="button" class="btn btn-default btn-primary" value="Guardar">
					</div>
					<br>
				</div>
			</form>
		</div> <!-- Fin del panel-body -->
	</div>

	<!-- Bloque modal -->
	<div id="miModal" class="modal fade">
		<?php include("vehiconsulmodal.php"); ?>
	</div><!-- /.modal -->
