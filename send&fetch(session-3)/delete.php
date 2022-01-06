<?php
$_id =$_GET['id'];
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
$query="DELETE FROM `user` WHERE `user`.`id` = :id";
$stmt =$conn->prepare($query);
$stmt->bindParam('id',$_id);
$result =$stmt->execute();


// this is for the location set to store.php to main home page index.php
header("location:list.php");

?>