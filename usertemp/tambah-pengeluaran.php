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
     Data Pengeluaran
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
                    <div class="col-9" style="margin:0 auto">
                        <div class="card">
                            <div class="card-body"> 
                                <div class="basic-form">
                                    <form method="post" class="form-horizontal" action="simpanPengeluaran.php">
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Keperluan</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="keperluan">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Nominal</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-btn">Rp</span>
                                                        <input type="text" placeholder="Search Round" name="nominal" class="form-control">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Kategori</label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="Id_kategori">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-2 control-label">Waktu</label>
                                                <div class="col-sm-10">
                                                    <input type="date" class="form-control" name="time">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <input type="submit" value="Submit" name="Submit" />
                                           
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
            
                <!-- <tr data-expanded="true">
                    <td  align="center"><?php echo $i; ?></td>
                    <td style="text-align: left;"><?php echo $row['sumber']; ?></td>
                    <td style="text-align: left;"><?php echo $row['nominal']; ?></td>
                    <td style="text-align: left;"><?php echo $row['waktu']; ?></td>
                    <td>            
                    <div class="btn-group btn-group-justified">
                    <a href="#" class="btn btn-primary ">Edit</a>              
                    <a onclick="return confirm('Are you sure you want to delete this entry?')" href="#" class="btn btn-danger">Hapus</a></td>
                    </div>     
                </tr> -->
     
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
