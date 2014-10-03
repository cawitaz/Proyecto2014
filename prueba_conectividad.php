<?php

/* El servidor con el formato: <computer>\<instance name> o 
 <server>,<port> cuando se use un número de puerto diferente del de defecto
require_once 'config.php'; 
 */
echo "Probando conexion a MSSQL";

$servidor 	= "MARIELOS-PC\SQLEXPRESS";
$usuario 	= "sa";
$pass 		= "carlos";
$db_name 	= "prueba";
$conn = null;

echo "Probando conexion a MSSQL";

$connectionInfo = array( "Database"=>$db_name, "UID"=>$usuario, "PWD"=>$pass);
$conn = sqlsrv_connect( $servidor, $connectionInfo);

echo "<br><br>";
if( $conn ) {
     echo "Conexión establecida.<br />";
     sqlsrv_close();
}else{
     echo "No .<br />";
     die( print_r( sqlsrv_errors(), true));
}

echo "<br>";
echo "operación completada";
?>
