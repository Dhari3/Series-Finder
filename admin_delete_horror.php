<?php
	$showid = $_GET['show_id'];

	require_once "./functions/database_functions.php";
	$conn = db_connect();

	$query = "DELETE FROM horror WHERE show_id = '$showid'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		echo "delete data unsuccessfully " . mysqli_error($conn);
		exit;
	}
	header("Location: admin_show.php");
?>