<?php 
//Agregamos conexion a la base de datos
include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['idEsquela'])){
	//Obteniendo campos pasados por post
	$idEsquela 	= trim($_POST['idEsquela']);
	$conductor	= trim($_POST['conductor']);
	$motivo 	= trim($_POST['motivo']);//Codificado con Sha1 longitud 40
	$esquela 	= trim($_POST['esquela']);
	$fechaRecib	= trim($_POST['fechaRecib']);//Array de valores
	$fechaVence= trim($_POST['fechaVence']);
	$vehiculo= trim($_POST['vehiculo']);
	
	
	//contar cantidad de elementos en el vector count($tipoUsuario)
	//$tipoUsuario[$i];
}
//Si el usuario tiene el valor de 2 significa que debe de cambiar el password lo más pronto posible

//Primera sentencia
$sql1 = "INSERT INTO FVAM_Esquela_2014 (AM_numEsuquela,AM_nombreConductor,AM_razonEsuqela,AM_montoEsquela,AM_fechaRecibida,AM_fechaVencimiento,AM_idUsuario,AM_idVehiculo )
VALUES('$idEsquela','$conductor','$motivo','$esquela','$fechaRecib','$fechaVence','CL001','$vehiculo');";

$sql=$sql1;
$msg=trim(insertar($sql1));

//Verificando resultado
if ($msg == 1) {
	$msg="\nSe inserto la esquela correctamente";
} else if ($msg == 2) {
	$msg="Este esuqela ya existe en la base de datos";
} else {
	$msg="No se pudo insertar el vehiculo";
}

//Enviando mensaje
echo $msg;
    
?>