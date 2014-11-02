<?php
include '../template/conexion.php';

$sql = "SELECT * 	FROM FVAM_Esquela_2014 WHERE AM_idEsquela =; ";

	//Creación de variables en campos vacios
 $AM_nombreConductor = ""; $AM_razonEsuqela = ""; $AM_montoEsquela = "";$AM_fechaRecibida = "";$AM_fechaVencimiento="";$AM_idVehiculo="";
$AM_numEsuquela;

setAM_numEsuquela($idEsquela);

$sql = "SELECT * FROM FVAM_Esquela_2014 WHERE AM_numEsuquela='$idEsquela'; ";
	



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
	selectDatosEsquela($sql);

	sqlsrv_free_stmt( $consulta);
	cerrar();//Cierra conexion

	function selectDatosEsquela($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable	
	global $consulta;

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_nombreConductor($row['AM_nombreConductor']);
		setAM_razonEsuqela($row['AM_razonEsuqela']);
		setAM_montoEsquela($row['AM_montoEsquela']);
		setAM_fechaRecibida($row['AM_fechaRecibida']);
		setAM_fechaVencimiento($row['AM_fechaVencimiento']);
		setAM_idVehiculo($row['AM_idVehiculo']);
		
		

	}
}

	


function setAM_nombreConductor($nombre)
{
	$GLOBALS['AM_nombreConductor'] = $nombre;
}

//Get de variable nombre de usuario
function getAM_nombreConductor()
{
	return $GLOBALS['AM_nombreConductor']; 
}

//********************************
//Set para el campo de email 
function setAM_razonEsuqela($razon)
{
	$GLOBALS['AM_razonEsuqela'] = $razon;
}

//Get para el campo de email 
function getAM_razonEsuqela()
{
	return $GLOBALS['AM_razonEsuqela'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_montoEsquela($monto)
{
	$GLOBALS['AM_montoEsquela'] = $monto;
}

//Get para el campo de estado de usuario 
function getAM_montoEsquela()
{
	return $GLOBALS['AM_montoEsquela'];
}

//*****************************************
//Set para el campo del idUsuario
function setAM_numEsuquela($idEsquela)
{
	$GLOBALS['AM_numEsuquela'] = $idEsquela;
}

function getAM_numEsuquela()
{
	return $GLOBALS['AM_numEsuquela'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_fechaRecibida($fecha)
{
	$GLOBALS['AM_fechaRecibida'] = $fecha;
}

function getAM_fechaRecibida()
{
	return $GLOBALS['AM_fechaRecibida'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_fechaVencimiento($vence)
{
	$GLOBALS['AM_fechaVencimiento'] = $vence;
}

function getAM_fechaVencimiento()
{
	return $GLOBALS['AM_fechaVencimiento'];
}
//select($sql);
function setAM_idVehiculo($id)
{
	$GLOBALS['AM_idVehiculo'] = $id;
}

function getAM_idVehiculo()
{
	return $GLOBALS['AM_idVehiculo'];
}



?>