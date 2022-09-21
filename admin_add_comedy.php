<?php
	session_start();
	require_once "./functions/admin.php";
	$title = "Add new show";
	require "./template/header.php";
	require "./functions/database_functions.php";
	$conn = db_connect();

	if(isset($_POST['add'])){
		$isbn = trim($_POST['id']);
		$isbn = mysqli_real_escape_string($conn, $isbn);
		
		$title = trim($_POST['show_title']);
		$title = mysqli_real_escape_string($conn, $title);

		$author = trim($_POST['show_director']);
		$author = mysqli_real_escape_string($conn, $author);
		
		$descr = trim($_POST['show_desc']);
		$descr = mysqli_real_escape_string($conn, $descr);
		
		$price = trim($_POST['show_link']);
		$price = mysqli_real_escape_string($conn, $price);
		
		$image = trim($_POST['show_img']);
		$image = mysqli_real_escape_string($conn, $image);

		// find publisher and return pubid
		// if publisher is not in db, create new
		// $findPub = "SELECT * FROM publisher WHERE publisher_name = '$publisher'";
		// $findResult = mysqli_query($conn, $findPub);
		// if(!$findResult){
		// 	// insert into publisher table and return id
		// 	$insertPub = "INSERT INTO publisher(publisher_name) VALUES ('$publisher')";
		// 	$insertResult = mysqli_query($conn, $insertPub);
		// 	if(!$insertResult){
		// 		echo "Can't add new publisher " . mysqli_error($conn);
		// 		exit;
		// 	}
		// 	$publisherid = mysql_insert_id($conn);
		// } else {
		// 	$row = mysqli_fetch_assoc($findResult);
		// 	$publisherid = $row['publisherid'];
		// }


		$query = "INSERT INTO comedy VALUES ('" . $isbn . "', '" . $title . "', '" . $author . "', '" . $image . "', '" . $descr . "', '" . $price . "')";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't add new data " . mysqli_error($conn);
			exit;
		} else {
			header("Location: admin_show.php");
		}
	}
?>
	<form method="post" action="admin_add_comedy.php" enctype="multipart/form-data">
		<table class="table">
			<tr>
				<th>Show_id</th>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<th>Title</th>
				<td><input type="text" name="show_title" required></td>
			</tr>
			<tr>
				<th>Director</th>
				<td><input type="text" name="show_director" ></td>
			</tr>
			<tr>
				<th>Image</th>
				<td><input type="url" name="show_img"></td>
			</tr>
			<tr>
				<th>Description</th>
				<td><textarea name="show_desc" cols="40" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>Link</th>
				<td><input type="url" name="show_link" required></td>
			</tr>
		</table>
		<input type="submit" name="add" value="Add new show" class="btn btn-primary">
		<input type="reset" value="cancel" class="btn btn-default">
	</form>
	<br/>
<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>