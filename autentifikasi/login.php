<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Manajemen Gudang | About Me</title>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />
        <link rel="shortcut icon" href="images/ico/favicon.ico">
</head>
         <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <a href="../index" class="brand">
                        <img src="images/logo.png" width="120" height="40" alt="Logo" />
                    </a>
                </div>
            </div>
        </div>

          <div class="section primary-section" id="about">
            <div class="triangle"></div>
            <div class="container">
                <div class="title">
                    <h1>Login Panel</h1>
                    <p>LM Games Store</p>
                </div>
                <div class="about-text centered">
                    <h3>Selamat Datang Di halaman Login</h3>

        <form class=""  action="proseslogin.php" method="post">
            <label for="email">E-mail</label>
            <input class="form-control" type="email" name="email" value="">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password" value="">
            <br>

            <button class="btn btn-success" type="submit" name="button">Login</button> 
                </div>
<br><br><br>
         <div class="footer">
                 <p>Back To <a href="../index">Home</a> | <a href="../produk/data_produk">Data Produk</a></p>
         <br>
           <p>&copy; 2018 Designed By <a href="http://www.instagram.com/abdul_lm">Abdul Latif Munjiat</a> | 1610631170004</p>
        </div>
</body>
</html>
