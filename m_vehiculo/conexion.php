<?php


$serverName = "MARIELOS-PC\SQLEXPRESS";
$connectionInfo = array( "Database"=>"BD_FlotaVehicular", "UID"=>"sa", "PWD"=>"carlos" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}








?>