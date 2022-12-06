<?php
// Include and initialize DB class
require_once 'DB.class.php';
$db = new DB();

// Fetch the images data
$condition = array('where' => array('status' => 1));
$images = $db->getRows('images', $condition);
?>
<html>
<head>
    <title>Gallery</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="fancybox/jquery.fancybox.js"></script>
    <script>
        $("[data-fancybox]").fancybox();
</script>
</head>
<body>
    <div class="container">
        <h1>Gallery</h1>
        <hr>
        <div

<div class="gallery">
    <?php
    if(!empty($images)){
        foreach($images as $row){
            $uploadDir = 'uploads/images/';
            $imageURL = $uploadDir.$row["file_name"];
    ?>
    <div class="col-lg-3">
        <a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"]; ?>" >
            <img src="<?php echo $imageURL; ?>" alt="" />
            <p><?php echo $row["title"]; ?></p>
        </a>
    </div>
    <?php }
    } ?>
</div>