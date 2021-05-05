<?php
    include('conn.php');
	
	if(ISSET($_REQUEST['trash_id'])){
		$trash_id = $_REQUEST['trash_id'];
		$query=mysqli_query($conn, "SELECT * FROM `trash` WHERE `trash_id` = '$trash_id'") or die(mysqli_error());
        $fetch=mysqli_fetch_array($query);	
        
		mysqli_query($conn, "DELETE FROM `trash` WHERE `trash_id` = '$trash_id'") or die(mysqli_error());

		header('location:trash.php');
	}
    

?>