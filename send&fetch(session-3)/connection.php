<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "business_automation_limited";


if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to connect!");
}
?>