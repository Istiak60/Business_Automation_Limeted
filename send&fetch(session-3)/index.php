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
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $school = $_POST['school'];
     $college = $_POST['college'];
     $university = $_POST['university'];
     $fbname = $_POST['fbname'];
     $github = $_POST['github'];
     $linkedin = $_POST['linkedin'];
     $whatsapp = $_POST['whatsapp'];
    $query = "INSERT INTO `user` (`username`,`password`,`name`,`surname`,`email`,`address`,`school`,`college`,`university`,`fbname`,`github`,`linkedin`,`whatsapp`) VALUES (:username,:password,:name,:surname,:email,:address,:school,:college,:university,:fbname,:github,:linkedin,:whatsapp);";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':surname', $surname);
    $stmt->bindParam(':email', $email);  
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':school', $school);
    $stmt->bindParam(':college', $college);
    $stmt->bindParam(':university', $university);
    $stmt->bindParam(':fbname', $fbname);
    $stmt->bindParam(':github', $github);
    $stmt->bindParam(':linkedin', $linkedin);
    $stmt->bindParam(':whatsapp', $whatsapp);
    $result = $stmt->execute();
    var_dump($result);
    header("location:list.php");
    
     
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <h1 style="text-align:center">Create Your Account     or Go To List    <button onclick="window.location.href='list.php'" type="submit" id="submit" class="btn btn-primary ml-5">List</button>
</h1>
    <form id="my-form" method="post">
        <div>
            <h3>Account</h3>
            <section>
                <label for="userName">User name *</label>
                <input id="userName" name="username" type="text" class="required" >
                <label for="password">Password *</label>
                <input id="password" name="password" type="password" class="required" >
                <label for="confirm">Confirm Password *</label>
                <input id="confirm" name="confirm" type="password"  class="required">
                <p>(*) Mandatory</p>
            </section>
            <h3>Profile</h3>
            <section>
                <label for="name">First name *</label>
                <input id="name" name="name" type="text" class="required" >
                <label for="surname">Last name *</label>
                <input id="surname" name="surname" type="text" class="required" >
                <label for="email">Email *</label>
                <input id="email" name="email" type="text" >
                <label for="address">Address</label>
                <input id="address" name="address" type="text" class="required">
               

                <p>(*) Mandatory</p>
            </section>
            <h3>Work and Education</h3>
            <section>
            <label for="School">School  (If applicable)</label>
                <input id="school" name="school" type="text" >
                <label for="college">College    (If applicable)</label>
                <input id="college" name="college" type="text" >
                <label for="university">University  (If applicable)</label>
                <input id="university" name="university" type="text" >
                
                
            </section>
            <h3>Social Accounts</h3>
            <section>
                <label for="Facebook">Facebook *</label>
                <input id="fbName" name="fbname" type="text" class="required">
                <label for="Github">Github *</label>
                <input id="github" name="github" type="text" class="required" >
                <label for="linkedIn">Linked In *</label>
                <input id="linkedIn" name="linkedin" type="text" class="required" >
                <label for="Whatsapp">Whatsapp</label>
                <input id="whatsapp" name="whatsapp" type="text" >
               
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