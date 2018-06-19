<?php
session_start();
include '../config/config.php'; 
require '../config/koneksi.php';

if (!isset($_SESSION['login_user']))
    header('Location:../auth/index.php');


?>
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--css-->
    <?php include '../includes/user1/css.php' ?>
<!--css-->
<script src="js/jquery2.0.3.min.js"></script>
</head>
<body>

<section id="container">
<!--header start-->
    <?php include '../includes/user1/header.php' ?>
<!--header end-->

<!--sidebar start-->
    <?php include '../includes/user1/sidebar.php' ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
<div class="panel panel-default">
    <div class="panel-heading">
    
    </div>
    <div>
    <table class="table" ui-jq="footable" ui-options='{
        "paging": {
        "enabled": true
        },
        "filtering": {
        "enabled": true
        },
        "sorting": {
        "enabled": true
        }}'>
        
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <?php
                
                
                    $keperluan=$_POST['keperluan'];
                    $nominal=$_POST['nominal'];
                    $Id_kategori=$_POST['Id_kategori'];
                    $time = $_POST['time'];
    $time = str_replace('/', '-', $time);
    $time = date('Y-m-d', strtotime($time));
                
                $sql = "INSERT INTO pengeluaran(Id_pengeluaran, email, keperluan, nominal, Id_kategori, time) VALUES (DEFAULT, '".$_SESSION['login_user']."', '$keperluan','$nominal','$Id_kategori','$time' )";
                $status = $link->query($sql) or die("menu" . mysqli_error($link));
   
?>
               <label>Data Berhasil Disimpan</label>     
    
                                            
                </div>
                <!-- End PAge Content -->
            </div>
            
    
    </table>
    </div>
</div>
</div>
</section>
<!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
            <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
            </div>
        </div>
<!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
