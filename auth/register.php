<?php 
    include '../config/config.php';
    require_once '../config/koneksi.php';

    if (isset($_POST['submit'])){
        $name = htmlentities(strip_tags($_POST['name']));
        $email = htmlentities(strip_tags($_POST['email']));
        $password = md5(htmlentities(strip_tags($_POST['password'])));
        $konfirmasi_password = md5(htmlentities(strip_tags($_POST['konfirmasi_password'])));
  
        if ($password != $konfirmasi_password) {
          $error = "Password dan konfirmasi_password harus sama.";
        } else{
          $sql ="insert into users (nama, email, password, Id_level_akses) values ('$name','$email','$password', 2)";
          $status = mysqli_query($link,$sql);
  
          if($status){
            $alert ="Proses registrasi berhasil.";
            header('Location: index.php');
          }else{
            $alert="Proses registrasi gagal.";
          }
  
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

</head>

<body class=" auth fix-header fix-sidebar">
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
                                <h4>Register</h4>

                                <?php if(isset($alert)): ?>
                                    <strong><?php echo $alert ?></strong>
                                    <br>
                                <?php endif; ?>

                                <form method="post">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label>Konfirmasi Password</label>
                                        <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="submit">Register</button>
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="<?php echo $config['site_url'] ?>auth"> Login</a></p>
                                    </div>
                                </form>
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