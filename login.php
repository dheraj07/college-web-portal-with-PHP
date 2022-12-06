<?php

    require 'connection.php';
    $sql = "CREATE TABLE logins (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
        )";
    
    $conn->query($sql);

?>