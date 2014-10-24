<?php
//Agregando conexión
include '../template/conexion.php';
//Obteniendo los campos por post
$id	= substr(sanear_string($_POST['nomUsuario']),0,1);
//Quitando ñ ó Ñ 

$id	.= substr(sanear_string($_POST['apellUsuario']),0,1);
//Pasando a mayusculas
$id=strtoupper($id);



//La siguiente cadena es el resultado de la ejecución del archivo
echo nIdUser($id);




//Función 
function obtener($sql){
	//Se define la variable global, ya que sino se hace esto entonces
	//no se tiene acceso a dicha variable
	global $conn;

	$resul="0";
	//Iniciamos proceso
	iniciar();
	$consulta = sqlsrv_query( $conn, $sql );
	if( $consulta === false) {
	    die( print_r( sqlsrv_errors(), true) );
	}
	//Obteniendo resultado
	while( $row = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC) ) {
		$resul=$row['id'];
	}

	sqlsrv_free_stmt( $consulta);
	cerrar();
	return $resul;
}

//Funcion que devuelve nuevo idUsuario
function nIdUser($id){
	//USER_NA001
	$salida='USER_'.trim($id).'001';
	$query ="SELECT MAX(AM_idUsuario) as id FROM FVAM_usuario_2014 WHERE AM_idUsuario LIKE '".$id."%' ";

	obtener($query);
	//Mientras exista resultados
	$salida= $id.formatoNum(obtener($query));
	
	return $salida;
}//fin de nuevo id usuario



//Formato para numero destinado a IDUSUARIO
function formatoNum($str){
	$str = (string)((int)substr(trim($str),7)+1);
	$i=strlen($str);
	while($i<3){
		$str='0'.$str;
		$i++;
	}
	return trim($str);
}


/**
 * El siguiente parrafo es un código externo:
 *
 * Reemplaza todos los acentos por sus equivalentes sin ellos
 *
 * @param $string
 *  string la cadena a sanear
 *
 * @return $string
 *  string saneada
 */
function sanear_string($string)
{

    $string = trim($string);

    $string = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );

    $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );

    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );

    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );

    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );

    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C',),
        $string
    );

    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(
        array("\\", "¨", "º", "-", "~",
             "#", "@", "|", "!", "\"",
             "·", "$", "%", "&", "/",
             "(", ")", "?", "'", "¡",
             "¿", "[", "^", "`", "]",
             "+", "}", "{", "¨", "´",
             ">", "< ", ";", ",", ":",
             ".", " "),
        '',
        $string
    );


    return $string;
}
?>