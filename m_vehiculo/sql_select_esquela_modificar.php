<?php 
//Agregamos conexion a la base de datos
include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['idEsquela'])){
	//Obteniendo campos pasados por post
	 $idEsquela    = trim($_POST['idEsquela']);
	 $conductor   = trim($_POST['conductor']);
	 $montoEsquela   = trim($_POST['montoEsquela']);
	 $vehiculo = trim($_POST['vehiculo']);
	
}

//Primera sentencia
//echo $idManto;
$sql = "update FVAM_Esquela_2014 set AM_nombreConductor = '$conductor', AM_montoEsquela = '$montoEsquela',AM_idVehiculo = '$vehiculo'where AM_numEsuquela = '$idEsquela';";
//echo $sql;

//Iniciamos la actualizacion en base de datos
//$msg=trim(insertar($sql));

/*********************************/
global $conn;
$resul = 1;
iniciar();
    $consulta = sqlsrv_query( $conn, $sql );
    if( $consulta === false) {
        die( print_r( sqlsrv_errors(), true) );
    }
	
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


/*********************************/

//Verificando resultado
if ($resul == 1) {
	$resul="\nSe ha modificado la solicitud exitosamente";
} else if ($resul == 2) {
	$resul="Este usuario ya existe en la base de datos";
} else {
	$resul="No se pudo modificar la solicitud";
}

//Enviando mensaje
echo $resul;
    
?>