<?php 
//Agregamos conexion a la base de datos
include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['idVehiculoModal'])){
	//Obteniendo campos pasados por post
	 $idVehiculoModal    = trim($_POST['idVehiculoModal']);
	 $idVehi    = trim($_POST['idVehi']);
	 $tipoVehi  = trim($_POST['tipoVehi']);
	 $colorVehi = trim($_POST['colorVehi']);
	 $marcaVehi = trim($_POST['marcaVehi']);
	 $yearVehi = trim($_POST['yearVehi']);
	 $chasisVehi = trim($_POST['chasisVehi']);
     $tarjeVehi = trim($_POST['tarjeVehi']);
}



//Primera sentencia
//echo $idManto;
$sql = "update FVAM_vehiculo_2014 set AM_numPlacas = '$idVehi', AM_tipoVehiculo = '$tipoVehi',AM_colorVehiculo = '$colorVehi' ,AM_marcaVehiculo = '$marcaVehi',AM_anioVehiculo = '$yearVehi', AM_numChasis = '$chasisVehi', AM_numTarjetaCirc = '$tarjeVehi' where AM_idVehiculo = '$idVehiculoModal';";
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