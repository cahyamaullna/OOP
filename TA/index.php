<?php

///koneksi ke database
$koneksi = new mysqli("localhost","root","","olshop");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Olshop</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="style/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="style/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="style/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Admin Olshop</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu"  position="fixed">
				<li class="text-center">
                    <img src="img/NKRPOG 20200326_223558.jpeg" class="user-image img-responsive"/>
					</li>

				
					<!-- Mulai............        -->
          
                    <li><a href="index.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="index.php?halaman=produk"><i class="fa fa-desktop fa-3x"></i> Produk</a></li>
                    <li><a href="index.php?halaman=pembelian"><i class="fa fa-edit fa-3x"></i> Pembelian</a></li>
                    <li><a href="index.php?halaman=pelanggan"><i class="fa fa-qrcode fa-3x"></i> Pelanggan</a></li>
                    <li><a href="index.php?halama=logout"><i class="fa fa-sitemap fa-3x"></i> Pengaturan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Ubah Data</a>
                            </li>
                            <li>
                                <a href="#">Keluar</a>
                            </li>
                </ul>
               
            </div>
            
        </nav>  

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset( $_GET['halaman'])){
                   if($_GET['halaman']=="produk"){
                       include 'produk.php';
                 }
                   elseif($_GET['halaman']=="pembelian"){
                    include 'pembelian.php';
                }
                     elseif($_GET['halaman']=="pelanggan"){
                    include 'pelanggan.php';
                }
                    elseif ($_GET['halaman']=="detail" ){
                      include 'detail.php';
                }
                    elseif ($_GET['halaman']=="tambahproduk" ){
                        include 'tambahproduk.php';
                      }
                }
                else{
                    include 'home.php';
                }

                ?>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="js/morris/raphael-2.1.0.min.js"></script>
    <script src="js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    
   
</body>
</html>
