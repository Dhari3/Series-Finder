<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Edit Show";
	require_once "./template/header.php";
	require_once "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_GET['show_id'])){
		$show_id = $_GET['show_id'];
	} else {
		echo "Empty query!";
		exit;
	}

	if(!isset($show_id)){
		echo "Empty isbn! check again!";
		exit;
	}

	// get book data
	$query = "SELECT * FROM action1 WHERE show_id = '$show_id'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't retrieve data " . mysqli_error($conn);
		exit;
	}
	$row = mysqli_fetch_assoc($result);
?>
	<form method="post" action="edit_action.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Show_id</th>
				<td><input type="text" name="isbn" value="<?php echo $row['show_id'];?>" readOnly="true"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="title" value="<?php echo $row['show_title'];?>" required></td>
			</tr>
			<tr>
				<th>Director</th>
				<td><input type="text" name="author" value="<?php echo $row['show_director'];?>" required></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="url" name="image" value="<?php echo $row['show_img'];?>"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="descr" cols="40" rows="5"><?php echo $row['show_desc'];?></textarea>
			</tr>
			<tr>
				<th>Link</th>
				<td><input type="url" name="price" value="<?php echo $row['show_link'];?>" required></td>
			</tr>
		</table>
		<input type="submit" name="save_change" value="Change" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
	<a href="admin_show.php" class="btn btn-success">Confirm</a>
<?php

	if(isset($conn)) {mysqli_close($conn);}
	require "./template/footer.php"
?>