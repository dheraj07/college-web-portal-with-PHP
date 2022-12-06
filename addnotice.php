<?php
require 'w3sidebar.php';
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "website";
    
    // get values form input text and number

    $notice = $_POST['notice'];
    
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `notice`(`notice`) VALUES ('$notice')";
    
    $result = mysqli_query($connect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Add Notice Please </title>
    <style>

</style>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card mt-5">
                    <div class="card-title">
                        <h2 class="text-center py-2"> Add Notice </h2>
                        <hr>
                        
                    </div>
                    <div class="card-body">
                        <form method= "POST">

                            <textarea name="notice" class="form-control mb-2" placeholder="Write The Notice"></textarea>
                            <input type="submit"name="submit"value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>