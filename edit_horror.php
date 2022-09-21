<?php	
	// if save change happen
	if(!isset($_POST['save_change'])){
		echo "Something wrong!";
		exit;
	}

	$isbn = trim($_POST['isbn']);
	$title = trim($_POST['title']);
	$author = trim($_POST['author']);
	$descr = trim($_POST['descr']);
	$price = trim($_POST['price']);
	$image = trim($_POST['image']);

	require_once("./functions/database_functions.php");
	$conn = db_connect();


	$query = "UPDATE horror SET  
	show_title = '$title', 
	show_director = '$author', 
	show_desc = '$descr', 
	show_link = '$price'";
	if(isset($image)){
		$query .= ", show_img='$image' WHERE show_id = '$isbn'";
	} else {
		$query .= " WHERE show_id = '$isbn'";
	}
	// two cases for fie , if file submit is on => change a lot
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "Can't update data " . mysqli_error($conn);
		exit;
	} else {
		header("Location: admin_edit_horror.php?show_id=$isbn");
	}
?>