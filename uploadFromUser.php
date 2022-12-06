<?php

    $errorMSg = $successMsg = " ";
    $hasError = false;
    $target_dir = "uploadFromUser/";
    
    if($_SERVER["REQUEST_METHOD"] == 'POST'){

        $up_file = $_FILES['photo'];

        //check the file is whether image or not 
        
        $check = getimagesize($up_file['tmp_name']);
        
        if($check == false){
            $errorMSg .= "Invalid image format.";
            $hasError = true; 
        }
        // var_dump($check);

    

    //check if the file size is too large
    if($up_file['size'] > 512000) {
        $errorMSg .= " File size is too large. ";
    }

    //check file (extension)
    $file_ext = strtolower(pathinfo($up_file['name'] , PATHINFO_EXTENSION));
    if($file_ext != 'png' && $file_ext !='jpg' && $file_ext != 'jpeg' && $file_ext != 'pdf' ){
        $errorMSg .= "Unsupported file type (only png, jpg and jpeg and pdf are allowed";
        $hasError = true;
    }
    $target_file = $target_dir . $up_file['name'];
    $target_file = $target_dir . time() . '.' .$file_ext;
    if(file_exists($target_file)){
        $errorMSg .= "<br> File already exists";
        $has_error = true;
    }
    

    if($hasError == false) {
        //write upload script
        if(move_uploaded_file($up_file['tmp_name'], $target_file)) {
            $successMsg = "File uploaded sucessfully.";
        }
        else {
            $errorMSg .= "File not uploaded.";
        }


    }

}

?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="studentPage.css"></link>
        <title>File Upload Demo </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class = "container">
            <div class = "row">
                <div class = "col-md-6">
                    <?php if(!empty($successMsg)){ ?>
                        <div class = "alert alert-success">
                            <?php echo $successMsg; ?>
                        </div>
                    <?php } ?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                            <label for ="file"> Upload Photo </label>
                            <input type = "file" class="form-control" name = "photo">
                            <span class="text-danger"><?php echo $errorMSg; ?> </span>
        
                            <button type = "submit" class= "btn btn-primary"> Upload </button>
                    
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>