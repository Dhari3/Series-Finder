<?php
	function db_connect(){
		$conn = mysqli_connect("localhost", "root", "", "shows");
		if(!$conn){
			echo "Can't connect database " . mysqli_connect_error($conn);
			exit;
		}
		return $conn;
	}



	// function getBookByIsbn($conn, $isbn){
	// 	$query = "SELECT book_title, book_author, book_price FROM books WHERE book_isbn = '$isbn'";
	// 	$result = mysqli_query($conn, $query);
	// 	if(!$result){
	// 		echo "Can't retrieve data " . mysqli_error($conn);
	// 		exit;
	// 	}
	// 	return $result;
	// }




	// function getbookprice($isbn){
	// 	$conn = db_connect();
	// 	$query = "SELECT book_price FROM books WHERE book_isbn = '$isbn'";
	// 	$result = mysqli_query($conn, $query);
	// 	if(!$result){
	// 		echo "get book price failed! " . mysqli_error($conn);
	// 		exit;
	// 	}
	// 	$row = mysqli_fetch_assoc($result);
	// 	return $row['book_price'];
	// }




	function getAction($conn){
		$query = "SELECT * from action1 ORDER BY show_id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
	function getHorror($conn){
		$query = "SELECT * from horror ORDER BY show_id DESC";
		$result = mysqli_query($conn, $query);
		if(!$result){
			echo "Can't retrieve data " . mysqli_error($conn);
			exit;
		}
		return $result;
	}
	function getRomantic($conn){
				$query = "SELECT * from romantic ORDER BY show_id DESC";
				$result = mysqli_query($conn, $query);
				if(!$result){
					echo "Can't retrieve data " . mysqli_error($conn);
					exit;
				}
				return $result;
			}
	function getComedy($conn){
					$query = "SELECT * from comedy ORDER BY show_id DESC";
					$result = mysqli_query($conn, $query);
					if(!$result){
						echo "Can't retrieve data " . mysqli_error($conn);
						exit;
					}
		return $result;
	}
?>