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
    
    <link rel="icon" href="<?php echo $config['site_url'] ?>assets/users/img/Group 1.png" type="image/x-icon" />

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
                    <h3 class="text-primary">Semua Blog</h3> 
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $config['site_url']?>dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-md-12" style="margin:0 auto">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Artikel singkat</th>
                                            <th>Waktu</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Jangan Samakan Menabung dengan Investasi, Ini Hal yang Perlu Diketahui</td>
                                            <td>Walau dari kecil sudah dikenali tentang keuangan, tetap saja ketika sudah beranjak dewasa kita tidak mau memperluas pengetahuan finansialnya. Kebanyakan orang hanya tau soal, cara mendapatkan uang, dan menghabiskan uang. Padahal, masih banyak 
                                            yang perlu dipelajari soal keuangan sehingga kita bisa meminimalisir kesalahan pada pengelolaan keuangan.</td>
                                            <td>18 April 2018</td>
                                            <td>
                                            <div class="btn-group btn-group-justified">
                                                <a href="#" class="btn btn-primary">Edit</a>
                                                <a href="#" class="btn btn-danger">Delete</a>
                                            </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    
    <?php include '../includes/admin/js.php' ?>
</body>

</html>