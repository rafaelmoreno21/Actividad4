<?php

$host = "sql302.epizy.com";
$user = "epiz_33814540";
$pass = "6RnWsxT4uof5Q";
$db   = "epiz_33814540_pdvsa";

$conn = mysqli_connect($host, $user, $pass, $db);

if(mysqli_connect_errno()){
    echo "Error de conexion " . mysqli_connect_error();
}else{
    //echo "conectada";
}

?>