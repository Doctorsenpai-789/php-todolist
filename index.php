<!DOCTYPE html>
<html>
<head>
	<title>My To Do List</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  
    <script>

    // Add a "checked" symbol when clicking on a list item
    $(function(){
      var $curParent, Content;
      $(document).delegate("td.task","click", function(){
        if($(this).closest("s").length) {
          Content = $(this).parent("s").html();
          $curParent = $(this).closest("s");
          $(Content).insertAfter($curParent);
          $(this).closest("s").remove();
        }
        else {
          $(this).wrapAll("<s />");
        }
      });
    });
</script>
<body>
<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; "><center><strong>My < To Do >List</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Add Task</a></span>
		<h5 class="pull-right"><a href="trash.php"> <i class="fa fa-trash" aria-hidden="true"></i> trash bin</a> </h5>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Task</th>
			
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `user`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td class="task"><?php echo ucwords($row['tasking']); ?></td>
						
						<td>
							<a href="#edit<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['userid']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>