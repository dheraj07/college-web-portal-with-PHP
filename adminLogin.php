<?php

    require 'adminConnection.php';
    $sql = "CREATE TABLE loginAsAdmin (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
        )";
    
    $conn->query($sql);

?>