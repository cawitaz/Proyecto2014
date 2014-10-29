<?php
include '../template/conexion.php';

$sql = "SELECT *
	FROM FVAM_vehiculo_2014;";

//Función 
function select($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable
	global $conn;

	$resul="";
	//Iniciamos proceso
	iniciar();
	$consulta = sqlsrv_query( $conn, $sql );
	if( $consulta === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}

	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		$id = $row['AM_idVehiculo'];

        echo "<tr>	<td>".$row['AM_idVehiculo']."</td>";
		echo "<td>".$row['AM_numPlacas']."</td>";
		echo "<td>".$row['AM_marcaVehiculo']."</td>";
		echo "<td>".$row['AM_estadoVehiculo']."</td>";
		
		
		

		echo "<td><a data-toggle=\"modal\" href='#miModal' onclick=\"seleccionado('$id')\" class=\"btn btn-default btn-xs\">Más opciones</a>
			</td></tr>";
	}

	sqlsrv_free_stmt( $consulta);
	cerrar();

}

select($sql);
?>