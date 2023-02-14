<?php

function conn(){
    $host_name = "localhost";
    $db_user = "root";
    $password = "";
    $db_name = "db_form";


    $connect_db = mysqli_connect($host_name, $db_user, $password, $db_name);
    return $connect_db;
}

?>