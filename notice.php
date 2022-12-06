<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="fetchnotice.css"></link>
	<title>College web portal</title>
</head>
<body>
	<div class ="page">
		
		

		<div class="bodypart">
							
			<div class="imagepart"></div>
			<div class="newspart">

				<h1>Notice From College</h1>
				<div class="news">
					
						<h3>Notice From College Administration</h3>

						<?php
						require 'connection.php';
						$sqlget = "SELECT * FROM notice";
						$sqldata = mysqli_query($conn, $sqlget) or die("GETTING ERROR");
						while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
						echo $row['notice'];
					    }


						?>
						

					
				</div>
			</div>
			
		</div>

	</div>


</body>
</html>