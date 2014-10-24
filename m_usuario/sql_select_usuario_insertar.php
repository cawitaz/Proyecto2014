<?php 
//Agregamos conexion a la base de datos
include '../template/conexion.php';
//Si detecta post hacer operación
if(isset($_POST['idUsuario'])){
	//Obteniendo campos pasados por post
	$idUsuario 		= trim($_POST['idUsuario']);
	$nomUsuario		= trim($_POST['nomUsuario']).' '.trim($_POST['apellUsuario']);
	$passUsuario 	= sha1(trim($_POST['passUsuario']));//Codificado con Sha1 longitud 40
	$emailUsuario 	= trim($_POST['emailUsuario']);
	$tipoUsuario 	= $_POST['tipoUsuario'];//Array de valores

	//contar cantidad de elementos en el vector count($tipoUsuario)
	//$tipoUsuario[$i];
}
//Si el usuario tiene el valor de 2 significa que debe de cambiar el password lo más pronto posible

//Primera sentencia
$sql1 = "INSERT INTO FVAM_usuario_2014 (AM_idUsuario,AM_nombreUsuario,AM_email,AM_contraUsuario,AM_estadoUsuario)
VALUES('$idUsuario','$nomUsuario','$emailUsuario','$passUsuario','2');";

//Completando sentencias insert correspondientes a los perfiles
$sql2='';
for ($j=0; $j < count($tipoUsuario); $j++) { 
	$sql2 = "$sql2 INSERT INTO FVAM_auxUsuarioPerfil_2014 (AM_idUsuario,AM_idPerfil) VALUES('$idUsuario','".$tipoUsuario[$j]."');";
}

//Haciendo un solo lote de sentencias insert...
$sql = $sql1 . $sql2;

//Asumiendo validación de información


//Se define la variable como global, ya que sino se hace esto entonces
//no se tiene acceso a dicha variable que se definio en el archivo conexion



//Iniciamos de inserción en base de datos
$msg=trim(insertar($sql));

//Verificando resultado
if ($msg == 1) {
	$msg="\nSe inserto el usuario correctamente";
} else if ($msg == 2) {
	$msg="Este usuario ya existe en la base de datos";
} else {
	$msg="No se pudo insertar el usuario";
}

//Enviando mensaje
echo $msg;
    
?>