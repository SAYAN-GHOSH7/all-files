<?php

// $conn = new mysqli ('localhost','root','');
$dbconn = mysqli_connect('localhost','root','','test');

// if (!$conn){
//     die("fail");
// }

// echo "pass";

$uname ="ajay pual";
$sql = "UPDATE `class_36` SET `student_name`='$uname' WHERE id =12";
if(mysqli_query($dbconn,$sql)){
echo" hoyache";
}
else{
    echo "hoyeni";
}
?>