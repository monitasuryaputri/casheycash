<?php 

    if(session_status()== PHP_SESSION_NONE)
    {
        session_start();
    }

    include '../config/config.php';
    require_once "../config/koneksi.php";
?>
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php " class="logo" font-size=5>
        CasheyCash
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo $config['site_url'] ?>assets/user1/images/1.png">
                <span class="username"><?php echo $_SESSION['nama_user']; ?></span>
                <b class="caret"></b>
                
            </a>
            <ul class="dropdown-menu extended logout">
              
                <li><a href=<?php echo $config['site_url'] ?>usertemp/ubahpassword.php><i class="fa fa-cog"></i> Ganti Password</a></li>
                <li><a href=<?php echo $config['site_url'] ?>auth/logout.php><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>

</header>