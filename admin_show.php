<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "List book";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();
	$result1 = getAction($conn);
	$result2 = getHorror($conn);
	$result3 = getComedy($conn);
	$result4 = getRomantic($conn);
?>
	<div class="lead">
	<a href="admin_add_action.php" class="btn btn-primary">Add Action</a>
	<a href="admin_add_comedy.php" class="btn btn-primary">Add Comedy</a>
	<a href="admin_add_romantic.php" class="btn btn-primary">Add Romantic</a>
	<a href="admin_add_horror.php" class="btn btn-primary">Add Horror</a>
	</div>

	
	<table class="table" style="margin-top: 20px">
		<tr>
			<th>Show_ID</th>
			<th>Title</th>
			<th>Director</th>
			<th>Image</th>
			<th>Description</th>
			<th>Link</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<?php while($row = mysqli_fetch_assoc($result1)){ ?>
		<tr>
			<td><?php echo $row['show_id']; ?></td>
			<td><?php echo $row['show_title']; ?></td>
			<td><?php echo $row['show_director']; ?></td>
			<td><?php echo $row['show_img']; ?></td>
			<td><?php echo $row['show_desc']; ?></td>
			<td><?php echo $row['show_link']; ?></td>
			<td><a href="admin_edit_action.php?show_id=<?php echo $row['show_id']; ?>">Edit</a></td>
			<td><a href="admin_delete_action.php?show_id=<?php echo $row['show_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
		<?php while($row = mysqli_fetch_assoc($result2)){ ?>
		<tr>
			<td><?php echo $row['show_id']; ?></td>
			<td><?php echo $row['show_title']; ?></td>
			<td><?php echo $row['show_director']; ?></td>
			<td><?php echo $row['show_img']; ?></td>
			<td><?php echo $row['show_desc']; ?></td>
			<td><?php echo $row['show_link']; ?></td>
			<td><a href="admin_edit_horror.php?show_id=<?php echo $row['show_id']; ?>">Edit</a></td>
			<td><a href="admin_delete_horror.php?show_id=<?php echo $row['show_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
		<?php while($row = mysqli_fetch_assoc($result3)){ ?>
		<tr>
			<td><?php echo $row['show_id']; ?></td>
			<td><?php echo $row['show_title']; ?></td>
			<td><?php echo $row['show_director']; ?></td>
			<td><?php echo $row['show_img']; ?></td>
			<td><?php echo $row['show_desc']; ?></td>
			<td><?php echo $row['show_link']; ?></td>
			<td><a href="admin_edit_comedy.php?show_id=<?php echo $row['show_id']; ?>">Edit</a></td>
			<td><a href="admin_delete_comedy.php?show_id=<?php echo $row['show_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
		<?php while($row = mysqli_fetch_assoc($result4)){ ?>
		<tr>
			<td><?php echo $row['show_id']; ?></td>
			<td><?php echo $row['show_title']; ?></td>
			<td><?php echo $row['show_director']; ?></td>
			<td><?php echo $row['show_img']; ?></td>
			<td><?php echo $row['show_desc']; ?></td>
			<td><?php echo $row['show_link']; ?></td>
			<td><a href="admin_edit_romantic.php?show_id=<?php echo $row['show_id']; ?>">Edit</a></td>
			<td><a href="admin_delete_romantic.php?show_id=<?php echo $row['show_id']; ?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>
	<a href="admin_signout.php" class="btn btn-primary">Sign out!</a>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>