<?php
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'katie';
    $connection = mysqli_connect($host, $user, $pass, $db_name);

    if( !isset($connection)){
        die ("Database Connection Failed....You're a big failure!!!!!!!!");
    }
?>