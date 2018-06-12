<?php
session_start();

 include '../config/config.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <?php include '../includes/admin/css.php' ?>

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
        
        <?php include '../includes/admin/header.php' ?>

        <?php include '../includes/admin/left_sidebar.php' ?>
        
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Tambah Blog</h3> 
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $config['site_url']?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo $config['site_url']?>blog">Blog</a></li>
                        <li class="breadcrumb-item active">Tambah Artikel</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content
                <div class="row">
                    <div class="col-9" style="margin:0 auto">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="basic-form">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Judul</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>

                <div class="row">
                    <div class="col-9" style="margin:0 auto">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="basic-form">
                                    <form class="form-horizontal">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Artikel Singkat</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control">
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
                                                Tambah Artikel
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>-->

                <form class="col-8" style="margin:0 auto" action="tambah-blog.php" method="post">
                    <label for="judul">Judul</label><br>
                    <input type="text" name="judul" id="judul"><br>

                    <label for="artikel">Artikel</label><br>
                    <textarea name="artikel" rows="8" cols="80" id="artikel"></textarea><br>

                    <div class="pull-right">
                        <button type="button" class="btn btn-primary" style="margin:0 auto">
                            Tambah Artikel
                        </button>
                    </div>
                </form>
            
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            
            <?php include '../includes/admin/footer.php' ?>
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    
    <?php include '../includes/admin/js.php' ?>
</body>

</html>