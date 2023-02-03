<?php

$API = "https://jsonplaceholder.typicode.com/users";
$isikonten = file_get_contents($API);
$data = json_decode($isikonten, true);
//var_dump($data)

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>API Data Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid ">
            <span class="navbar-brand mb-0 h1 ">DATA USERS</span>
        </div>
    </nav>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <?php foreach ($data as $row) { ?>
                <div class="col-3 mt-3">
                    <div class="card shadow-lg" style="width: 18rem;">
                        <img src="gambarprofil/kadis.png" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['name'] ?></h5>
                            <hr>

                            <?php $address = array($row['address']);  ?>
                            <?php foreach ($address as $add) { ?>
                                <h5>Address :</h5>
                                <p class="card-text">Street : <?php echo $add['street'] ?></p>
                                <p class="card-text">Suite : <?php echo $add['suite'] ?></p>
                                <p class="card-text">City : <?php echo $add['city'] ?></p>
                                <p class="card-text">Zipcode : <?php echo $add['zipcode'] ?></p>
                                <?php $geo = array($add['geo']); ?>
                                <?php foreach ($geo as $ge) { ?>
                                    <h5>Geo :</h5>
                                    <p class="card-text">lat : <?php echo $ge['lat'] ?></p>
                                    <p class="card-text">lng : <?php echo $ge['lng'] ?></p>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Username : <?php echo $row['username'] ?></li>
                            <li class="list-group-item">Email : <?php echo $row['email'] ?></li>
                            <li class="list-group-item">Phone : <?php echo $row['phone'] ?></li>
                        </ul>
                        <div class="card-body">
                            <?php $company = array($row['company']); ?>
                            <?php foreach ($company as $co) { ?>
                                <h5>Company :</h5>
                                <p class="card-text">Name : <?php echo $co['name'] ?></p>
                                <p class="card-text">CatchPhrase : <?php echo $co['catchPhrase'] ?></p>
                                <p class="card-text">Bs : <?php echo $co['bs'] ?></p>
                            <?php } ?>
                        </div>
                        <div class="card-body">
                            <p>Website : </p><a href="#" class="card-link"><?php echo $row['website'] ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>