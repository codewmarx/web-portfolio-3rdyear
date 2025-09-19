<?php

$servername = "localhost";
$username = "root"; // your db username
$password = ""; // your db password
$database = "empdata"; // your database name

    //connecting to the db
    $conn = new mysqli($servername, $username, $password, $database);

    //checking for connection
    if($conn->connect_error){
        echo "Connection failed: " . $conn->connect_error;
    } 

?>