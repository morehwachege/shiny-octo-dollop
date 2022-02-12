<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voters Domain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1 class="text-center">Registered Voters</h1>
    <a class="text-center m-5 p-5" href="voters.php" style="text-decoration:none; font-size: 15px; color: Blue; ">Create Voter Account</a>
    <table  class=" container m-5 p-5 " style="">
        <tr>
            <th>Name</th>
            <th>Id Number</th>
            <th>County</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
        <?php
            require_once "dbconnection.php";
            $selectQuery = "SELECT `id`, `v_name`, `v_id_no`, `v_county`, `v_gender`, `v_phone_number` FROM `voters` WHERE 1";
            $voters = mysqli_query($connection, $selectQuery);

            foreach ($voters as $voter){
                $voter_name = $voter["v_name"];
                $voter_id_no = $voter["v_id_no"];
                $voter_county = $voter["v_county"];
                $voter_gender = $voter["v_gender"];
                $voter_phone_number = $voter["v_phone_number"];
                $voter_id = $voter["id"];

                if($voter_name){
                    echo "
                <tr>
                    <td style='padding:20px; color:blue'; font-weight:1000> $voter_name </td>
                    <td> $voter_id_no </td>
                    <td> $voter_county </td>
                    <td> $voter_gender </td>
                    <td> $voter_phone_number </td>
                    <td> <a class='btn-danger' style='padding:6px; border-radius:5px; text-decoration:none' href='./delete.php?v_id=$voter_id'>Delete</a> </td>
                    <td> <a class='btn-success' style='padding:6px; border-radius:5px; text-decoration:none' href='./update.php?v_id=$voter_id&v_name=$voter_name&
                    v_id_no=$voter_id_no&v_county=$voter_county&v_gender=$voter_gender&v_phone_number=$voter_phone_number'>Update</a> </td>
                 </tr>
                ";
                }
                else{
                    echo "No voters available";
                }
            }

        ?>
    </table>
</body>

</html>