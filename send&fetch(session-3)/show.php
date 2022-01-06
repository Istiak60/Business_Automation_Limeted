<?php
$_id = $_GET['id'];

session_start();
$conn = new PDO(
   "mysql:host=localhost;dbname=business_automation_limited",
   'root',
   ''
);
//set the PDO error mode to exception
$conn->setAttribute(
   PDO::ATTR_ERRMODE,
   PDO::ERRMODE_EXCEPTION
);
$query = "SELECT * FROM `user` WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam('id', $_id);

$result = $stmt->execute();
$user = $stmt->fetch();





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Show details</title>
</head>

<body>


    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <h1 class="text-center mb-4"> Details </h1>

                    <dl class="row">
                        <dt class="col-md-3">ID</dt>
                        <dd class="col-md-9"><?= $user['id']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-3">Name</dt>
                        <dd class="col-md-9"><?= $user['username']; ?></dd>
                    </dl>
					<dl class="row">
                        <dt class="col-md-3">Email</dt>
                        <dd class="col-md-9"><?= $user['email']; ?></dd>
                    </dl>
					<dl class="row">
                        <dt class="col-md-3">Address</dt>
                        <dd class="col-md-9"><?= $user['address']; ?></dd>
                    </dl>
					<dl class="row">
                        <dt class="col-md-3">School</dt>
                        <dd class="col-md-9"><?= $user['school']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-3">College</dt>
                        <dd class="col-md-9"><?= $user['college']; ?></dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-md-3">University</dt>
                        <dd class="col-md-9"><?= $user['university']; ?></dd>
                    </dl>
                  

                    <dl class="row">
                        <dd class="col-md-9">Go to<a href="list.php">
                              List Items
                            </a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </section>

</body>

</html>