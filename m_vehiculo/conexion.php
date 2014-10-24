<?php


$serverName = "(local)\SQLEXPRESS";
$connectionInfo = array( "Database"=>"BD_FlotaVehicular", "UID"=>"sa", "PWD"=>"base_dsi" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}







?>