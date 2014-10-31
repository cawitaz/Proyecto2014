<?php
include '../template/conexion.php';

$sql = "SELECT * 	FROM FVAM_vehiculo_2014 WHERE AM_idVehiculo =; ";

	//Creación de variables en campos vacios
$AM_estadoVehiculo = ""; $AM_numPlacas = ""; 
$AM_idVehiculo;

setAM_idVehiculo($AM_idVehiculo);

$sql = "SELECT * FROM FVAM_vehiculo_2014 WHERE AM_idVehiculo='$idVehiculo'; ";
	



//Función 

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
	selectDatosBitacora($sql);

	sqlsrv_free_stmt( $consulta);
	cerrar();//Cierra conexion

	function selectDatosBitacora($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable	
	global $consulta;

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_estadoVehiculo($row['AM_estadoVehiculo']);
	
		
		

	}
}

	


function setAM_estadoVehiculo($fecha)
{
	$GLOBALS['AM_estadoVehiculo'] = $fecha;
}

//Get de variable nombre de usuario
function getAM_estadoVehiculo()
{
	return $GLOBALS['AM_estadoVehiculo']; 
}

//********************************
//Set para el campo de email 
function setAM_idVehiculo($conductor)
{
	$GLOBALS['AM_idVehiculo'] = $conductor;
}

//Get para el campo de email 
function getAM_idVehiculo()
{
	return $GLOBALS['AM_idVehiculo'];
}
function setAM_numPlacas($placas)
{
	$GLOBALS['AM_numPlacas'] = $placas;
}

//Get para el campo de email 
function getAM_numPlacas()
{
	return $GLOBALS['AM_numPlacas'];
}


?>