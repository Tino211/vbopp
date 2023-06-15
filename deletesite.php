<?php
	include('../connect.php');
	$user_id = $_SESSION['user_id'];

	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM sitee WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
	
	header ("location: sites.php");
?>