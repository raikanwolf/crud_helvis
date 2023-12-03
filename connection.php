<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";

    $bd = "usuarios_crud_basico";

    $connect=mysqli_connect($host, $user, $pass);

    mysqli_select_db($connect, $bd);

    return $connect;

}


?>