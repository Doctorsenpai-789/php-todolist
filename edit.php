<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$tasking=$_POST['tasking'];
	
	mysqli_query($conn,"update user set tasking='$tasking' where userid='$id'");
	header('location:index.php');

?>