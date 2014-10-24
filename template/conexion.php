<?php

/* 
Todos parametros estan en config.php por lo que cualquier cambio hacerlo en ese archivo
 */
require_once 'config.php'; 
$estado		= 0;
$conn = NULL;

/* Inicio de la función que inicia la conexion a la base de datos*/
function iniciar(){
	global $estado, $conn;
	//Cadena con los parametros requeridos para la conexion de la base de datos
	$connectionInfo = array( "Database"=>DB_NAME, "UID"=>DB_USER, "PWD"=>DB_PASS);
	$conn = sqlsrv_connect( DB_SERVER, $connectionInfo);
	//Verificamos si se nos habilito la conexion a la base de datos
	if( $conn ) {
		//echo "Conexión establecida.<br/>";
		$estado=1;
	}else{
		//echo "Error: Conexion no completada.";
		$estado=0;
		//die( print_r( sqlsrv_errors(), true));
	}
}//Fin de la funcion que inicia la conexion

//Funcion que cierra la conexion a la base de datos
function cerrar(){
	global $estado;
	if ($estado == 1) {
		sqlsrv_close();
		//echo "conexion cerrada verificada";
		$estado=0;
		$conn = NULL;
	}
}//Fin de la funcion insertar

//Inicio de la funcion insertar
function insertar($sql){
	global $estado, $conn;
	$errors= NULL;
	$resul=1;
	iniciar();
	$params = array(1, "some data");

	if ($estado == 1) {
	
		$consulta = sqlsrv_query( $conn, $sql, $params);
		if( $consulta === false ) {
			//die( print_r( sqlsrv_errors(), true));
			//Comparando código de error
			$errors = sqlsrv_errors();
			if ( $errors['code'] == '2627')  {
				//Clave duplicada, si es insertar
				$resul = 2;
			} else {
				//No se pudo insertar
				$resul = 3;
			}

			//* sirve para verificar el tipo de error que se generó
			if( ($errors = sqlsrv_errors() ) != null) {
		        foreach( $errors as $error ) {
		            echo "\ncode: +".$error[ 'code']."+";
		            echo "message: ".$error[ 'message'];
		        }
		    }//*/
		}
		cerrar();
	} else {
		$resul = 0;
	}
	return $resul;
}//fin de la funcion insertar



//Inicio de la funcion actualizar
function actualizar($sql){
	//Por definir
}//fin de la funcion actualizar


//Inicio de la funcion eliminar
function eliminar($sql){
	//Por definir
}//fin de la funcion eliminar

?>