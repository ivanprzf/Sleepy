<?php
require_once('dao/SqlUserDAO.php');
require_once('vo/UserVO.php');


//$mysqli=openConnection();


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Sleepy | Give unique title of the page here</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support --> 
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">

      <script type="text/javascript">
          function valida(f) {
              var ok = true;
              var msg = "You must complete all the fields:\n";
              if(f.email.value == "")
              {
                  msg += "- Email\n";
                  ok = false;
              }
              if(f.password.value == "")
              {
                  msg += "- Password\n";
                  ok = false;
              }
              if(f.password_confirmation.value == "")
              {
                  msg += "- Confirm password\n";
                  ok = false;
              }
              if(f.firstName.value == "")
              {
                  msg += "- First name\n";
                  ok = false;
              }
              if(f.lastName.value == "")
              {
                  msg += "- Last name\n";
                  ok = false;
              }
              if(f.phone1.value == "")
              {
                  msg += "- Phone 1\n";
                  ok = false;
              }
              if(f.birthDate.value == "")
              {
                  msg += "- Birth date\n";
                  ok = false;
              }

              if(ok == false)
                  alert(msg);
              return ok;
          }
      </script>

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
          <h1>Signup to Sleepy</h1>
        </div>
        <div class="row">
          <div class="span6 offset3">
            <h4 class="widget-header"><i class="fa fa-gift"></i> Join Sleepy</h4>
            <div class="widget-body">
              <div class="center-align">
                  <!-- If signup button has been clicked... -->
                  <?php
                  if(ISSET($_POST['signup'])) {
                      include 'utilsPHP/actions/addUser.php';
                  }
                  else{
                      include 'utilsPHP/signUp.php';
                  }
                  ?>
              </div>
            </div>
          </div>
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