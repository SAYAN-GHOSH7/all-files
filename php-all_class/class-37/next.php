<!-- <?php



echo $_['name'];
echo $_REQUEST['email'];
echo $_REQUEST['phone'];
echo $_REQUEST['age'];


?> -->


<?php
include "db.php";

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$age = $_REQUEST['age'];




$sql ="INSERT INTO `newlist`(`id`, `name`, `email`, `city`, `phone`) VALUES (null,'$name','$email','$phone','$age')";

if(mysqli_query($conn,$sql)){
    echo "submtted";
}

?>