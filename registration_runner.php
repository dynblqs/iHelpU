
<!DOCTYPE html>
<html lang="en">
<?php

session_start(); 
error_reporting(0); 
include("connection/connect.php"); 
if(isset($_POST['submit'] )) 
{
     if(empty($_POST['firstname']) || 
   	    empty($_POST['lastname'])|| 
		empty($_POST['email']) ||  
		empty($_POST['phone'])||
		empty($_POST['password'])||
		empty($_POST['cpassword']) ||
		empty($_POST['cpassword']))
		{
			$message = "All fields must be Required!";
		}
	else
	{
	
	$check_username= mysqli_query($db, "SELECT username FROM users where username = '".$_POST['username']."' ");
	$check_email = mysqli_query($db, "SELECT email FROM users where email = '".$_POST['email']."' ");
		

	
	if($_POST['password'] != $_POST['cpassword']){  
       	
          echo "<script>alert('Password not match');</script>"; 
    }
	elseif(strlen($_POST['password']) < 6)  
	{
      echo "<script>alert('Password Must be >=6');</script>"; 
	}
	elseif(strlen($_POST['phone']) < 10)  
	{
      echo "<script>alert('Invalid phone number!');</script>"; 
	}

    elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
    {
          echo "<script>alert('Invalid email address please type a valid email!');</script>"; 
    }
	elseif(mysqli_num_rows($check_username) > 0) 
     {
       echo "<script>alert('Username Already exists!');</script>"; 
     }
	elseif(mysqli_num_rows($check_email) > 0) 
     {
       echo "<script>alert('Email Already exists!');</script>"; 
     }
	else{
       
	 
	$mql = "INSERT INTO users(username,f_name,l_name,email,phone,password,matric,faculty,pic,u_category) VALUES('".$_POST['username']."','".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['password']."','".$_POST['matric']."','".$_POST['faculty']."','".$_POST['pic']."','".$_POST['u_category']."')";
	mysqli_query($db, $mql);
	
		 header("refresh:0.1;url=login.php");
    }
	}

}


?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Runner Registration || iHelpU</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>

<body>
    
    <div style=" background-image: url('images/img/pimg.png');">
        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo.png" alt="" width="18%"> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Services <span class="sr-only"></span></a> </li>

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

            <div class="container">
                <ul>


                </ul>
            </div>


            <section class="contact-page inner-page">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-body">


                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="form-group col-sm-12">
                                                <label for="exampleInputEmail1">Runner Name</label>
                                                <input class="form-control" type="text" name="username" id="example-text-input">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">First Name</label>
                                                <input class="form-control" type="text" name="firstname" id="example-text-input">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Last Name</label>
                                                <input class="form-control" type="text" name="lastname" id="example-text-input-2">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Email Address</label>
                                                <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Phone number</label>
                                                <input class="form-control" type="text" name="phone" id="example-tel-input-3">
                                            </div>                               
                    
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Password</label>
                                                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputPassword1">Confirm password</label>
                                                <input type="password" class="form-control" name="cpassword" id="exampleInputPassword2">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Matric Number</label>
                                                <input class="form-control" type="text" name="matricnum" id="example-tel-input-3">
                                            </div>
                                            <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Faculty</label>
                                                <select class="form-control" name="fac" id="example-tel-input-3">
                                                    <option value="faculty1">Fakulti Teknologi & Sains Maklumat</option>
                                                    <option value="faculty2">Fakulti Sains Teknologi</option>
                                                    <option value="faculty3">Fakulti Pengajian Islam</option>
                                                    <option value="faculty1">Fakulti Sains Sosial dan Kemanusiaan</option>
                                                    <option value="faculty2">Fakulti Undang-Undang</option>
                                                    <option value="faculty3">Fakulti Pengajian Islam</option>
                                                    <option value="faculty1">Fakulti Kejuruteraan dan Alam Bina</option>
                                                    <option value="faculty2">Fakulti Pendidikan</option>
                                                    <option value="faculty3">Fakulti Pergigian</option>
                                                    <option value="faculty1">Fakulti Perubatan</option>
                                                    <option value="faculty2">Fakulti Farmasi</option>
                                                    <option value="faculty3">Fakulti Sains Kesihatan</option>
                                                    <option value="faculty1">Fakulti Ekonomi dan Pengurusan</option>
                                                    <option value="faculty2">Pusat Pengajian Siswazah Perniagaan, UKM-GSB</option>
                                                    <option value="faculty3">Pusat Pengajian Citra Universiti</option>
                                                    <!-- Add more options as needed -->
                                                </select>
                                            </div>
                                           <div class="form-group col-sm-6">
                                                <label for="exampleInputEmail1">Picture</label>
                                                <input class="form-control" type="file" name="pic" id="example-tel-input-3">
                                            </div>
                                            

                                        </div>

                                        <style>
                                            .btn.theme-btn {
                                                background-color: #5c96a1; /* Change this color to your desired color */
                                                color: #ffffff; /* Change this color to the text color you want */
                                            }
                                        </style>

                                        
                                        <input type="hidden" name="u_category" value="2">

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <p> <input type="submit" value="Register" name="submit" class="btn theme-btn"> </p>
                                            </div>
                                        </div>

                                        

                                    </form>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </section>


            <?php include "include/footer.php" ?>

        </div>

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