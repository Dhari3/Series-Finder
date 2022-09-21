<?php
  session_start();
  $count = 0;
  // connecto database
  
  $title = "Index";
  require_once "./template/header.php";
  require_once "./functions/database_functions.php";
  $conn = db_connect();

		$query1 = "SELECT show_id FROM review where show_id like 'C%' Order by rating DESC";
    $query2 = "SELECT show_id FROM review where show_id like 'A%' Order by rating DESC";
    $query3 = "SELECT show_id FROM review where show_id like 'R%' Order by rating DESC";
    $query4 = "SELECT show_id FROM review where show_id like 'H%' Order by rating DESC";

		$result2 = mysqli_query($conn, $query2);
		if(!$result2){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
    $row2 = mysqli_fetch_assoc($result2);
    if(!$row2){
      echo "Empty show";
      exit;
    }
  
    $show_id2 = $row2['show_id'];


  $q2="SELECT * from action1 where show_id='$show_id2'";
  $result2 = mysqli_query($conn, $q2);
		if(!$result2){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}



    $result1 = mysqli_query($conn, $query1);
		if(!$result1){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
    $row1 = mysqli_fetch_assoc($result1);
    if(!$row1){
      echo "Empty show";
      exit;
    }
  
    $show_id1 = $row1['show_id'];


  $q1="SELECT * from Comedy where show_id='$show_id1'";
  $result1 = mysqli_query($conn, $q1);
		if(!$result1){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}






    $result3= mysqli_query($conn, $query3);
		if(!$result3){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
    $row3 = mysqli_fetch_assoc($result3);
    if(!$row3){
      echo "Empty show";
      exit;
    }
  
    $show_id3 = $row3['show_id'];


  $q3="SELECT * from romantic where show_id='$show_id3'";
  $result3 = mysqli_query($conn, $q3);
		if(!$result3){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}





    $result4 = mysqli_query($conn, $query4);
		if(!$result4){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
    $row4 = mysqli_fetch_assoc($result4);
    if(!$row4){
      echo "Empty show";
      exit;
    }
  
    $show_id4 = $row4['show_id'];


  $q4="SELECT * from horror where show_id='$show_id4'";
  $result4 = mysqli_query($conn, $q4);
		if(!$result4){
		    echo "Can't retrieve data " . mysqli_error($conn);
		    exit;
		}
?>

      <!-- Example row of columns --> 
      <p class="lead text-center text-muted">Top Shows</p>
      <div class="row">
      <?php while($query_row = mysqli_fetch_assoc($result1)){ ?>
          <div class="col-md-3">
            <a href="show_comedy.php?show_id=<?php echo $query_row['show_id']; ?>">
              <img class="img-responsive img-thumbnail" alt="img 1" src="<?php echo $query_row['show_img'];?>">
            </a>
          </div>
        <?php } ?>

        <?php while($query_row = mysqli_fetch_assoc($result2)){ ?>
          <div class="col-md-3">
            <a href="show_action.php?show_id=<?php echo $query_row['show_id']; ?>">
              <img class="img-responsive img-thumbnail" alt="img 1" src="<?php echo $query_row['show_img'];?>">
            </a>
          </div>
        <?php } ?>

        <?php while($query_row = mysqli_fetch_assoc($result3)){ ?>
          <div class="col-md-3">
            <a href="show_romantic.php?show_id=<?php echo $query_row['show_id']; ?>">
              <img class="img-responsive img-thumbnail" alt="img 1" src="<?php echo $query_row['show_img'];?>">
            </a>
          </div>
        <?php } ?>

        <?php while($query_row = mysqli_fetch_assoc($result4)){ ?>
          <div class="col-md-3">
            <a href="show_horror.php?show_id=<?php echo $query_row['show_id']; ?>">
              <img class="img-responsive img-thumbnail" alt="img 1" src="<?php echo $query_row['show_img'];?>">
            </a>
          </div>
        <?php } ?>
      </div>

      
<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>