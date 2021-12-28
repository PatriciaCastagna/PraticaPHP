<?php
    
$server = "localhost";
    $user = "root";
    $pass = "";
    $bd = "products";

    $conn = new mysqli($server, $user, $pass, $bd);
   


    if ($conn->connect_error) {
       die("connection failed: ".$conn->connect_error);

    }
    echo "connected sucessfully";




?>