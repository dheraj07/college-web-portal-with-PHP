<?php
require 'connection.php';
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = $_GET['id'];

	$sql = "DELETE FROM notice WHERE id = ?";
	if($stmt=$conn->prepare($sql)){
		$stmt->bind_param("i",$p_id);
		$p_id = $id;

		if($stmt->execute()){
			header("location: removeNotices.php");
			exit();
		}
	}
	$stmt->close();
	$stmt->close();
}

?>