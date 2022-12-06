<?php
// database connection
require_once('connect.php');

// check for primary id of the record-set in url
if(isset($_GET['id'])){

	// retrieve id from url
	$id = (int)$_GET['id'];

	// sql delete query
	$query = "DELETE FROM user_info WHERE id =" . $id;
}else{
	echo 'No id set';
}

//query execution
$result = mysqli_query($connect,$query);

//display message to user 
if($result){
	$_SESSION['success_message'] = 'User data deleted successfully';
	header('Location: insert.php');
}else{
	$_SESSION['error_message'] = 'User data couldn\'t be deleted';
	header('Location: insert.php');
}	