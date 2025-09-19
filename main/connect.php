<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "credentials";

    //connecting to the db
    $conn = new mysqli($servername, $username, $password, $database);

    //checking for connection
    if($conn->connect_error){
        echo "Connection failed: " . $conn->connect_error;
    }

?>