<?php
  session_start();
  include '../config/config.php'; 
  require '../config/koneksi.php';

  if (!isset($_SESSION['login_user']))
    header('Location:../auth/index.php');
  
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
        
          <tr >
            <th>No</th>
            <th width="400px">Keperluan</th>
            <th>Kategori</th>
            <th data-title="DOB">Nominal</th>
            <th width="200px">Waktu</th>  
            <th width="150px">Aksi</th> 
        </tr>
        <?php
    $q = "SELECT Id_pengeluaran, keperluan, nominal, Id_kategori, time FROM pengeluaran WHERE email='".$_SESSION['login_user']."' order by Id_pengeluaran desc";
    $query = mysqli_query($link, $q);
    while ($rs = mysqli_fetch_array ($query)) {
        ?>
    
                                        <tr>
                                            <td><?php echo $rs['Id_pengeluaran']; ?></td>
                                            <td><?php echo $rs['keperluan']; ?></td>
                                            <td><?php echo $rs['Id_kategori']; ?></td>
                                            <td><?php echo $rs['nominal']; ?></td>
                                            <td><?php echo $rs['time']; ?></td>
                                            <td>
                                            <div class="btn-group btn-group-justified">
                                                <a href="edit_pengeluaran.php?Id_pengeluaran=<?php echo $rs['Id_pengeluaran'] ?>" class="btn btn-primary"> Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete_pengeluaran.php?Id_pengeluaran=<?php echo $rs['Id_pengeluaran'] ?>" class="btn btn-danger">Delete</a>
                                            </div>
                                            </td>
                                        </tr>
                                        <?php
    }
    ?>
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
