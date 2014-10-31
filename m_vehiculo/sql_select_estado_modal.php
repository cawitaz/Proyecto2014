<?php
include '../template/conexion.php';

$sql = "SELECT * 	FROM FVAM_vehiculo_2014 WHERE AM_idVehiculo =; ";

	//Creación de variables en campos vacios
$AM_numPlacas = ""; $AM_marcaVehiculo = ""; $AM_estadoVehiculo = ""; 
$AM_idVehiculo;
setAM_idVehiculo($idVehiculo);

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
	selectDatosVehiculo($sql);

	sqlsrv_free_stmt( $consulta);
	cerrar();//Cierra conexion

	function selectDatosVehiculo($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable	
	global $consulta;

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_numPlacas($row['AM_numPlacas']);
		setAM_marcaVehiculo($row['AM_marcaVehiculo']);
		setAM_estadoVehiculo($row['AM_estadoVehiculo']);
		

	}
}

	


function setAM_numPlacas($placas)
{
	$GLOBALS['AM_numPlacas'] = $placas;
}

//Get de variable nombre de usuario
function getAM_numPlacas()
{
	return $GLOBALS['AM_numPlacas']; 
}

//********************************
//Set para el campo de email 
function setAM_marcaVehiculo($marca)
{
	$GLOBALS['AM_marcaVehiculo'] = $marca;
}

//Get para el campo de email 
function getAM_marcaVehiculo()
{
	return $GLOBALS['AM_marcaVehiculo'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_estadoVehiculo($estado)
{
	$GLOBALS['AM_estadoVehiculo'] = $estado;
}

//Get para el campo de estado de usuario 
function getAM_estadoVehiculo()
{
	return $GLOBALS['AM_estadoVehiculo'];
}

function setAM_idVehiculo($idvehiculo)
{
	$GLOBALS['AM_idVehiculo'] = $idvehiculo;
}

//Get para el campo de estado de usuario 
function getAM_idVehiculo()
{
	return $GLOBALS['AM_idVehiculo'];
}

?>