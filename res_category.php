<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Services</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>

<body>

    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo_iHelpU.png" alt="" height="60"> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="res_category.php">Services <span class="sr-only">(current)</span></a> </li>

                        <?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{
									
									
										echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="page-wrapper">
        <div class="top-links">
            <div class="container">
                <ul class="row links">
                    <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#">Choose Service</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Choose Vendor</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Order</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>4</span><a href="#">Choose Runner</a></li>
                    <li class="col-xs-12 col-sm-4 link-item"><span>5</span><a href="#">Pay</a></li>
                </ul>
            </div>
        </div>
        <div class="inner-page-hero bg-image" data-image-src="images/img/pimg.png">
            <div class="container"> </div>
        </div>
        <div class="result-show">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
    

        <section class="service">
        <div class="container">
            <div class="title text-xs-center m-b-30" id="service">
                <h2> Our Services </h2>
                <p class="lead">Your Daily To-Dos, Simplified. Explore iHelpU Services for a Smoother University Life</p>
            </div>
            <div class="row">
               

                <?php                   
                        $query_res= mysqli_query($db,"select * from res_category where c_id='1'"); 
                                while($r=mysqli_fetch_array($query_res))
                                {
                                        
                                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/res_category/'.$r['img'].'"></div>
                                                <div class="content">
                                                    <h5><a href="restaurants.php?res_id='.$r['rs_id'].'">'.$r['c_name'].'</a></h5>
                                                    <div class="product-name">'.$r['slogan'].'</div>
                                                    <div class="price-btn-block"> <span class="price">'.$r['price'].'</span> <a href="restaurants.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';                                      
                                }   
                        ?>
                        <?php                   
                        $query_res= mysqli_query($db,"select * from res_category where c_id='2'"); 
                                while($r=mysqli_fetch_array($query_res))
                                {
                                        
                                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/res_category/'.$r['img'].'"></div>
                                                <div class="content">
                                                    <h5><a href="parcel.php?res_id='.$r['rs_id'].'">'.$r['c_name'].'</a></h5>
                                                    <div class="product-name">'.$r['slogan'].'</div>
                                                    <div class="price-btn-block"> <span class="price">'.$r['price'].'</span> <a href="parcel.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';                                      
                                }   
                        ?>
                        <?php                   
                        $query_res= mysqli_query($db,"select * from res_category where c_id='3'"); 
                                while($r=mysqli_fetch_array($query_res))
                                {
                                        
                                    echo '  <div class="col-xs-12 col-sm-6 col-md-4 food-item">
                                            <div class="food-item-wrap">
                                                <div class="figure-wrap bg-image" data-image-src="admin/Res_img/res_category/'.$r['img'].'"></div>
                                                <div class="content">
                                                    <h5><a href="doc.php?res_id='.$r['rs_id'].'">'.$r['c_name'].'</a></h5>
                                                    <div class="product-name">'.$r['slogan'].'</div>
                                                    <div class="price-btn-block"> <span class="price">'.$r['price'].'</span> <a href="doc.php?res_id='.$r['rs_id'].'" class="btn theme-btn-dash pull-right">Order now</a> </div>
                                                </div>
                                                
                                            </div>
                                    </div>';                                      
                                }   
                        ?>
            </div>
        </div>
            </div>
        </div>
    </section>

    <?php include "include/footer.php" ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
</html>