<?php 
  if(session_status()== PHP_SESSION_NONE)
  {
      session_start();
      $email= $_SESSION['login_user'];
  }
  include "../config/config.php";
  require '../config/koneksi.php';
?>
<!DOCTYPE html>
<head>
<title>CasheyCash</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<?php include '../includes/user1/css.php' ?>
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery2.0.3.min.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/raphael-min.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<!--header start-->
<?php include '../includes/user1/header.php' ?>
<!--header end-->

<!--sidebar start-->
    <?php include '../includes/user1/sidebar.php' ?>
<!--sidebar end-->
</div>
</header>
<!--header end-->

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 w3ls-graph">
					<!--agileinfo-grap-->
						<div class="agileinfo-grap">
							<div class="agileits-box">
								<header class="agileits-box-header clearfix">
									<h3>Grafik Pemasukan dan Pengeluaran</h3>
										<div class="toolbar">
											
											
										</div>
								</header>
								<div class="agileits-box-body clearfix">
									<div id="hero-area"></div>
								</div>
							</div>
						</div>
	<!--//agileinfo-grap-->

				</div>
			</div>
		</div>
		
</section>
 <!-- footer -->
 <?php include '../includes/user1/footer.php' ?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<?php include '../includes/user1/js.php' ?>

<!-- morris JavaScript -->



<!-- start proses -->
<?php
 function date_str($date)
  {
    $exp = explode('-',$date);
    if (count($exp)==3) {
      $date = $exp[2].'/'.$exp[1].'/'.$exp[0];
    }
    return $date;
  }
  $nominalfix = array(0,0,0,0,0,0,0,0,0,0,0,0);
  $tampil = array(0,0,0,0,0,0,0,0,0,0,0,0);
  //$email = $_SESSION["email"];
  //echo $email;
//    $email = "sitialifah303@gmail.com";
   $hasil = mysqli_query($link,"SELECT * FROM pemasukan WHERE email='$email'");
   //die();
//   $cek = "SELECT * FROM pemasukan WHERE email='$email'";
  $index =0;
  //$hasil = mysqli_query($cek);
  // $jsonArray = array();
  while ($result = mysqli_fetch_array($hasil)) {
    $tanggal = $result['time'];
    $x[$index] = date('M/Y', strtotime($tanggal));
    $banding[$index] = date('M', strtotime($tanggal));
    $nominal[$index] = $result['nominal'];
    if ($index==0) {
      $tmp = date('Y', strtotime($tanggal));
      $tampil[0] = $tmp."-1";
      $tampil[1] = $tmp."-2";
      $tampil[2] = $tmp."-3";
      $tampil[3] = $tmp."-4";
      $tampil[4] = $tmp."-5";
      $tampil[5] = $tmp."-6";
      $tampil[6] = $tmp."-7";
      $tampil[7] = $tmp."-8";
      $tampil[8] = $tmp."-9";
      $tampil[9] = $tmp."-10";
      $tampil[10] = $tmp."-11";
      $tampil[11] = $tmp."-12";
    }
    if ($banding[$index]=='Jan') {
      $nominalfix[0]=$nominalfix[0]+$nominal[$index];
    }
    elseif ($banding[$index]=='Feb') {
    $nominalfix[1]=$nominalfix[1]+$nominal[$index];
    }
    elseif ($banding[$index]=='Mar') {
      $nominalfix[2]=$nominalfix[2]+$nominal[$index];
    }
    elseif ($banding[$index]=='Apr') {
      $nominalfix[3]=$nominalfix[3]+$nominal[$index];
    }
    elseif ($banding[$index]=='May') {
      $nominalfix[4]=$nominalfix[4]+$nominal[$index];
    }
    elseif ($banding[$index]=='Jun') {
      $nominalfix[5]=$nominalfix[5]+$nominal[$index];
    }
    elseif ($banding[$index]=='Jul') {
      $nominalfix[6]=$nominalfix[6]+$nominal[$index];
    }
    elseif ($banding[$index]=='Aug') {
      $nominalfix[7]=$nominalfix[7]+$nominal[$index];
    }
    elseif ($banding[$index]=='Sep') {
      $nominalfix[8]=$nominalfix[8]+$nominal[$index];
    }
    elseif ($banding[$index]=='Oct') {
      $nominalfix[9]=$nominalfix[9]+$nominal[$index];
    }
    elseif ($banding[$index]=='Nov') {
      $nominalfix[10]=$nominalfix[10]+$nominal[$index];
    }
    elseif ($banding[$index]=='Dec') {
      $nominalfix[11]=$nominalfix[11]+$nominal[$index];
    }
   
    $index++;
  }
  $pengeluaranfix = array(0,0,0,0,0,0,0,0,0,0,0,0);
  //$cek = "SELECT * FROM pengeluaran WHERE email='$email'";
  $hasil = mysqli_query($link,"SELECT * FROM pengeluaran WHERE email='$email'");
  $index_p =0;
  while ($result = mysqli_fetch_array($hasil)) {
    $tanggal = $result['time'];
    $x[$index_p] = date('M/Y', strtotime($tanggal));
    $pengeluaran[$index_p] = $result['nominal'];
    $banding[$index_p] = date('M', strtotime($tanggal));
    if ($banding[$index_p]=='Jan') {
      $pengeluaranfix[0]=$pengeluaranfix[0]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Feb') {
    $pengeluaranfix[1]=$pengeluaranfix[1]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Mar') {
      $pengeluaranfix[2]=$pengeluaranfix[2]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Apr') {
      $pengeluaranfix[3]=$pengeluaranfix[3]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='May') {
      $pengeluaranfix[4]=$pengeluaranfix[4]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Jun') {
      $pengeluaranfix[5]=$pengeluaranfix[5]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Jul') {
      $pengeluaranfix[6]=$pengeluaranfix[6]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Aug') {
      $pengeluaranfix[7]=$pengeluaranfix[7]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Sep') {
      $pengeluaranfix[8]=$pengeluaranfix[8]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Oct') {
      $pengeluaranfix[9]=$pengeluaranfix[9]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Nov') {
      $pengeluaranfix[10]=$pengeluaranfix[10]+$pengeluaran[$index_p];
    }
    elseif ($banding[$index]=='Dec') {
      $pengeluaranfix[11]=$pengeluaranfix[11]+$pengeluaran[$index_p];
    }
  }
   ?>


<!-- end proses -->
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
        data: [
                {period: '<?php echo $tampil[0]; ?>', iphone: <?php echo $nominalfix[0] ?>, ipad: <?php echo $pengeluaranfix[0] ?>},
                {period: '<?php echo $tampil[1] ?>', iphone: <?php echo $nominalfix[1] ?>, ipad: <?php echo $pengeluaranfix[1] ?>},
                {period: '<?php echo $tampil[2] ?>', iphone: <?php echo $nominalfix[2] ?>, ipad: <?php echo $pengeluaranfix[2] ?>},
				{period: '<?php echo $tampil[3] ?>', iphone: <?php echo $nominalfix[3] ?>, ipad: <?php echo $pengeluaranfix[3] ?>},
				{period: '<?php echo $tampil[4]; ?>', iphone: <?php echo $nominalfix[4] ?>, ipad: <?php echo $pengeluaranfix[4] ?>},
				{period: '<?php echo $tampil[5]; ?>', iphone: <?php echo $nominalfix[5] ?>, ipad: <?php echo $pengeluaranfix[5] ?>},
				{period: '<?php echo $tampil[6] ?>', iphone: <?php echo $nominalfix[6] ?>, ipad: <?php echo $pengeluaranfix[6] ?>},
				{period: '<?php echo $tampil[7] ?>', iphone: <?php echo $nominalfix[7] ?>, ipad: <?php echo $pengeluaranfix[7] ?>},
				{period: '<?php echo $tampil[8] ?>', iphone: <?php echo $nominalfix[8] ?>, ipad: <?php echo $pengeluaranfix[8] ?>},
				{period: '<?php echo $tampil[9] ?>', iphone: <?php echo $nominalfix[9] ?>, ipad: <?php echo $pengeluaranfix[9] ?>},
				{period: '<?php echo $tampil[10] ?>', iphone: <?php echo $nominalfix[10] ?>, ipad: <?php echo $pengeluaranfix[10] ?>},
				{period: '<?php echo $tampil[11] ?>', iphone: <?php echo $nominalfix[11] ?>, ipad: <?php echo $pengeluaranfix[11] ?>},
			],
			lineColors:['#eb6f6f','#926383'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad'],
            labels: ['Semua Pemasukan', 'Semua Pengeluaran',],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
<!-- calendar -->
	<script type="text/javascript" src="<?php echo $config['site_url'] ?>assets/user1/js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
