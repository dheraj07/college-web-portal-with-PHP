<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="studentPage.css"></link>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Ambition College</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Please enter your roll number to check your result</h4>
            </div>
            <div class="card-body">

              <form action="" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                    <input type="text" name="get_id" class="form-control" placeholder="Enter your roll number here" required>
                  </div>
                  </div>

                  <div class="col-md-6">
                    <button  type="submit" name="fetch_btn" class="btn btn-primary">Check result</button>
                  </div>

                </div>
              </div>

            </div>
          </div>
        </div>
      

      <div class="col-md-5">
        <div class="card">
          <div class="card-body">
            <?php
            $connection = mysqli_connect("localhost","root","","website");
            if(isset($_POST['fetch_btn']))
            {
              $id = $_POST['get_id'];
              $query = "SELECT * FROM resulttable WHERE id='$id' ";
              $query_run = mysqli_query($connection,$query);

              if(mysqli_num_rows($query_run)>0){
                while ($row = mysqli_fetch_array($query_run)) {
                  
                  ?>
              <div class="form-group">
              <input type="text" name="get_id" class="form-control" value="<?php echo $row['id']; ?>" placeholder="roll number ">
            </div>

            <div class="form-group">
            <input type="text" name="get_id" class="form-control" value="<?php echo $row['result']; ?>" placeholder="Result" >
            </div>
                  
            <div class="form-group">
            <input type="text" name="get_id" class="form-control" value="<?php echo $row['gpa']; ?>" placeholder="Total CGPA">
            </div>


                  <?php
                }

              }else{
                echo "please check the symbol number and try again";

              }

            }
            ?>



                 

          
          </div>
        </div>
      </div>

    </div>
    </div>
  </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>