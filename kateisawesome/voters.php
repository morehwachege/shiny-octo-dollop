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
    <a class="text-center m-5 p-5" href="registered_voters.php" style="text-decoration:none; font-size: 15px; color: Blue; ">View Registered Voters</a>
    <form class="container m-5 p-5" action="voters_handler.php" method="post">
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Full Name</label>
            <input name="v_name" type="text" class="form-control" id="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Id Number</label>
            <input name="v_id_no" type="number" class="form-control" id="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">County</label>
            <select name="v_county" id="">
                <option value="">Select County</option>
                <option value="Bungoma">Bungoma</option>
                <option value="Nairobi">Nairobi</option>
                <option value="Kisii">Kisii</option>
                <option value="Machakos">Machakos</option>
                <option value="Malindi">Malindi</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Gender</label>
            <select name="v_gender" id="">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Gay">Gay</option>
                <option value="Lesbian">Lesbian</option>
                <option value="Non-Binary">Non-Binary</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputname" class="form-label">Phone Number</label>
            <input name="v_phone_number" type="tel" class="form-control" id="name" aria-describedby="nameHelp">
        </div>
        
        <button name="btn-voters" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>