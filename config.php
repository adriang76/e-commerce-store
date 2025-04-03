<?php 
function dbConnect() {
    $host = "localhost";
    $user = "phpmyadmin";           
    $pass = "Phpmy@dm1n";              
    $db   = "ecom_db"; //login page will no load if not connected to database

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    return $conn;
}
?>