<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Series Finder</a>
        </div>

        <!--/.navbar-collapse -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <!-- link to publiser_list.php -->
              <li><a href="comedy.php"><span class="glyphicon glyphicon-film"></span>&nbsp;Comedy</a></li>
              <!-- link to books.php -->
              <li><a href="action.php"><span class="glyphicon glyphicon-film"></span>&nbsp; Action</a></li>
              <!-- link to contacts.php -->
              <li><a href="romantic.php"><span class="glyphicon glyphicon-film"></span>&nbsp; Romantic</a></li>
              <!-- link to shopping cart -->
              <li><a href="horror.php"><span class="glyphicon glyphicon-film"></span>&nbsp; Horror</a></li>
            </ul>
        </div>
      </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Welcome to online Series Finder</h1>
        <p class="lead">This site has been made using PHP with MYSQL!</p>
        <p>It's just a simple web!</p>
      </div>
    </div>
    <?php } ?>

    <div class="container" id="main">