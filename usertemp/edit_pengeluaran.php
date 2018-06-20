<?php
session_start();
require_once '../config/koneksi.php';
include '../config/config.php'; 

if (!isset($_GET['Id_pengeluaran'])) {
  echo "Not Found";
  die();
}


if (isset($_POST['submit'])) {
  $keperluan = htmlentities(strip_tags($_POST['keperluan']));
  $nominal = htmlentities(strip_tags($_POST['nominal']));

  $sql = "update pengeluaran set keperluan='$keperluan', nominal='$nominal' where Id_pengeluaran=$_GET[Id_pengeluaran]";
  $status = mysqli_query($link, $sql);

  if ($status) {
    $_SESSION['status_proses'] = "Pengeluaran Berhasil diedit.";
  }else{
    $_SESSION['status_proses'] = "Pengeluaran Gagal diedit.".mysqli_error($link);
  }

  header('Location: pengeluaran.php');
}


$sql = "SELECT * from pengeluaran where Id_pengeluaran=" . $_GET['Id_pengeluaran'];
$data = mysqli_query($link, $sql);
$data = mysqli_fetch_assoc($data);

if (empty($data)) {
  echo "Not Found";
  die();
}
?>

<!DOCTYPE html>
<head>
<title>CasheyCash</title>
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
        
        <div class="container-fluid">
       <!-- Start Page Content -->
            <div class="row">
                <div class="col-9" style="margin:0 auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="basic-form">
                                <form class="" action="edit_pengeluaran.php?Id_pengeluaran=<?php echo $_GET['Id_pengeluaran']; ?>" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label" for="keperluan">Keperluan</label><br>
                                            <div class="col-sm-10">
                                                <input type="text" name="keperluan" id="keperluan" class="form-control" value="<?php echo $data['keperluan']; ?>"><br>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-2 control-label" for="nominal">Nominal</label><br>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <span class="input-group-btn">Rp</span>
                                                    <input type="text" name="nominal" id="nominal" class="form-control" value="<?php echo $data['nominal']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="submit" value="submit" name="submit" class="btn btn-primary" style="background: #222222ef">
                                            Update
                                        </button>
                                    </div>         
                                </form>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
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
