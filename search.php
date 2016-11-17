<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 10/12/14
 * Time: 20:31
 */
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8_spanish_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sleepy | Lodgings">
    <meta name="author" content="Your name">
    <title>Sleepy | Search Lodging</title>
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
<!-- Start: Main content -->
<div class="content">
    <div class="container">
        <div class="page-header">
            <h1>Search for a lodging</h1>
        </div>
        <div class="row">
            <!--            <div class="span6 offset3">-->
            <div class="span10 offset1">
                <h3 class="widget-header"><i class="fa fa-user"></i> User Profile</h3>
                <div class="widget-body">
                    <div class="center-align">
                        <!-- If edit button has been clicked... -->
                        <?php
                        if(!ISSET($_POST['search']))
                            include 'utilsPHP/searcher.php';
                        else
                            include 'utilsPHP/searcherResult.php';
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
