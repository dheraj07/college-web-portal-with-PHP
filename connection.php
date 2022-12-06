<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "website";

    //create connection 
    $conn = new mysqli($servername, $username, $password, $database);

    //check connection
    if($conn->connect_error) {
        die("Connection failed:" . $conn->connect_error);
    }

    //$sql = "CREATE TABLE logins (
        //id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        //username VARCHAR(30) NOT NULL,
        //password VARCHAR(30) NOT NULL
        //)";
    
    //$conn->query($sql);

?>