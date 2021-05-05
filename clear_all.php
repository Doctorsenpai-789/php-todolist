<?php
	include('conn.php');

	mysqli_query($conn, "TRUNCATE TABLE user") or die(mysqli_error());

	header('location:index.php');
  

?>