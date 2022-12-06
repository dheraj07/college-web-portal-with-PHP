  <?php
require 'w3sidebar.php';

?>

  <div class="w3-container">
  	<!--display data-->
  	<!DOCTYPE html>
<html>
<head>
		<style>
		body{
			background-image: url(1234.jpg);
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
	<style type="text/css">
		table{
			border: 2px solid red;
			background-color: #FFC;
		}
		th{
			border-buttom: 5px solid #000;
		}
		td{
			border-bottom: 2px solid #666;
		}
	</style>
</head>
<body>
	
	<?php

	require 'adminconnection.php';
	$sqlget = "SELECT * FROM loginasadmin";
	$sqldata = mysqli_query($conn, $sqlget) or die("GETTING ERROR");
	 echo "<table>";
	 echo "<tr><th>ID</th><th>username</th><th>password</th> </tr>";


	 while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
	 	echo "<tr><td>";
	 	echo $row['id'];
	 	echo "</td><td>";
	 	echo $row['username'];
	 	echo "</td><td>";
	 	echo $row['password'];
	 	echo "</td></tr>";

	 }
	 	echo "</table>";

	?>


</body>
</html>



<?php
// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "webportaladmin";
    
    // get values form input text and number

    $Username = $_POST['username'];
    $Password = $_POST['password'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `loginasadmin`(`username`, `password`) VALUES ('$Username','$Password')";
    
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
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<center>
  <form action="" method="POST">

    username<input type="text" name="username"><br>
    password<input type="text" name="password"><br>

        <button type="submit" class="btn btn-info" name="submit">Add</button>
  </form>
</center>

</body>
</html>

  </div>

  </div>








  </body>
  </html>
