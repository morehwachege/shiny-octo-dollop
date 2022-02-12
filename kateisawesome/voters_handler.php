<?php

if(isset($_POST["btn-voters"])){
    $voterName = $_POST["v_name"];
    $voter_id_no = $_POST["v_id_no"];
    $voter_county = $_POST["v_county"];
    $voter_gender = $_POST["v_gender"];
    $voter_phone_number = $_POST["v_phone_number"];

    require_once "dbconnection.php";
    $insertquery = "INSERT INTO `voters`(`id`, `v_name`, `v_id_no`, `v_county`, `v_gender`, `v_phone_number`)
     VALUES (NULL,'$voterName','$voter_id_no','$voter_county','$voter_gender','$voter_phone_number')";
    $save = mysqli_query($connection, $insertquery);
    if(isset($save)){
        header("location:voters.php");
    }
    else{
        echo "Voter Registration Failed";
    }
}

?>