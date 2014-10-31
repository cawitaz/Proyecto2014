<?php 
include("conexion.php");
//include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['tipoModal'])){
	//Obteniendo campos pasados por post
	$tipoModal 		= trim($_POST['tipoModal']);
	
}
	$sql = "UPDATE FVAM_vehiculo_2014
SET AM_estadoVehiculo = [$tipoModal]"
 
	$sql=$sql1;
$msg=trim(insertar($sql1));

//Verificando resultado
if ($msg == 1) {
	$msg="\nSe inserto el vehiculo correctamente";
} else if ($msg == 2) {
	$msg="Este vehiculo ya existe en la base de datos";
} else {
	$msg="No se pudo insertar el vehiculo";
}

//Enviando mensaje
echo $msg;

?>