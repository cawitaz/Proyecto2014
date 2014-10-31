<?php
include '../template/conexion.php';

$sql = "SELECT * FROM FVAM_vehiculo_2014 WHERE AM_idVehiculo =; ";
$AM_tipoVehiculo = ""; $AM_colorVehiculo = ""; $AM_marcaVehiculo = ""; $AM_anioVehiculo = "";$AM_numChasis = "";$AM_numPlacas=""; $AM_numTarjetaCirc="";$AM_estadoVehiculo="";$AM_kilometraje="";$AM_numMotot="";$AM_fechaEmisionPlacas="";$AM_fechaEmisionTarjeta="";
$AM_idVehiculo;

	$sql = "SELECT * FROM FVAM_vehiculo_2014 WHERE AM_idVehiculo='$idVehiculo'; ";


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

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_tipoVehiculo($row['AM_tipoVehiculo']);
		setAM_colorVehiculo($row['AM_colorVehiculo']);
		setAM_marcaVehiculo($row['AM_marcaVehiculo']);
		setAM_anioVehiculo($row['AM_anioVehiculo']);
		setAM_numChasis($row['AM_numChasis']);
		setAM_numPlacas($row['AM_numPlacas']);
		setAM_numTarjetaCirc($row['AM_numTarjetaCirc']);
		setAM_estadoVehiculo($row['AM_estadoVehiculo']);
		setAM_kilometraje($row['AM_kilometraje']);
		setAM_numMotot($row['AM_numMotot']);
		setAM_fechaEmisionPlacas($row['AM_fechaEmisionPlacas']);
		setAM_fechaEmisionTarjeta($row['AM_fechaEmisionTarjeta']);
			
	}

	}
function setAM_tipoVehiculo($tipo)
{
	$GLOBALS['AM_tipoVehiculo'] = $tipo;
}

//Get de variable nombre de usuario
function getAM_tipoVehiculo()
{
	return $GLOBALS['AM_tipoVehiculo']; 
}

//********************************
//Set para el campo de email 
function setAM_colorVehiculo($color)
{
	$GLOBALS['AM_colorVehiculo'] = $color;
}

//Get para el campo de email 
function getAM_colorVehiculo()
{
	return $GLOBALS['AM_colorVehiculo'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_marcaVehiculo($marca)
{
	$GLOBALS['AM_marcaVehiculo'] = $marca;
}

//Get para el campo de estado de usuario 
function getAM_marcaVehiculo()
{
	return $GLOBALS['AM_marcaVehiculo'];
}

//*****************************************
//Set para el campo del idUsuario
function setAM_anioVehiculo($anio)
{
	$GLOBALS['AM_anioVehiculo'] = $anio;
}

function getAM_anioVehiculo()
{
	return $GLOBALS['AM_anioVehiculo'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_numChasis($chasis)
{
	$GLOBALS['AM_numChasis'] = $chasis;
}

function getAM_numChasis()
{
	return $GLOBALS['AM_numChasis'];
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
function setAM_numPlacas($placas)
{
	$GLOBALS['AM_numPlacas'] = $placas;
}

function getAM_numPlacas()
{
	return $GLOBALS['AM_numPlacas'];
}
function setAM_numTarjetaCirc($tarjeta)
{
	$GLOBALS['AM_numTarjetaCirc'] = $tarjeta;
}

function getAM_numTarjetaCirc()
{
	return $GLOBALS['AM_numTarjetaCirc'];
}
function setAM_estadoVehiculo($estado)
{
	$GLOBALS['AM_estadoVehiculo'] = $estado;
}

//Get para el campo de email 
function getAM_estadoVehiculo()
{
	return $GLOBALS['AM_estadoVehiculo'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_kilometraje($km)
{
	$GLOBALS['AM_kilometraje'] = $km;
}

//Get para el campo de estado de usuario 
function getAM_kilometraje()
{
	return $GLOBALS['AM_kilometraje'];
}

//*****************************************
//Set para el campo del idUsuario
function setAM_numMotot($motor)
{
	$GLOBALS['AM_numMotot'] = $motor;
}

function getAM_numMotot()
{
	return $GLOBALS['AM_numMotot'];
}
//select($sql);
//*****************************************
//Set para el campo del idUsuario
function setAM_fechaEmisionPlacas($emision)
{
	$GLOBALS['AM_fechaEmisionPlacas'] = $emision;
}

function getAM_fechaEmisionPlacas()
{
	return $GLOBALS['AM_fechaEmisionPlacas'];
}

function setAM_fechaEmisionTarjeta($emitar)
{
	$GLOBALS['AM_fechaEmisionTarjeta'] = $emitar;
}

function getAM_fechaEmisionTarjeta()
{
	return $GLOBALS['AM_fechaEmisionTarjeta'];
}
//select($sql);
?>