<?php

include 'index.php';
include 'db.php';

$Username = $_POST['username'];
$EmailID = $_POST['email'];
$PhoneNumber = $_POST['phone'];


$sql="INSERT INTO `table38`(`id`, `Username`, `Email ID`, `Phone Number`) VALUES (null,'$Username','$EmailID','$PhoneNumber')";

mysqli_query($conn,$sql);



?>

