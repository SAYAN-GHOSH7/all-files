<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasname = "testingfirst";

// $dataconnect = mysqli_connect($servername, $username, $password, $databasname);

$conn = mysqli_connect($servername , $username , $password , $databasname);

if ($dataconnect) {
    echo "data base connected";
} else {
    echo "data base not connected";
}
?>