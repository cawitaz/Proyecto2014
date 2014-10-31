<?php
include '../template/conexion.php';

$sql = "SELECT * 	FROM FVAM_bitacoras_2014 WHERE AM_idBitacora =; ";

	//Creación de variables en campos vacios
$AM_fechaBitacora = ""; $AM_idConductor = ""; $AM_destino = ""; $AM_idUsuario = "";$AM_idVehiculo = "";$AM_kmInicial="";$AM_kmFinal="";
$AM_idBitacora;

setAM_idBitacora($idBitacora);

$sql = "SELECT * FROM FVAM_bitacoras_2014 WHERE AM_idBitacora='$idBitacora'; ";
	



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
		setAM_fechaBitacora($row['AM_fechaBitacora']);
		setAM_idConductor($row['AM_idConductor']);
		setAM_destino($row['AM_destino']);
		setAM_idUsuario($row['AM_idUsuario']);
		setAM_idVehiculo($row['AM_idVehiculo']);
		setAM_kmInicial($row['AM_kmInicial']);
		setAM_kmFinal($row['AM_kmFinal']);
		

	}
}

	


function setAM_fechaBitacora($fecha)
{
	$GLOBALS['AM_fechaBitacora'] = $fecha;
}

//Get de variable nombre de usuario
function getAM_fechaBitacora()
{
	return $GLOBALS['AM_fechaBitacora']; 
}

//********************************
//Set para el campo de email 
function setAM_idConductor($conductor)
{
	$GLOBALS['AM_idConductor'] = $conductor;
}

//Get para el campo de email 
function getAM_idConductor()
{
	return $GLOBALS['AM_idConductor'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_destino($destino)
{
	$GLOBALS['AM_destino'] = $destino;
}

//Get para el campo de estado de usuario 
function getAM_destino()
{
	return $GLOBALS['AM_destino'];
}

//*****************************************
//Set para el campo del idUsuario
function setAM_idBitacora($idBitacora)
{
	$GLOBALS['AM_idBitacora'] = $idBitacora;
}

function getAM_idBitacora()
{
	return $GLOBALS['AM_idBitacora'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_idUsuario($idUsuario)
{
	$GLOBALS['AM_idUsuario'] = $idUsuario;
}

function getAM_idUsuario()
{
	return $GLOBALS['AM_idUsuario'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_idVehiculo($idVehiculo)
{
	$GLOBALS['AM_idVehiculo'] = $idVehiculo;
}

function getAM_idVehiculo()
{
	return $GLOBALS['AM_idVehiculo'];
}
//select($sql);
function setAM_kmFinal($kmfinal)
{
	$GLOBALS['AM_kmFinal'] = $kmfinal;
}

function getAM_kmFinal()
{
	return $GLOBALS['AM_kmFinal'];
}
function setAM_kmInicial($kmInicial)
{
	$GLOBALS['AM_kmInicial'] = $kmInicial;
}

function getAM_kmInicial()
{
	return $GLOBALS['AM_kmInicial'];
}


?>