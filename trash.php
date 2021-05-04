<!DOCTYPE html>
<html>
<head>
	<title>My To Do List</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; "><center><strong>My < To Do >List</strong></center></span>	

		<h5 class="pull-right"><a href="index.php">go the main page</a> </h5>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Task</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `trash`");
				while($fetch=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo ucwords($fetch['tasking']); ?></td>
						
						<td>
							
							
                           <a class="btn btn-success" href="restore.php?trash_id=<?php echo $fetch['trash_id'];?>"><span class="glyphicon glyphicon-reset"></span> Restore</a>
						</td>
					</tr>
					<?php
				}
			?>
			</tbody>
		</table>
	</div>

</div>
</body>
</html>