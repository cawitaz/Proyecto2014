<?php


include '../template/conexion.php';

//Inicialización de variables

$sql = "SELECT AM_nombreUsuario,AM_email,AM_estadoUsuario,AM_idUsuario FROM FVAM_usuario_2014 WHERE AM_idUsuario =; ";

//Creación de variables en campos vacios
$AM_nombreUsuario = ""; $AM_email = ""; $AM_estadoUsuario = "";
$AM_idUsuario;
$AM_idPerfil = array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0");


//Procediendo a realizar el procedimiento
setAM_idUsuario($idUsuario);


//Creando sql
$sql = "SELECT AM_nombreUsuario,AM_email,AM_estadoUsuario
	FROM FVAM_usuario_2014 WHERE AM_idUsuario='$idUsuario'; ";
$sql2 = "SELECT * FROM FVAM_auxUsuarioPerfil_2014 WHERE AM_idUsuario='$idUsuario';";

global $conn;
	
	$resul="";
	//Iniciamos proceso
	iniciar();
	$consulta = sqlsrv_query( $conn, $sql );
	if( $consulta === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}

	//Obteniendo datos de usuario
	selectDatosUsuario($sql);

	$consulta = sqlsrv_query( $conn, $sql2 );
	if( $consulta === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}

	//Obteniendo perfiles de usuario
	selectPerfilUsuario();

	sqlsrv_free_stmt( $consulta);
	cerrar();//Cierra conexion

//Función que selecciona datos del usuario
function selectDatosUsuario($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable	
	global $consulta;

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_nombreUsuario($row['AM_nombreUsuario']);
		setAM_email($row['AM_email']);
		setAM_estadoUsuario($row['AM_estadoUsuario']);
	}
}


//Función que selecciona datos del usuario
function selectPerfilUsuario($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable	
	global $consulta;

	//Proceso extra
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		setAM_idPerfil(trim($row['AM_idPerfil']));
	}
}



//Creación de set y gets para las variables 

//Set de variable nombre de usuario
function setAM_nombreUsuario($nombreUsuario)
{
	$GLOBALS['AM_nombreUsuario'] = $nombreUsuario;
}

//Get de variable nombre de usuario
function getAM_nombreUsuario()
{
	return $GLOBALS['AM_nombreUsuario']; 
}

//********************************
//Set para el campo de email 
function setAM_email($email)
{
	$GLOBALS['AM_email'] = $email;
}

//Get para el campo de email 
function getAM_email()
{
	return $GLOBALS['AM_email'];
}

//*****************************************
//Set para el campo de estado de usuario 
function setAM_estadoUsuario($estado)
{
	$GLOBALS['AM_estadoUsuario'] = $estado;
}

//Get para el campo de estado de usuario 
function getAM_estadoUsuario()
{
	return $GLOBALS['AM_estadoUsuario'];
}

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

//**************************************
//Set para perfiles de usuario
function setAM_idPerfil($idPerfil)
{
	$GLOBALS['AM_idPerfil'][$idPerfil - 1] = 1;
}
//Get para perfiles de usuario
function getAM_idPerfil($posicion)
{
	return $GLOBALS['AM_idPerfil'][$posicion];
}

?>