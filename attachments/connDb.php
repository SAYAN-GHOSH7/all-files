<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dataBaseName = "test_1";

    $dataConnect = mysqli_connect($servername , $username , $password , $dataBaseName );

    if($dataConnect){
        echo "Database connected";
    }
    else{
        echo "Data base not connected";
    }
?>