
<?php
  session_start();
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();
?>
<?php 
     if(isset($_POST['submit'])){
      $rate=trim($_POST['rate']);
      $commts=trim($_POST['commts']);
      $like=trim($_POST['like_dislike']);
      $show_id=trim($_POST['id']);
      $q="INSERT INTO review values('" . $show_id . "','" . $like . "','" . $rate . "','" . $commts . "')";
      $result1 = mysqli_query($conn, $q);
          if(!$result1){
            echo "Can't add new data " . mysqli_error($conn);
            exit;
          } else {
            header("Location: thank.php");
          }
      
      }
    ?>