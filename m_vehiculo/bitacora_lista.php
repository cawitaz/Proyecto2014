
	<div class="panel panel-default panel-primary" >
		<div class="panel-heading "><h4>Bitácora de Vehículos</h4>
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
					<table id="tabla" class="table table-hover">						
				     <tr>
							<center><th>ID</th></center>
							<center><th>Destino</th></center>
							<center><th>Vehiculo</th></center>
						</tr>				
												
	<?php
include("conexion.php");

$sql = "SELECT * FROM FVAM_bitacoras_2014";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
      $uno=	$row['AM_idBitacora'];
      $dos=	$row['AM_destino'];
      $tres=$row['AM_idVehiculo'];
     
      echo"<tr>";
      echo "<td>$uno</td><td>$dos</td><td>$tres</td>";
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
		<?php include("bitacora_modal.php"); ?>
	</div><!-- /.modal -->
