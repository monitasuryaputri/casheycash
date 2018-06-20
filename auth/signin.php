<?php 

    session_start();

    include '../config/config.php';
    require_once "../config/koneksi.php";

if (isset($_POST['submit'])){
  $email = htmlentities(strip_tags($_POST['email']));
  $password = md5(htmlentities(strip_tags($_POST['password'])));

  $sql = "SELECT *FROM users WHERE email ='$email' and password ='$password' ";

  $data = mysqli_query($link,$sql);

  if (mysqli_num_rows($data)>0){
    $data = mysqli_fetch_assoc($data);
    $_SESSION['nama_user'] = $data['nama'];
    $_SESSION['level_akses'] = $data['Id_level_akses'];
    $_SESSION['login_user'] = $email;
    if($data['Id_level_akses'] == 1){
    header('Location:../admin/index.html');
    }
  }
  else{
 echo   $alert ="email atau password salah.";
  }
}



?>

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

    <?php include '../includes/admin1/css.php' ?>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="auth fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h2><b><center>LOGIN ADMIN</center><b></h2>
                                <br>
                                <br>
                                <form method="post">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <!--<div class="checkbox">
                                        <label>
        										<input type="checkbox"> Remember Me
        									</label>
                                        <label class="pull-right">
        										<a href="#">Forgotten Password?</a>
        									</label>

                                    </div>-->
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name='submit'>Login</button>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </div>
    <!-- End Wrapper -->
    <?php include '../includes/admin1/js.php' ?>
    
</body>

</html> 