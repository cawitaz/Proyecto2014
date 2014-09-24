<?php

/* El servidor con el formato: <computer>\<instance name> o 
 <server>,<port> cuando se use un número de puerto diferente del de defecto*/

require_once '../archivos/config.php'; 
private $servidor 	= DB_SERVER;
private $usuario 	= DB_USER;
private $pass 		= DB_PASS;
private $db_name 	= DB_NAME;
protected $conn = null;

echo "Probando conexion a MSSQL";

$connectionInfo = array( "Database"=>$db_name, "UID"=>$usuario, "PWD"=>$pass);
$conn = sqlsrv_connect( $servidor, $connectionInfo);

echo "<br><br>";
if( $conn ) {
     echo "Conexión establecida.<br />";
     sqlsrv_close();
}else{
     echo "No se pudo establecer la conexion a la base de datos.<br />";
     die( print_r( sqlsrv_errors(), true));
}

echo "<br>";
echo "operación completada";
?>
