<?php

	include_once 'koneksi.php';
	$barang = mysqli_query($koneksi, "SELECT * FROM lgs_produk");
	$banyakbarang = mysqli_num_rows($barang);
?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LM Games Store</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="shortcut icon" href="images/ico/favicon.ico">
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="index" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />

                    </a>

                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>

                    <div class="nav-collapse collapse pull-right">
                        <ul class="nav" id="top-navigation">
                            <li class="active"><a href="index">Home</a></li>
                            <li><a href="produk/data_produk">Data Produk</a></li>
                            <li><a href="about/aboutme">About Me</a></li>
                            <li><a href="autentifikasi/login">Login</a></li>
                        
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div id="home">

            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
  
                <div class="mask"></div>

                <div class="container">

                    <div class="da-slide">
                        <h2 class="fittext2">LM Games Store</h2>
                        <h4>Data Produk</h4>
                        <p>Total produk saat ini yaitu ada <b><?php echo $banyakbarang; ?> Produk</b></p>
                        <div class="da-img">
                            <img src="images/Slider01.png" alt="image01" width="320">
                        </div>
                    </div>

                    <div class="da-slide">
                        <h2>LM Games Store</h2>
                        <h4>Akses Login</h4>
                        <p>Pengunjung hanya bisa melihat produk</b></p>
                        <div class="da-img">
                            <img src="images/Slider02.png" width="320" alt="image02">
                        </div>
                    </div>

                    <div class="da-slide">
                        <h2>LM Games Store</h2>
                        <h4>About Me</h4>
                        <p>Sebagai creator LM Games Store</b></p>
                        <div class="da-img">
                            <img src="images/Slider03.png" width="320" alt="image03">
                        </div>
                    </div>

                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>

                </div>
            </div>
        </div>
  

        <div class="footer">
            <p>&copy; 2018 Designed By <a href="http://www.instagram.com/abdul_lm">Abdul Latif Munjiat</a> | 1610631170004</p>
        </div>

        <div class="scrollup">
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>

        <script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>

        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>