
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
    <title>Home || iHelpU</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="images/icon.ico">
</head>

<body class="home">

    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/logo_iHelpU.png" alt="" height="60"> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="#service">Services <span class="sr-only">(current)</span></a> </li>
                    

                        <?php
						if(empty($_SESSION["user_id"])) // if user is not login
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
    

    <section class="hero bg-image" data-image-src="images/img/pimg.png">
        <div class="hero-inner">
            <div class="container text-center hero-text font-white">
                <h1>Welcome to IHelpU</h1>

                <div class="banner-form">
                    <form class="form-inline">

                    </form>
                </div>
                <div class="steps">
                    <div class="step-item step1">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#394240" d="M56,48c-3.313,0-6-2.687-6-6V22c0-8.577-6.004-15.74-14.035-17.548C35.984,4.304,36,4.154,36,4
        c0-2.209-1.791-4-4-4s-4,1.791-4,4c0,0.154,0.016,0.304,0.035,0.452C20.004,6.26,14,13.423,14,22v20c0,3.313-2.687,6-6,6
        c-2.209,0-4,1.791-4,4s1.791,4,4,4h16c0,4.418,3.582,8,8,8s8-3.582,8-8h16c2.209,0,4-1.791,4-4S58.209,48,56,48z M32,2
        c1.104,0,2,0.896,2,2c0,0.04-0.014,0.075-0.017,0.115C33.332,4.043,32.671,4,32,4s-1.332,0.043-1.983,0.115
        C30.014,4.075,30,4.04,30,4C30,2.896,30.896,2,32,2z M16,22c0-8.837,7.163-16,16-16s16,7.163,16,16v12H16V22z M16,36h32v4H16V36z
         M32,62c-3.313,0-6-2.687-6-6h12C38,59.313,35.313,62,32,62z M56,54H8c-1.104,0-2-0.896-2-2s0.896-2,2-2c4.418,0,8-3.582,8-8h32
        c0,4.418,3.582,8,8,8c1.104,0,2,0.896,2,2S57.104,54,56,54z"/>
    <path fill="#506C7F" d="M32,2c1.104,0,2,0.896,2,2c0,0.04-0.014,0.075-0.017,0.115C33.332,4.043,32.671,4,32,4
        s-1.332,0.043-1.983,0.115C30.014,4.075,30,4.04,30,4C30,2.896,30.896,2,32,2z"/>
    <path fill="#F76D57" d="M16,22c0-8.837,7.163-16,16-16s16,7.163,16,16v12H16V22z"/>
    <rect x="16" y="36" fill="#F9EBB2" width="32" height="4"/>
    <path fill="#B4CCB9" d="M32,62c-3.313,0-6-2.687-6-6h12C38,59.313,35.313,62,32,62z"/>
    <path fill="#F76D57" d="M56,54H8c-1.104,0-2-0.896-2-2s0.896-2,2-2c4.418,0,8-3.582,8-8h32c0,4.418,3.582,8,8,8
        c1.104,0,2,0.896,2,2S57.104,54,56,54z"/>
</g>
</svg>
                        <h4><span style="color:white;">1. </span>Choose Service</h4>
                    </div>

                    <div class="step-item step2">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <g>
        <path fill="#F76D57" d="M43,2v22c0,2.209,1.791,4,4,4s4-1.791,4-4V2H43z"/>
        <path fill="#F76D57" d="M23,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#F76D57" d="M3,4v20c0,2.209,1.791,4,4,4s4-1.791,4-4V2H5C3.896,2,3,2.895,3,4z"/>
    </g>
    <path fill="#F9EBB2" d="M58,60c0,1.104-0.896,2-2,2H26V37c0-0.516-0.447-1-1-1H11c-0.553,0-1,0.447-1,1v25H8c-1.104,0-2-0.896-2-2
        V29.91C6.326,29.965,6.658,30,7,30c2.088,0,3.926-1.068,5-2.688C13.074,28.932,14.912,30,17,30s3.926-1.068,5-2.688
        C23.074,28.932,24.912,30,27,30s3.926-1.068,5-2.688C33.074,28.932,34.912,30,37,30s3.926-1.068,5-2.688
        C43.074,28.932,44.912,30,47,30s3.926-1.068,5-2.688C53.074,28.932,54.912,30,57,30c0.342,0,0.674-0.035,1-0.09V60z"/>
    <g>
        <path fill="#B4CCB9" d="M33,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#B4CCB9" d="M13,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#B4CCB9" d="M59,2h-6v22c0,2.209,1.791,4,4,4s4-1.791,4-4V4C61,2.895,60.104,2,59,2z"/>
    </g>
    <path fill="#394240" d="M59,0H5C2.789,0,1,1.789,1,4v20c0,2.219,1.208,4.152,3,5.189V60c0,2.211,1.789,4,4,4h48
        c2.211,0,4-1.789,4-4V29.189c1.792-1.037,3-2.971,3-5.189V4C63,1.789,61.211,0,59,0z M51,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2
        H51z M41,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H41z M31,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H31z M21,2v22
        c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H21z M3,4c0-1.105,0.896-2,2-2h6v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V4z M12,62V38h12v10h-1
        c-0.553,0-1,0.447-1,1s0.447,1,1,1h1v12H12z M58,60c0,1.104-0.896,2-2,2H26V37c0-0.516-0.447-1-1-1H11c-0.553,0-1,0.447-1,1v25H8
        c-1.104,0-2-0.896-2-2V29.91C6.326,29.965,6.658,30,7,30c2.088,0,3.926-1.068,5-2.688C13.074,28.932,14.912,30,17,30
        s3.926-1.068,5-2.688C23.074,28.932,24.912,30,27,30s3.926-1.068,5-2.688C33.074,28.932,34.912,30,37,30s3.926-1.068,5-2.688
        C43.074,28.932,44.912,30,47,30s3.926-1.068,5-2.688C53.074,28.932,54.912,30,57,30c0.342,0,0.674-0.035,1-0.09V60z M57,28
        c-2.209,0-4-1.791-4-4V2h6c1.104,0,2,0.895,2,2v20C61,26.209,59.209,28,57,28z"/>
    <path fill="#394240" d="M53,36H29c-0.553,0-1,0.447-1,1v20c0,0.553,0.447,1,1,1h24c0.553,0,1-0.447,1-1V37
        C54,36.447,53.553,36,53,36z M52,56H30V38h22V56z"/>
    <g>
        <path fill="#45AAB8" d="M12,62h12V50h-1c-0.553,0-1-0.447-1-1s0.447-1,1-1h1V38H12V62z"/>
        <rect x="30" y="38" fill="#45AAB8" width="22" height="18"/>
    </g>
    <path fill="#394240" d="M48.293,42.707C48.488,42.902,48.744,43,49,43s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
        l-1-1c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L48.293,42.707z"/>
    <path fill="#394240" d="M48.293,47.707C48.488,47.902,48.744,48,49,48s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
        l-6-6c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L48.293,47.707z"/>
</g>
</svg>
                        <h4><span style="color:white;">2. </span>Choose Vendor</h4>
                    </div>

                    <div class="step-item step3">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#F9EBB2" d="M22,12c0-5.523,4.478-10,10-10s10,4.477,10,10v12h-2V12c0-4.418-3.582-8-8-8s-8,3.582-8,8v12h-2V12z"/>
    <g>
        <path fill="#45AAB8" d="M10,60c0,1.104,0.896,2,2,2h40c1.104,0,2-0.896,2-2v-2H10V60z"/>
        <path fill="#45AAB8" d="M53,22h-9v3c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1v-3H26v3c0,0.553-0.447,1-1,1h-4
            c-0.553,0-1-0.447-1-1v-3h-9c-0.553,0-1,0.447-1,1v33h44V23C54,22.447,53.553,22,53,22z"/>
    </g>
    <g>
        <path fill="#394240" d="M54,20H44v-8c0-6.627-5.373-12-12-12S20,5.373,20,12v8H10c-1.105,0-2,0.895-2,2v38c0,2.211,1.789,4,4,4h40
            c2.211,0,4-1.789,4-4V22C56,20.895,55.105,20,54,20z M22,12c0-5.523,4.478-10,10-10s10,4.477,10,10v12h-2V12c0-4.418-3.582-8-8-8
            s-8,3.582-8,8v12h-2V12z M38,12v8H26v-8c0-3.314,2.687-6,6-6S38,8.686,38,12z M54,60c0,1.104-0.896,2-2,2H12c-1.104,0-2-0.896-2-2
            v-2h44V60z M54,56H10V23c0-0.553,0.447-1,1-1h9v3c0,0.553,0.447,1,1,1h4c0.553,0,1-0.447,1-1v-3h12v3c0,0.553,0.447,1,1,1h4
            c0.553,0,1-0.447,1-1v-3h9c0.553,0,1,0.447,1,1V56z"/>
        <path fill="#394240" d="M36,34c-1.104,0-2.104,0.447-2.828,1.172L32,36.336l-1.172-1.164C30.104,34.447,29.104,34,28,34
            c-2.209,0-4,1.791-4,4c0,1.104,0.713,2.135,1.438,2.859l5.855,5.855c0.391,0.391,1.023,0.391,1.414,0l5.84-5.84
            C39.271,40.15,40,39.104,40,38C40,35.791,38.209,34,36,34z M37.156,39.438L32,44.594l-5.156-5.156C26.481,39.076,26,38.553,26,38
            c0-1.105,0.896-2,2-2c0.553,0,1.053,0.223,1.414,0.586l1.879,1.871c0.391,0.391,1.023,0.391,1.414,0l1.879-1.871
            C34.947,36.223,35.447,36,36,36c1.104,0,2,0.895,2,2C38,38.553,37.519,39.076,37.156,39.438z"/>
    </g>
    <path fill="#F76D57" d="M37.156,39.438L32,44.594l-5.156-5.156C26.481,39.076,26,38.553,26,38c0-1.105,0.896-2,2-2
        c0.553,0,1.053,0.223,1.414,0.586l1.879,1.871c0.391,0.391,1.023,0.391,1.414,0l1.879-1.871C34.947,36.223,35.447,36,36,36
        c1.104,0,2,0.895,2,2C38,38.553,37.519,39.076,37.156,39.438z"/>
    <path opacity="0.2" d="M54,60c0,1.104-0.896,2-2,2H12c-1.104,0-2-0.896-2-2v-2h44V60z"/>
</g>
</svg>
                        <h4><span style="color:white;">3. </span>Order</h4>
                    </div>

                    <div class="step-item step4">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#506C7F" d="M18,12c0-5.522,4.478-10,10-10h8c5.522,0,10,4.478,10,10v7c0-3.313-2.687-6-6-6h-6c-2.209,0-4-1.791-4-4
        c0-0.553-0.447-1-1-1s-1,0.447-1,1c0,2.209-1.791,4-4,4c-3.313,0-6,2.687-6,6V12z"/>
    <path fill="#45AAB8" d="M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2v-8c0-1.104,0.447-2.104,1.172-2.828l-0.004-0.004
        c4.148-3.343,8.896-5.964,14.046-7.714C20.869,45.467,26.117,48,31.973,48c5.862,0,11.115-2.538,14.771-6.56
        c5.167,1.75,9.929,4.376,14.089,7.728l-0.004,0.004C61.553,49.896,62,50.896,62,52V60z"/>
    <g>
        <path fill="#F9EBB2" d="M32,42c-2.853,0-5.502-0.857-7.715-2.322c-1.675,0.283-3.325,0.638-4.934,1.097
            C22.602,43.989,27.041,46,31.973,46c4.938,0,9.383-2.017,12.634-5.238c-1.595-0.454-3.231-0.803-4.892-1.084
            C37.502,41.143,34.853,42,32,42z"/>
        <path fill="#F9EBB2" d="M46,22h-1c-0.553,0-1-0.447-1-1v-1v-1c0-2.209-1.791-4-4-4h-6c-2.088,0-3.926-1.068-5-2.687
            C27.926,13.932,26.088,15,24,15c-2.209,0-4,1.791-4,4v1v1c0,0.553-0.447,1-1,1h-1c-0.553,0-1,0.447-1,1v2c0,0.553,0.447,1,1,1h1
            c0.553,0,1,0.447,1,1v1c0,6.627,5.373,12,12,12s12-5.373,12-12v-1c0-0.553,0.447-1,1-1h1c0.553,0,1-0.447,1-1v-2
            C47,22.447,46.553,22,46,22z"/>
    </g>
    <path fill="#394240" d="M62.242,47.758l0.014-0.014c-5.847-4.753-12.84-8.137-20.491-9.722C44.374,35.479,46,31.932,46,28
        c1.657,0,3-1.343,3-3v-2c0-0.886-0.391-1.673-1-2.222V12c0-6.627-5.373-12-12-12h-8c-6.627,0-12,5.373-12,12v8.778
        c-0.609,0.549-1,1.336-1,2.222v2c0,1.657,1.343,3,3,3c0,3.932,1.626,7.479,4.236,10.022c-7.652,1.586-14.646,4.969-20.492,9.722
        l0.014,0.014C0.672,48.844,0,50.344,0,52v8c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4v-8C64,50.344,63.328,48.844,62.242,47.758z
         M18,12c0-5.522,4.478-10,10-10h8c5.522,0,10,4.478,10,10v7c0-3.313-2.687-6-6-6h-6c-2.209,0-4-1.791-4-4c0-0.553-0.447-1-1-1
        s-1,0.447-1,1c0,2.209-1.791,4-4,4c-3.313,0-6,2.687-6,6V12z M20,28v-1c0-0.553-0.447-1-1-1h-1c-0.553,0-1-0.447-1-1v-2
        c0-0.553,0.447-1,1-1h1c0.553,0,1-0.447,1-1v-2c0-2.209,1.791-4,4-4c2.088,0,3.926-1.068,5-2.687C30.074,13.932,31.912,15,34,15h6
        c2.209,0,4,1.791,4,4v2c0,0.553,0.447,1,1,1h1c0.553,0,1,0.447,1,1v2c0,0.553-0.447,1-1,1h-1c-0.553,0-1,0.447-1,1v1
        c0,6.627-5.373,12-12,12S20,34.627,20,28z M24.285,39.678C26.498,41.143,29.147,42,32,42s5.502-0.857,7.715-2.322
        c1.66,0.281,3.297,0.63,4.892,1.084C41.355,43.983,36.911,46,31.973,46c-4.932,0-9.371-2.011-12.621-5.226
        C20.96,40.315,22.61,39.961,24.285,39.678z M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2v-8c0-1.104,0.447-2.104,1.172-2.828
        l-0.004-0.004c4.148-3.343,8.896-5.964,14.046-7.714C20.869,45.467,26.117,48,31.973,48c5.862,0,11.115-2.538,14.771-6.56
        c5.167,1.75,9.929,4.376,14.089,7.728l-0.004,0.004C61.553,49.896,62,50.896,62,52V60z"/>
    <path fill="#394240" d="M24.537,21.862c0.475,0.255,1.073,0.068,1.345-0.396C25.91,21.419,26.18,21,26.998,21
        c0.808,0,1.096,0.436,1.111,0.458C28.287,21.803,28.637,22,28.999,22c0.154,0,0.311-0.035,0.457-0.111
        c0.491-0.253,0.684-0.856,0.431-1.347C29.592,19.969,28.651,19,26.998,19c-1.691,0-2.618,0.983-2.9,1.564
        C23.864,21.047,24.063,21.609,24.537,21.862z"/>
    <path fill="#394240" d="M34.539,21.862c0.475,0.255,1.073,0.068,1.345-0.396C35.912,21.419,36.182,21,37,21
        c0.808,0,1.096,0.436,1.111,0.458C38.289,21.803,38.639,22,39.001,22c0.154,0,0.311-0.035,0.457-0.111
        c0.491-0.253,0.684-0.856,0.431-1.347C39.594,19.969,38.653,19,37,19c-1.691,0-2.618,0.983-2.9,1.564
        C33.866,21.047,34.065,21.609,34.539,21.862z"/>
</g>
</svg>
                        <h4><span style="color:white;">4. </span>Choose Runner</h4>
                    </div>

                    <div class="step-item step5">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <rect x="2" y="20" fill="#506C7F" width="60" height="8"/>
    <g>
        <path fill="#B4CCB9" d="M2,52c0,1.104,0.896,2,2,2h56c1.104,0,2-0.896,2-2V30H2V52z"/>
        <path fill="#B4CCB9" d="M60,10H4c-1.104,0-2,0.895-2,2v6h60v-6C62,10.895,61.104,10,60,10z"/>
    </g>
    <path fill="#394240" d="M60,8H4c-2.211,0-4,1.789-4,4v40c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4V12C64,9.789,62.211,8,60,8z
         M62,52c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V30h60V52z M62,28H2v-8h60V28z M62,18H2v-6c0-1.105,0.896-2,2-2h56
        c1.104,0,2,0.895,2,2V18z"/>
    <path fill="#394240" d="M11,40h14c0.553,0,1-0.447,1-1s-0.447-1-1-1H11c-0.553,0-1,0.447-1,1S10.447,40,11,40z"/>
    <path fill="#394240" d="M29,40h6c0.553,0,1-0.447,1-1s-0.447-1-1-1h-6c-0.553,0-1,0.447-1,1S28.447,40,29,40z"/>
    <path fill="#394240" d="M11,46h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H11c-0.553,0-1,0.447-1,1S10.447,46,11,46z"/>
    <path fill="#394240" d="M45,46h8c0.553,0,1-0.447,1-1v-6c0-0.553-0.447-1-1-1h-8c-0.553,0-1,0.447-1,1v6C44,45.553,44.447,46,45,46
        z M46,40h6v4h-6V40z"/>
    <rect x="46" y="40" fill="#F9EBB2" width="6" height="4"/>
</g>
</svg>
                        <h4><span style="color:white;">5. </span>Pay</h4>
                    </div>

                </div>

            </div>
        </div>

    </section>

    <section class="service">
        <div class="container">
            <div class="title text-xs-center m-b-30" id="service">
                <h2> Our Services </h2>
                <p class="lead">Your daily to-dos, simplified! Explore iHelpU services for a smoother university life</p>
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
    </section>
    

    <section class="how-it-works">
        <div class="container">
            <div class="text-xs-center">
                <h2>Step to Order</h2>
                <div class="row how-it-works-solution">
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col1">
                        <div class="how-it-works-wrap">
                            <div class="step step-1">
                                <div class="icon" data-step="1">
                                    <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#394240" d="M56,48c-3.313,0-6-2.687-6-6V22c0-8.577-6.004-15.74-14.035-17.548C35.984,4.304,36,4.154,36,4
        c0-2.209-1.791-4-4-4s-4,1.791-4,4c0,0.154,0.016,0.304,0.035,0.452C20.004,6.26,14,13.423,14,22v20c0,3.313-2.687,6-6,6
        c-2.209,0-4,1.791-4,4s1.791,4,4,4h16c0,4.418,3.582,8,8,8s8-3.582,8-8h16c2.209,0,4-1.791,4-4S58.209,48,56,48z M32,2
        c1.104,0,2,0.896,2,2c0,0.04-0.014,0.075-0.017,0.115C33.332,4.043,32.671,4,32,4s-1.332,0.043-1.983,0.115
        C30.014,4.075,30,4.04,30,4C30,2.896,30.896,2,32,2z M16,22c0-8.837,7.163-16,16-16s16,7.163,16,16v12H16V22z M16,36h32v4H16V36z
         M32,62c-3.313,0-6-2.687-6-6h12C38,59.313,35.313,62,32,62z M56,54H8c-1.104,0-2-0.896-2-2s0.896-2,2-2c4.418,0,8-3.582,8-8h32
        c0,4.418,3.582,8,8,8c1.104,0,2,0.896,2,2S57.104,54,56,54z"/>
    <path fill="#506C7F" d="M32,2c1.104,0,2,0.896,2,2c0,0.04-0.014,0.075-0.017,0.115C33.332,4.043,32.671,4,32,4
        s-1.332,0.043-1.983,0.115C30.014,4.075,30,4.04,30,4C30,2.896,30.896,2,32,2z"/>
    <path fill="#F76D57" d="M16,22c0-8.837,7.163-16,16-16s16,7.163,16,16v12H16V22z"/>
    <rect x="16" y="36" fill="#F9EBB2" width="32" height="4"/>
    <path fill="#B4CCB9" d="M32,62c-3.313,0-6-2.687-6-6h12C38,59.313,35.313,62,32,62z"/>
    <path fill="#F76D57" d="M56,54H8c-1.104,0-2-0.896-2-2s0.896-2,2-2c4.418,0,8-3.582,8-8h32c0,4.418,3.582,8,8,8
        c1.104,0,2,0.896,2,2S57.104,54,56,54z"/>
</g>
</svg>
                                </div>
                                <h3>Choose a service</h3>
                                <p>We've got your covered with services that can make your daily life task easier.</p>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col2">
                        <div class="step step-2">
                            <div class="icon" data-step="2">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <g>
        <path fill="#F76D57" d="M43,2v22c0,2.209,1.791,4,4,4s4-1.791,4-4V2H43z"/>
        <path fill="#F76D57" d="M23,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#F76D57" d="M3,4v20c0,2.209,1.791,4,4,4s4-1.791,4-4V2H5C3.896,2,3,2.895,3,4z"/>
    </g>
    <path fill="#F9EBB2" d="M58,60c0,1.104-0.896,2-2,2H26V37c0-0.516-0.447-1-1-1H11c-0.553,0-1,0.447-1,1v25H8c-1.104,0-2-0.896-2-2
        V29.91C6.326,29.965,6.658,30,7,30c2.088,0,3.926-1.068,5-2.688C13.074,28.932,14.912,30,17,30s3.926-1.068,5-2.688
        C23.074,28.932,24.912,30,27,30s3.926-1.068,5-2.688C33.074,28.932,34.912,30,37,30s3.926-1.068,5-2.688
        C43.074,28.932,44.912,30,47,30s3.926-1.068,5-2.688C53.074,28.932,54.912,30,57,30c0.342,0,0.674-0.035,1-0.09V60z"/>
    <g>
        <path fill="#B4CCB9" d="M33,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#B4CCB9" d="M13,24c0,2.209,1.791,4,4,4s4-1.791,4-4V2h-8V24z"/>
        <path fill="#B4CCB9" d="M59,2h-6v22c0,2.209,1.791,4,4,4s4-1.791,4-4V4C61,2.895,60.104,2,59,2z"/>
    </g>
    <path fill="#394240" d="M59,0H5C2.789,0,1,1.789,1,4v20c0,2.219,1.208,4.152,3,5.189V60c0,2.211,1.789,4,4,4h48
        c2.211,0,4-1.789,4-4V29.189c1.792-1.037,3-2.971,3-5.189V4C63,1.789,61.211,0,59,0z M51,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2
        H51z M41,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H41z M31,2v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H31z M21,2v22
        c0,2.209-1.791,4-4,4s-4-1.791-4-4V2H21z M3,4c0-1.105,0.896-2,2-2h6v22c0,2.209-1.791,4-4,4s-4-1.791-4-4V4z M12,62V38h12v10h-1
        c-0.553,0-1,0.447-1,1s0.447,1,1,1h1v12H12z M58,60c0,1.104-0.896,2-2,2H26V37c0-0.516-0.447-1-1-1H11c-0.553,0-1,0.447-1,1v25H8
        c-1.104,0-2-0.896-2-2V29.91C6.326,29.965,6.658,30,7,30c2.088,0,3.926-1.068,5-2.688C13.074,28.932,14.912,30,17,30
        s3.926-1.068,5-2.688C23.074,28.932,24.912,30,27,30s3.926-1.068,5-2.688C33.074,28.932,34.912,30,37,30s3.926-1.068,5-2.688
        C43.074,28.932,44.912,30,47,30s3.926-1.068,5-2.688C53.074,28.932,54.912,30,57,30c0.342,0,0.674-0.035,1-0.09V60z M57,28
        c-2.209,0-4-1.791-4-4V2h6c1.104,0,2,0.895,2,2v20C61,26.209,59.209,28,57,28z"/>
    <path fill="#394240" d="M53,36H29c-0.553,0-1,0.447-1,1v20c0,0.553,0.447,1,1,1h24c0.553,0,1-0.447,1-1V37
        C54,36.447,53.553,36,53,36z M52,56H30V38h22V56z"/>
    <g>
        <path fill="#45AAB8" d="M12,62h12V50h-1c-0.553,0-1-0.447-1-1s0.447-1,1-1h1V38H12V62z"/>
        <rect x="30" y="38" fill="#45AAB8" width="22" height="18"/>
    </g>
    <path fill="#394240" d="M48.293,42.707C48.488,42.902,48.744,43,49,43s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
        l-1-1c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L48.293,42.707z"/>
    <path fill="#394240" d="M48.293,47.707C48.488,47.902,48.744,48,49,48s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414
        l-6-6c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L48.293,47.707z"/>
</g>
</svg>
                            </div>
                            <h3>Choose a vendor</h3>
                            <p>We"ve got your covered with a variety of shops all around the UKM.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col3">
                        <div class="step step-3">
                            <div class="icon" data-step="3">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#F9EBB2" d="M22,12c0-5.523,4.478-10,10-10s10,4.477,10,10v12h-2V12c0-4.418-3.582-8-8-8s-8,3.582-8,8v12h-2V12z"/>
    <g>
        <path fill="#45AAB8" d="M10,60c0,1.104,0.896,2,2,2h40c1.104,0,2-0.896,2-2v-2H10V60z"/>
        <path fill="#45AAB8" d="M53,22h-9v3c0,0.553-0.447,1-1,1h-4c-0.553,0-1-0.447-1-1v-3H26v3c0,0.553-0.447,1-1,1h-4
            c-0.553,0-1-0.447-1-1v-3h-9c-0.553,0-1,0.447-1,1v33h44V23C54,22.447,53.553,22,53,22z"/>
    </g>
    <g>
        <path fill="#394240" d="M54,20H44v-8c0-6.627-5.373-12-12-12S20,5.373,20,12v8H10c-1.105,0-2,0.895-2,2v38c0,2.211,1.789,4,4,4h40
            c2.211,0,4-1.789,4-4V22C56,20.895,55.105,20,54,20z M22,12c0-5.523,4.478-10,10-10s10,4.477,10,10v12h-2V12c0-4.418-3.582-8-8-8
            s-8,3.582-8,8v12h-2V12z M38,12v8H26v-8c0-3.314,2.687-6,6-6S38,8.686,38,12z M54,60c0,1.104-0.896,2-2,2H12c-1.104,0-2-0.896-2-2
            v-2h44V60z M54,56H10V23c0-0.553,0.447-1,1-1h9v3c0,0.553,0.447,1,1,1h4c0.553,0,1-0.447,1-1v-3h12v3c0,0.553,0.447,1,1,1h4
            c0.553,0,1-0.447,1-1v-3h9c0.553,0,1,0.447,1,1V56z"/>
        <path fill="#394240" d="M36,34c-1.104,0-2.104,0.447-2.828,1.172L32,36.336l-1.172-1.164C30.104,34.447,29.104,34,28,34
            c-2.209,0-4,1.791-4,4c0,1.104,0.713,2.135,1.438,2.859l5.855,5.855c0.391,0.391,1.023,0.391,1.414,0l5.84-5.84
            C39.271,40.15,40,39.104,40,38C40,35.791,38.209,34,36,34z M37.156,39.438L32,44.594l-5.156-5.156C26.481,39.076,26,38.553,26,38
            c0-1.105,0.896-2,2-2c0.553,0,1.053,0.223,1.414,0.586l1.879,1.871c0.391,0.391,1.023,0.391,1.414,0l1.879-1.871
            C34.947,36.223,35.447,36,36,36c1.104,0,2,0.895,2,2C38,38.553,37.519,39.076,37.156,39.438z"/>
    </g>
    <path fill="#F76D57" d="M37.156,39.438L32,44.594l-5.156-5.156C26.481,39.076,26,38.553,26,38c0-1.105,0.896-2,2-2
        c0.553,0,1.053,0.223,1.414,0.586l1.879,1.871c0.391,0.391,1.023,0.391,1.414,0l1.879-1.871C34.947,36.223,35.447,36,36,36
        c1.104,0,2,0.895,2,2C38,38.553,37.519,39.076,37.156,39.438z"/>
    <path opacity="0.2" d="M54,60c0,1.104-0.896,2-2,2H12c-1.104,0-2-0.896-2-2v-2h44V60z"/>
</g>
</svg>
                            </div>
                            <h3>Place Your Order</h3>
                            <p></p>Rest assured and keep focusing on your study, while we deliver your needs right infront of your room!
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col4">
                        <div class="step step-4">
                            <div class="icon" data-step="4">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <path fill="#506C7F" d="M18,12c0-5.522,4.478-10,10-10h8c5.522,0,10,4.478,10,10v7c0-3.313-2.687-6-6-6h-6c-2.209,0-4-1.791-4-4
        c0-0.553-0.447-1-1-1s-1,0.447-1,1c0,2.209-1.791,4-4,4c-3.313,0-6,2.687-6,6V12z"/>
    <path fill="#45AAB8" d="M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2v-8c0-1.104,0.447-2.104,1.172-2.828l-0.004-0.004
        c4.148-3.343,8.896-5.964,14.046-7.714C20.869,45.467,26.117,48,31.973,48c5.862,0,11.115-2.538,14.771-6.56
        c5.167,1.75,9.929,4.376,14.089,7.728l-0.004,0.004C61.553,49.896,62,50.896,62,52V60z"/>
    <g>
        <path fill="#F9EBB2" d="M32,42c-2.853,0-5.502-0.857-7.715-2.322c-1.675,0.283-3.325,0.638-4.934,1.097
            C22.602,43.989,27.041,46,31.973,46c4.938,0,9.383-2.017,12.634-5.238c-1.595-0.454-3.231-0.803-4.892-1.084
            C37.502,41.143,34.853,42,32,42z"/>
        <path fill="#F9EBB2" d="M46,22h-1c-0.553,0-1-0.447-1-1v-1v-1c0-2.209-1.791-4-4-4h-6c-2.088,0-3.926-1.068-5-2.687
            C27.926,13.932,26.088,15,24,15c-2.209,0-4,1.791-4,4v1v1c0,0.553-0.447,1-1,1h-1c-0.553,0-1,0.447-1,1v2c0,0.553,0.447,1,1,1h1
            c0.553,0,1,0.447,1,1v1c0,6.627,5.373,12,12,12s12-5.373,12-12v-1c0-0.553,0.447-1,1-1h1c0.553,0,1-0.447,1-1v-2
            C47,22.447,46.553,22,46,22z"/>
    </g>
    <path fill="#394240" d="M62.242,47.758l0.014-0.014c-5.847-4.753-12.84-8.137-20.491-9.722C44.374,35.479,46,31.932,46,28
        c1.657,0,3-1.343,3-3v-2c0-0.886-0.391-1.673-1-2.222V12c0-6.627-5.373-12-12-12h-8c-6.627,0-12,5.373-12,12v8.778
        c-0.609,0.549-1,1.336-1,2.222v2c0,1.657,1.343,3,3,3c0,3.932,1.626,7.479,4.236,10.022c-7.652,1.586-14.646,4.969-20.492,9.722
        l0.014,0.014C0.672,48.844,0,50.344,0,52v8c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4v-8C64,50.344,63.328,48.844,62.242,47.758z
         M18,12c0-5.522,4.478-10,10-10h8c5.522,0,10,4.478,10,10v7c0-3.313-2.687-6-6-6h-6c-2.209,0-4-1.791-4-4c0-0.553-0.447-1-1-1
        s-1,0.447-1,1c0,2.209-1.791,4-4,4c-3.313,0-6,2.687-6,6V12z M20,28v-1c0-0.553-0.447-1-1-1h-1c-0.553,0-1-0.447-1-1v-2
        c0-0.553,0.447-1,1-1h1c0.553,0,1-0.447,1-1v-2c0-2.209,1.791-4,4-4c2.088,0,3.926-1.068,5-2.687C30.074,13.932,31.912,15,34,15h6
        c2.209,0,4,1.791,4,4v2c0,0.553,0.447,1,1,1h1c0.553,0,1,0.447,1,1v2c0,0.553-0.447,1-1,1h-1c-0.553,0-1,0.447-1,1v1
        c0,6.627-5.373,12-12,12S20,34.627,20,28z M24.285,39.678C26.498,41.143,29.147,42,32,42s5.502-0.857,7.715-2.322
        c1.66,0.281,3.297,0.63,4.892,1.084C41.355,43.983,36.911,46,31.973,46c-4.932,0-9.371-2.011-12.621-5.226
        C20.96,40.315,22.61,39.961,24.285,39.678z M62,60c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2v-8c0-1.104,0.447-2.104,1.172-2.828
        l-0.004-0.004c4.148-3.343,8.896-5.964,14.046-7.714C20.869,45.467,26.117,48,31.973,48c5.862,0,11.115-2.538,14.771-6.56
        c5.167,1.75,9.929,4.376,14.089,7.728l-0.004,0.004C61.553,49.896,62,50.896,62,52V60z"/>
    <path fill="#394240" d="M24.537,21.862c0.475,0.255,1.073,0.068,1.345-0.396C25.91,21.419,26.18,21,26.998,21
        c0.808,0,1.096,0.436,1.111,0.458C28.287,21.803,28.637,22,28.999,22c0.154,0,0.311-0.035,0.457-0.111
        c0.491-0.253,0.684-0.856,0.431-1.347C29.592,19.969,28.651,19,26.998,19c-1.691,0-2.618,0.983-2.9,1.564
        C23.864,21.047,24.063,21.609,24.537,21.862z"/>
    <path fill="#394240" d="M34.539,21.862c0.475,0.255,1.073,0.068,1.345-0.396C35.912,21.419,36.182,21,37,21
        c0.808,0,1.096,0.436,1.111,0.458C38.289,21.803,38.639,22,39.001,22c0.154,0,0.311-0.035,0.457-0.111
        c0.491-0.253,0.684-0.856,0.431-1.347C39.594,19.969,38.653,19,37,19c-1.691,0-2.618,0.983-2.9,1.564
        C33.866,21.047,34.065,21.609,34.539,21.862z"/>
</g>
</svg>
                            </div>
                            <h3>Choose Runner</h3>
                            <p>Choose your desired runner and let the one you trust handle your order. </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 how-it-works-steps white-txt col5">
                        <div class="step step-5">
                            <div class="icon" data-step="5">
                                <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
     width="800px" height="800px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<g>
    <rect x="2" y="20" fill="#506C7F" width="60" height="8"/>
    <g>
        <path fill="#B4CCB9" d="M2,52c0,1.104,0.896,2,2,2h56c1.104,0,2-0.896,2-2V30H2V52z"/>
        <path fill="#B4CCB9" d="M60,10H4c-1.104,0-2,0.895-2,2v6h60v-6C62,10.895,61.104,10,60,10z"/>
    </g>
    <path fill="#394240" d="M60,8H4c-2.211,0-4,1.789-4,4v40c0,2.211,1.789,4,4,4h56c2.211,0,4-1.789,4-4V12C64,9.789,62.211,8,60,8z
         M62,52c0,1.104-0.896,2-2,2H4c-1.104,0-2-0.896-2-2V30h60V52z M62,28H2v-8h60V28z M62,18H2v-6c0-1.105,0.896-2,2-2h56
        c1.104,0,2,0.895,2,2V18z"/>
    <path fill="#394240" d="M11,40h14c0.553,0,1-0.447,1-1s-0.447-1-1-1H11c-0.553,0-1,0.447-1,1S10.447,40,11,40z"/>
    <path fill="#394240" d="M29,40h6c0.553,0,1-0.447,1-1s-0.447-1-1-1h-6c-0.553,0-1,0.447-1,1S28.447,40,29,40z"/>
    <path fill="#394240" d="M11,46h10c0.553,0,1-0.447,1-1s-0.447-1-1-1H11c-0.553,0-1,0.447-1,1S10.447,46,11,46z"/>
    <path fill="#394240" d="M45,46h8c0.553,0,1-0.447,1-1v-6c0-0.553-0.447-1-1-1h-8c-0.553,0-1,0.447-1,1v6C44,45.553,44.447,46,45,46
        z M46,40h6v4h-6V40z"/>
    <rect x="46" y="40" fill="#F9EBB2" width="6" height="4"/>
</g>
</svg>
                            </div>
                            <h3>Finish your order</h3>
                            <p>Choose your desired payment method and wait for delivery!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <!-- <p class="pay-info">Paypal  Cash on Delivery</p> -->
                </div>
            </div>
        </div>
    </section>

    <section class="featured-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="title-block pull-left">
                        <h4>Vendors</h4>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="restaurants-filter pull-right">
                        <nav class="primary pull-left">
                            <ul>
                                <li><a href="#" class="selected" data-filter="*">all</a> </li>
                                <?php 
									$res= mysqli_query($db,"select * from res_category");
									      while($row=mysqli_fetch_array($res))
										  {
											echo '<li><a href="#" data-filter=".'.$row['c_name'].'"> '.$row['c_name'].'</a> </li>';
										  }
									?>

                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
            
            <div class="row">
                <div class="restaurant-listing">


                    <?php  
						$ress= mysqli_query($db,"select * from restaurant");  
									      while($rows=mysqli_fetch_array($ress))
										  {
													
													$query= mysqli_query($db,"select * from res_category where c_id='".$rows['c_id']."' ");
													 $rowss=mysqli_fetch_array($query);
						
													 echo ' <div class="col-xs-12 col-sm-12 col-md-6 single-restaurant all '.$rowss['c_name'].'">
														<div class="restaurant-wrap">
															<div class="row">
																<div class="col-xs-12 col-sm-3 col-md-12 col-lg-3 text-xs-center">
																	<a class="restaurant-logo" href="dishes.php?res_id='.$rows['rs_id'].'" > <img src="admin/Res_img/'.$rows['image'].'" alt="Restaurant logo"> </a>
																</div>
													
																<div class="col-xs-12 col-sm-9 col-md-12 col-lg-9">
																	<h5><a href="dishes.php?res_id='.$rows['rs_id'].'" >'.$rows['title'].'</a></h5> <span>'.$rows['address'].'</span>
																</div>
													
															</div>
												
														</div>
												
													</div>';
										  }
						
						
						?>


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