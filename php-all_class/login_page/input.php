<?php

include 'index.php';

$Username = $_POST['username'];
$EmailID = $_POST['email'];
$PhoneNumber = $_POST['phone'];

$sql="INSERT INTO `mytable`(`id`, `Username`, `Email ID`, `Phone Number`) VALUES (null,'$Username','$EmailID','$PhoneNumber')";

if(mysqli_query($dataconnect,$sql)){
    echo "enter succes";
}
else{
    "enter failed";
}


?>