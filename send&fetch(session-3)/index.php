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
    if($_SERVER['REQUEST_METHOD']== "POST")
    {
      //somthing was posted
     $username = $_POST['username'];
     $password = $_POST['password'];
     $email = $_POST['email'];

$query = "INSERT INTO `user` (`username`,`password`,`email`) VALUES (:username,:password,:email);";
$stmt = $conn->prepare($query);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':email', $email);
$result = $stmt->execute();

var_dump($result);
header("location:index.php");
    
     
    }



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
</head>
<body>
    <form id="my-form" method="post">
        <div>
            <h3>Account</h3>
            <section>
                <label for="userName">User name *</label>
                <input id="userName" name="username" type="text" >
                <label for="password">Password *</label>
                <input id="password" name="password" type="password" >
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="password" >
                <p>(*) Mandatory</p>
            </section>
            <h3>Profile</h3>
            <section>
                <!-- <label for="name">First name *</label>
                <input id="name" name="name" type="text" >
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" >
                <label for="dob">Date of Birth *</label>
                <input id="dob" name="dob" type="date" >
                <label for="email">Email *</label>
                <label for="address">Address</label>
                <input id="address" name="address" type="text"> -->
                <input id="email" name="email" type="text" >

                <p>(*) Mandatory</p>
            </section>
            <h3>Work and Education</h3>
            <section>
            <!-- <label for="School">School  (If applicable)</label>
                <input id="school" name="school" type="text" >
                <label for="college">College    (If applicable)</label>
                <input id="college" name="college" type="text" >
                <label for="university">University  (If applicable)</label>
                <input id="university" name="university" type="text" >
                 -->
                
            </section>
            <h3>Social Accounts</h3>
            <section>
                <!-- <label for="Facebook">Facebook *</label>
                <input id="fbName" name="fbname" type="text" >
                <label for="Github">Github *</label>
                <input id="github" name="github" type="text" >
                <label for="linkedIn">Linked In *</label>
                <input id="linkedIn" name="linkedin" type="text" >
                <label for="Whatsapp">Whatsapp</label>
                <input id="whatsapp" name="whatsapp" type="text" >
                -->
                <p>(*) Mandatory</p>
            </section>
            <h3>Finish</h3>
            <section>
                <!-- <input id="acceptTerms" name="acceptTerms" type="checkbox" > <label for="acceptTerms">I agree with the Terms and Conditions.</label> -->
            </section>
        </div>
    </form>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/jquery.steps.js"></script>
    <script src="js/script.js"></script>
</body>
</html>