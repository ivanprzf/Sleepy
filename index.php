<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sleepy | Sleep Everywhere">
    <meta name="author" content="Your name">
    <title>Sleepy | Sleep Everywhere</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">
  </head>
  <body>
    <!-- Start: HEADER -->
    <header>
        <?php
        include 'utilsPHP/header.php'
        ?>
    </header>
    <!-- End: HEADER -->
    <!-- Start: MAIN CONTENT -->
    <div class="content">
      <!-- Start: LODGING LIST -->
        <div class="container">
          <div class="page-header">
            <h2>Random Lodgings</h2>
          </div>
            <?php include 'utilsPHP/indexRandomContent.php' ?>
        </div>
      <!-- End: LODGING LIST -->
    </div>
    <!-- End: MAIN CONTENT -->
    <!-- Start: FOOTER -->
    <footer>
        <?php
        include 'utilsPHP/footer.php';
        ?>
    </footer>
    <!-- End: FOOTER -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/boot-business.js"></script>
  </body>
</html>
