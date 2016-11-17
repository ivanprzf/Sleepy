<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 26/11/14
 * Time: 21:06
 */
session_start();

require_once('dao/SqlUserDAO.php');
require_once('vo/UserVO.php');
require_once "utils/config.php";
if(ISSET($_SESSION['userId']))
    include "utilsPHP/actions/profileUser.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootbusiness | Short description about company">
    <meta name="author" content="Your name">
    <title>Sleepy | User Profile - Change Password</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap responsive -->
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <!-- Font awesome - iconic font with IE7 support -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome-ie7.css" rel="stylesheet">
    <!-- Bootbusiness theme -->
    <link href="css/boot-business.css" rel="stylesheet">

    <script>

        function valida(f) {
            var ok = true;
            var msg = "You must complete all the fields:\n";
            if(f.password.value == "")
            {
                msg += "- Password\n";
                ok = false;
            }
            if(f.newPassword.value == "")
            {
                msg += "- New password\n";
                ok = false;
            }
            if(f.repeatNewPassword.value == "")
            {
                msg += "- Repeat new password\n";
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
<!-- Start: Main content -->
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>User Profile</h1>
        </div>
        <div class="row">
            <!--            <div class="span6 offset3">-->
            <div class="span6 offset3">
                <h3 class="widget-header"><i class="icon-user"></i> User Profile</h3>
                <div class="widget-body">
                    <div class="center-align">
                        <!-- If confirm button has been clicked... -->
                        <?php
                        if(ISSET($_SESSION['userId'])){
                            if(ISSET($_POST['confirm'])) {
                                include 'utilsPHP/actions/editPassword.php';
                            }
                            else{
                                include 'utilsPHP/userEditPassword.php';
                            }
                        }
                        else
                            echo "You are not authorized.";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End: Main content -->
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
