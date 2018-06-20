<?php
include '../config/config.php'; 
?>
<!DOCTYPE html>
<head>
<title>CasheyCash</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link rel="icon" href="<?php echo $config['site_url'] ?>assets/users/img/Group 1.png" type="image/x-icon" />
<!--css-->
<?php include '../includes/user1/css.php' ?>
<!--css-->

<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery2.0.3.min.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/raphael-min.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/morris.js"></script>
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
		<div class="agil-info-calendar">
		<!-- calendar -->
		<div class="col-md-8 agile-calendar">
			<div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
					<span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
				<!-- grids -->
					<div class="agile-calendar-grid">
						<div class="page">
							
							<div class="w3l-calendar-center">
								<div class="calendar-heading">
									
								</div>
								<div class="monthly" id="mycalendar"></div>
							</div>
							
							<div class="clearfix"> </div>
						</div>
					</div>
			</div>
		</div>
		<br>
		<br>
		<!-- //calendar -->
		
		
			<div class="clearfix"> </div>
		</div>
		
		
 <!-- footer -->
 <?php include '../includes/user1/footer.php' ?>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/bootstrap.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/scripts.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery.slimscroll.js"></script>
<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	

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
