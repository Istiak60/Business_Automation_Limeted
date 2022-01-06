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
      $_id = $_POST['id'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $school = $_POST['school'];
      $college = $_POST['college'];
      $university = $_POST['university'];

$query = "UPDATE `user`  SET `username`=:username,`email`=:email,`address`=:address,`school`=:school,`college`=:college,`university`=:university WHERE `user`.`id` =:id;";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $_id);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);  
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':school', $school);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':university', $university);


$result = $stmt->execute();
var_dump($result);
header("location:list.php");
