<?php 
//Agregamos conexion a la base de datos
include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['idVehi'])){
	//Obteniendo campos pasados por post
	$idVehi 	= trim($_POST['idVehi']);
	$tipoVehi	= trim($_POST['tipoVehi']);
	$colorVehi 	= trim($_POST['colorVehi']);//Codificado con Sha1 longitud 40
	$marcaVehi 	= trim($_POST['marcaVehi']);
	$yearVehi 	= trim($_POST['yearVehi']);//Array de valores
	$chasisVehi	= trim($_POST['chasisVehi']);
	$placas	    = trim($_POST['placas']);
	$tarjeVehi 	= trim($_POST['tarjeVehi']);//Codificado con Sha1 longitud 40
	$estado 	= trim($_POST['estado']);
	$kiloVehi	= trim($_POST['kiloVehi']);//Array de valores
	$motorVehi	= trim($_POST['motorVehi']);//Array de valores
	$emiPlacaVehi	=trim ($_POST['emiPlacaVehi']);//Array de valores
	$emiTarjeVehi	= trim($_POST['emiTarjeVehi']);//Array de valores

	//contar cantidad de elementos en el vector count($tipoUsuario)
	//$tipoUsuario[$i];
}
//Si el usuario tiene el valor de 2 significa que debe de cambiar el password lo más pronto posible

//Primera sentencia
$sql1 = "INSERT INTO FVAM_vehiculo_2014 (AM_idVehiculo,AM_tipoVehiculo,AM_colorVehiculo,AM_marcaVehiculo,AM_anioVehiculo,AM_numChasis,AM_numPlacas,AM_numTarjetaCirc,AM_estadoVehiculo,AM_kilometraje,AM_numMotot,AM_fechaEmisionPlacas,AM_fechaEmisionTarjeta,AM_idUsuario)
VALUES('$idVehi','$tipoVehi','$colorVehi','$marcaVehi','$yearVehi','$chasisVehi','$placas','$tarjeVehi','$estado','$kiloVehi','$motorVehi','$emiPlacaVehi','$emiTarjeVehi','CL001');";

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