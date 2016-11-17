<?php
/**
 * Created by PhpStorm.
 * User: Pepis
 * Date: 10/11/14
 * Time: 20:55
 */

?>

<!-- Start: Navigation wrapper -->
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a href="index.php" class="brand brand-bootbus">Sleepy</a>
            <!-- Below button used for responsive navigation -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Start: Primary navigation -->
            <div class="nav-collapse collapse">
                <ul class="nav pull-right">
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle active-link" data-toggle="dropdown">Products and Services<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="nav-header">PRODUCTS</li>
                            <li><a href="product.php">Product1</a></li>
                            <li><a href="product.php">Product2</a></li>
                            <li><a href="product.php">Product3</a></li>
                            <li><a href="all_products.php">All products</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">SERVICES</li>
                            <li><a href="service.php">Service1</a></li>
                            <li><a href="service.php">Service2</a></li>
                            <li><a href="service.php">Service3</a></li>
                            <li><a href="all_services.php">All services</a></li>
                        </ul>
                    </li>-->
                    <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="our_works.php">Our works</a></li>
                            <li><a href="patnerships.php">Parnerships</a></li>
                            <li><a href="leadership.php">Leadership</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="events.php">Events</a></li>
                            <li><a href="blog.php">Blog</a></li>
                        </ul>
                    </li>-->
<!--                    <li><a href="faq.php">FAQ</a></li>-->
                    <li><a href="search.php">Search Lodging</a></li>
                    <li><a href="contact_us.php">Contact us</a></li>


                    <!-- If a session has been started... -->
                    <?php
                    if(!ISSET($_SESSION['userId'])){
                    ?>
                    <li><a href="signup.php">Sign up</a></li>
                    <li><a href="signin.php">Sign in</a></li>

                    <?php
                    } else{
                        if($_SESSION['userRole']==1){
                            echo '
                                <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span> '.'Administration'.'<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                             <li><a href="adminUsers.php">Admin users</a></li>
                                             <li><a href="adminLodgings.php">Admin lodgings</a></li>
                                      </ul>
                                </li>
                            ';
                        }
                        echo '
                                <li class="dropdown">
                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> '.$_SESSION['userName'].'<b class="caret"></b></a>
                                      <ul class="dropdown-menu">
                                             <li><a href="profile.php">Profile</a></li>
                                             <li><a href="myLodgings.php">My lodgings</a></li>
                                             <hr/>
                                             <li><a href="utilsPHP/actions/logout.php">Logout</a></li>
                                      </ul>
                                </li>
                               ';
                    }
                    ?>

                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End: Navigation wrapper -->