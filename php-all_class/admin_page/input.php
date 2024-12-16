<?php

include 'index.php';

include 'data.php' ;


$username = $_POST['username'];
$Emailid = $_POST['email'];
$phonenumber = $_POST['phone'];


$sql ="INSERT INTO `tablenew`(`id`, `Username`, `Email ID`, `Phone Number`) VALUES (null,'$username','$Emailid','$phonenumber')";

mysqli_query($conn,$sql);



?>