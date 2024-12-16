<?php 
    include 'index.php';

    $name = $_GET['name'];
    $phone = $_GET['phone'];
    $gender = $_GET['gender'];

    $sql= "INSERT INTO `test_table_1`(`id`, `name`, `phone`, `gender`) VALUES (null,'$name','$phone','$gender')";

    if(mysqli_query($dataConnect , $sql)){
        echo "entry success";
    }
    else{
        echo "entry false";
    }
?>