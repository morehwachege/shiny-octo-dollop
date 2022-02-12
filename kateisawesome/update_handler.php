<?php
if(isset($_POST["btn_update"])){
    $updateVoterName = $_POST["v_name"];
    $updateVoterIdNumber = $_POST["v_id_no"];
    $updateVoterCounty = $_POST["v_county"];
    $updateVoterGender = $_POST["v_gender"];
    $updateVoterPhoneNumber = $_POST["v_phone_number"];
    $voterId = $_POST["v_id"];

    require_once "dbconnection.php";

    $updateQuery = "UPDATE `voters` SET `v_name`='$updateVoterName',`v_id_no`='$updateVoterIdNumber',
    `v_county`='$updateVoterCounty',`v_gender`='$updateVoterGender',`v_phone_number`='$updateVoterPhoneNumber' WHERE id='$voterId'";
    $update = mysqli_query($connection, $updateQuery);
    if (isset($update)){
        // go back to voters.php to see the changes
        header("location: registered_voters.php");
        // echo "$voterId";
    }
    else{
        die( "Updating failed");
    }
}