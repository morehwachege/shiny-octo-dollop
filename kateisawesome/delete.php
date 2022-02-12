<?php
if (isset($_GET["v_id"])){
    $voter_id = $_GET["v_id"];
    require_once "dbconnection.php";
    $deleteQuery = "DELETE FROM `voters` WHERE id= '$voter_id'";
    $delete = mysqli_query($connection, $deleteQuery);
    if(isset($delete)){
        header("location:registered_voters.php");

    }else{
        echo "Voter Deletion Failed";
    }
}