<?php
	include('conn.php');

	mysqli_query($conn, "TRUNCATE TABLE trash") or die(mysqli_error());

	header('location:trash.php');
  

?>