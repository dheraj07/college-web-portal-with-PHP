  <?php
  // Initialize the session
  session_start();
      
      // Check if the user is already logged in, if yes then redirect him to welcome page
      //if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
         // header("location: studentPage.php");
         // exit;
      //}
      // Include config file
      require "adminConnection.php";
      
      // Define variables and initialize with empty values
      $username = $password =$db_username=$db_password= "";
      $username_err = $password_err = "";
  
      // Processing form data when form is submitted
      if($_SERVER["REQUEST_METHOD"] == "POST"){
      
          // Check if username is empty
          if(empty($_POST["username"])){
              $username_err = "Please enter username.";
          } else{
              $username = $_POST["username"];
          }
          
          // Check if password is empty
          if(empty($_POST["password"])){
              $password_err = "Please enter your password.";
          } else{
              $password = $_POST["password"];
          }
          
          // Validate credentials
          if(empty($username_err) && empty($password_err))
          {                    
                      //verify password
                          $exe="select *from loginAsAdmin where username='".$username."'";
                          $hit=mysqli_query($conn,$exe);
                              foreach($hit as $result)
                              {
                                  $db_username=$result['username'];
                                  $db_password=$result['password'];
                                  
                              }
                              //verify username in the database
                              if($username==$db_username)
                              {     
                                  if($password==$db_password)// Password is correct, so start a new session
                                  {
                                      session_start();
                                      
                                      // Store data in session variables
                                      $_SESSION["loggedin"] = true;
                                      $_SESSION["id"] = $id;
                                      $_SESSION["username"] = $username;                            
                                      
                                      // Redirect user to welcome page
                                      header("location: adminPage.php");
                                  } else{
                                      // Display an error message if password is not valid
                                      $password_err = "Incorrect password";
                                  }
                              }else{
                                  $username_err="Username doesnot exists.";
                              }
                          
              }else{
                      echo '<script language = "javascript">';
                      echo 'alert("Oops! Something went wrong. Please try again later.")';
                      echo '</script>';
                  }
          }
  ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="style.css">
      <title>Login Here</title>
    </head>
    <body>

    <nav id="navbar">
        <ul>
           
        </ul>
    </nav>

          <!-- login panel -->
      <div class="container">
        <div class="card mx-auto" style="width: 18rem;">
            <img src="login.jpg" style="width: 60%" class="card-img-top mx-auto" alt="login-image">
            <div class="card-body"> 
          <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name = "username">
                <spam class = "text-danger"> <?php echo $username_err; ?> </span>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name = "password">
                <spam class = "text-danger"> <?php echo $password_err; ?> </span>
            </div>
              <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i>&nbsp;Login</button>
              <!-- <span><a href="#">Register</a></span> -->
          </form>
        </div>
      </div>
          <!-- login panel -->
      

      
  
    </body>
  </html>


