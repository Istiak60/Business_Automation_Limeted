<?php

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

$query = "SELECT * FROM `user`";

$stmt = $conn->prepare($query);

$result = $stmt->execute();

$users = $stmt->fetchAll();


?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>List</title>
</head>

<body>
  <section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <h1 class="text-center mb-4">Lists</h1>
          <ul class="nav justify-content-center fs-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">
                Add an User
              </a>
            </li>
          </ul>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($users) > 0) :
                foreach ($users as $user) :
              ?>


                  <tr>
                    
                    <td><?= $user['username'] ?></td>
                    <td><?= $user['email'] ?></td>
                    
                    <td><a href="show.php?id=<?= $user['id']; ?>">Show</a>
                      |
                      <a href="edit.php?id=<?= $user['id']; ?>">Edit</a>
                      |


                        <a href="delete.php?id=<?= $user['id']; ?>" onclick="return confirm('Are you sure you want to Delete?')">
                            Delete
                        </a>
                    </td>
                  </tr>

                <?php
                endforeach;
              else :
                ?>
                <tr>
                  <td colspan="2">No Product is available.
                    <a href="create.php"> Click here to add one.</a>
                  </td>
                </tr>
              <?php
              endif;
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>

  <script src="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>