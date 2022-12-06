  <?php
require 'w3sidebar.php';

?>
  <!DOCTYPE html>
  <html>


  

  <div class="w3-container">
    <?php
      require "connection.php";

// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "website";
    
    // get values form input text and number

    $Username = $_POST['username'];
    $Password = $_POST['password'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `logins`(`username`, `password`) VALUES ('$Username','$Password')";
    
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
  <form action="" method="POST">

    username<input type="text" name="username"><br>
    password<input type="text" name="password"><br>

        <button type="submit" class="btn btn-info" name="submit">Add</button>
  </form>

</body>
</html>

  </div>

  </div>








  </body>
  </html>
