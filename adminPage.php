
<?php
require 'w3sidebar.php';

?>


  

  <div class="w3-container">
  	<!--display data-->
  	<!DOCTYPE html>
<html>
<head>
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

	require 'connection.php';
	$sqlget = "SELECT * FROM logins";
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

  </div>

  </div>

  </body>
  </html>
