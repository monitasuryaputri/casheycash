<?php 

    session_start();

    include '../config/config.php';
    require_once "../config/koneksi.php";




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
    
</head>

<body class="auth fix-header fix-sidebar">
    <!-- Main wrapper  -->
    <div id="main-wrapper">

        <div class="unix-login">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="login-content card">
                            <div class="login-form">
                                <h1><strong><center>Login</center></strong></h1>
                                <br>
                                    
                                    <button type="submit" class="btn btn-primary btn-flat m-b-25 m-t-25" name='submit'><a class="nav-link" href="<?php echo $config['site_url'] ?>auth"><strong>Login User</strong></button>
                                   
                                    <button type="submit" class="btn btn-primary btn-flat m-b-25 m-t-25" name='submit'><a class="nav-link" href="<?php echo $config['site_url'] ?>auth/signin.php"><strong>Login Admin</strong></button>
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