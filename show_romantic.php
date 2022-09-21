<?php
  session_start();
  $show_id = $_GET['show_id'];
  // connecto database
  require_once "./functions/database_functions.php";
  $conn = db_connect();

  $query = "SELECT * FROM romantic WHERE show_id = '$show_id'";
  $result = mysqli_query($conn, $query);
  if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  if(!$row){
    echo "Empty book";
    exit;
  }

  $title = $row['show_title'];
  require "./template/header.php";




?>
      <!-- Example row of columns -->
      <p class="lead" style="margin: 25px 0"><a href="shows.php">Shows</a> > <?php echo $row['show_title']; ?></p>
      <div class="row">
        <div class="col-md-3 text-center">
          <img class="img-responsive img-thumbnail" src="<?php echo $row['show_img']; ?>">
        </div>
        <div class="col-md-6">
          <h4>Description</h4>
          <p><?php echo $row['show_desc']; ?></p> 
          <a style="margin-top:10px;" href="<?php echo $row['show_link']; ?>" class="btn btn-primary">VIEW</a>
          <h4>Show Details</h4>
          <table class="table">
          	<?php foreach($row as $key => $value){
              if($key == "show_desc" || $key == "show_img" || $key == "show_title" || $key =="show_link"){
                continue;
              }
              switch($key){
                case "show_id":
                  $key = "ID";
                  break;
                case "show_title":
                  $key = "Title";
                  break;
                case "show_director":
                  $key = "Director";
                  break;
              }
            ?>
            <tr>
              <td><?php echo $key; ?></td>
              <td><?php echo $value; ?></td>
            </tr>
            <?php 
              } 
              if(isset($conn)) {mysqli_close($conn); }
            ?>
          </table>
       	</div>
      </div>


          <div style="margin-top:10px;"> 
          <form method="post" action="add_rate.php">
          <input name="id" value="<?php echo $row['show_id'];?>" hidden>
          <label>Rating :</label>
          <input name="rate" type="number" max="5" min="0" placeholder="0"><br>
          <label>Like</label>
          <input name="like_dislike" type="radio" value="like">&nbsp;&nbsp;
          <label>Dislike</label>
          <input name="like_dislike" type="radio" value="dislike">
          <br>
          <textarea style="margin-top:10px;" name="commts" cols="40" rows="5" placeholder="your comments"></textarea><br>
          <input type="submit" name="submit" class="btn btn-primary">
          </form>
          </div>
<?php
  require "./template/footer.php";
?>