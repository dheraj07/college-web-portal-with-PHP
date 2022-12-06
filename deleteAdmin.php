  <?php
require 'w3sidebar.php';

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-image: url(back.jpg);
		}
		input{
			width: 30%;
			height: 50%
			border: 2px;
			border-radius: 05px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
	<title></title>
</head>
<body>
	<center>
		<form action="" method="POST">
			<br><br><br><br><br>
			<input type="text" name ="id" placeholder="Enter id to delete" ><br>
			<input type="submit" name="delete" value="Remove user"/>
			
		</form>
	</center>

</body>
</html>
<?php

// php code to Delete data from mysql database 

if(isset($_POST['delete']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "webportaladmin";
    
    // get id to delete
    $id = $_POST['id'];
    
    // connect to mysql
    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql delete query 
    $query = "DELETE FROM `loginasadmin` WHERE `id` = $id";
    
    $result = mysqli_query($connect, $query);
    
    if($result)
    {
        echo 'Data Deleted';
    }else{
        echo 'Data Not Deleted';
    }
    mysqli_close($connect);
}

?>


