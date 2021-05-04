<?php
	include('conn.php');
	
	$tasking=$_POST['tasking'];
	
	mysqli_query($conn,"insert into user (tasking) values ('$tasking')");
	header('location:index.php');
?>