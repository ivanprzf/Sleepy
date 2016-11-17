<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sleepy | Lodgings for pass the night">
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
      <div class="container">
        <div class="page-header">
          <h1>Contact us</h1>
        </div>
        <div class="row-fluid">
          <!-- Start: CONTACT US FORM -->
          <div class="span4 offset1">
            <div class="page-header">
              <h2>Quick message</h2>
            </div>
            <form class="form-contact-us">
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="text" id="inputEmail" placeholder="Email">
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <textarea id="inputMessage" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="control-group">
                <div class="controls">
                  <input type="submit" class="btn btn-primary btn-large" value="Send">
                </div>
              </div>
            </form>
          </div>
          <!-- End: CONTACT US FORM -->
          <!-- Start: OFFICES -->
          <div class="span5 offset1">
            <h3>Europe</h3>
            <div>
              <address class="pull-left">
                <strong>Sleepy, Inc.</strong><br>
                Calle falsa, 123<br>
                A Coru&ntilde;a<br>
              </address>
              <div class="pull-right">
                <div class="bottom-space">
                  <i class="fa fa-phone icon-large"></i> +34(981) 12-34-56
                </div>
                <a href="mailto:contact@sleepy.com" class="contact-mail">
                  <i class="fa fa-envelope icon-large"></i>
                </a> contact@sleepy.com
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End: OFFICES -->
        </div>
      </div>
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