<?php 
include("conexion.php");
//include '../template/conexion1.php';
//Si detecta post hacer operación
if(isset($_POST['idbitacora'])){
	//Obteniendo campos pasados por post
	$idbitacora 		= trim($_POST['idbitacora']);
	$fecha	            = trim($_POST['fecha']);
	$conductor 	        = trim($_POST['conductor']);
	$destino 	        = trim($_POST['destino']);
	$solicita 	        = trim($_POST['solicita']);
	$idVe 	            = trim($_POST['idVe']);
}
	$sql = "INSERT INTO FVAM_bitacoras_2014 (AM_idBitacora, AM_fechaBitacora, AM_idConductor, AM_destino,AM_kmInicial,AM_kmFinal, AM_hrSalida,AM_hrLlegada,AM_idUsuario, AM_idVehiculo,AM_estadoVehiculo)
              VALUES('$idbitacora','$fecha','$conductor','$destino',null,null,null,null,'$solicita','$idVe',null);";
 
	$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql, $params);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
else{
	echo"bitacora ingresada corectamente";
}

?>