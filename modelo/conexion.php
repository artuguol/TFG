<?php

session_start();

define('DB_SERVER','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','1234');
define('DB_NAME', 'TFG');

$conexion = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,  DB_NAME);

if($conexion == false){
    die("error en la conexion" .mysqli_connect_error());
}

?>