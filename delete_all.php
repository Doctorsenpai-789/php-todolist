<?php
	include('conn.php');
	// $id=$_GET['id'];

	mysqli_query($conn, "TRUNCATE TABLE trash") or die(mysqli_error());
//	mysqli_query($conn,"DELETE FROM `user` WHERE `userid`='$id'");
	header('location:trash.php');
  

?>