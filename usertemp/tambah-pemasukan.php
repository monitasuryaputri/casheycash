<?php
session_start();

 include '../config/config.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <script src="js/jquery2.0.3.min.js"></script>
    <script src="js/raphael-min.js"></script>
    <script src="js/morris.js"></script>
    <!--css-->
    <?php include '../includes/user1/css.php' ?>
    <!--css-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        
      <!--header start-->
        <?php include '../includes/user1/header.php' ?>
      <!--header end-->
<br>
<br>
<br>
<br>
      <!--sidebar start-->
        <?php include '../includes/user1/sidebar.php' ?>
      <!--sidebar end-->
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Pemasukan</h3> 
                </div>
                <div class="col-md-7 align-self-center">
                    
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-9" style="margin:0 auto">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="basic-form">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Sumber</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Nominal</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">Rp</span>
                                                        <input type="text" placeholder="Search Round" name="Search" class="form-control">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Waktu</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="button" class="btn btn-primary">
                                                Tambah Pemasukan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
            <?php include '../includes/admin/footer.php' ?>
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    
    <?php include '../includes/user1/js.php' ?>
</body>

</html>