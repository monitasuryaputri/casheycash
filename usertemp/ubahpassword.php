<?php
    
    include '../config/config.php';
    require_once "../config/koneksi.php";

        $result = mysqli_query($link, "SELECT * FROM users");
    
         //query berikut akan jalan jika button Ubah Password diklik
         if(isset($_POST['reset'])){ // name yang di cek disini tadi itu ubah, sedangkan ubah ngga ada di set di formnya jadinya ngga di temukan
            $errors = 0;
             //memasukkan data yang diinput kedalam masing-masing variabel
            // $nama= mysqli_real_escape_string($link,$_POST['nama']);
            $email= mysqli_real_escape_string($link,$_POST['email']);
            $passwordlama = mysqli_real_escape_string($link,$_POST['passwordlama']);
            $passwordbaru= mysqli_real_escape_string($link,$_POST['passwordbaru']);
            $ubahpassword= mysqli_real_escape_string($link,$_POST['confirmpassword']);
            
         //pastikan form diisi
         $cek=mysqli_query($link,"select password from users where email='$email'");
         $passwordlama = md5($_POST['passwordlama']);
         if(mysqli_num_rows($cek)<0){
           echo "<script>alert('Password Lama Tidak Sesuai');history.go(-1);</script>";
           return;
         }

        if($passwordbaru != $ubahpassword){
            ++$errors;
            echo "Password tidak cocok !!!<br>";
        }
        //echo "Jumlah Error : ".$errors."<br>";
        if($errors==0){
          $passwordbaru = md5($_POST['passwordbaru']);
          $result = mysqli_query($link, "UPDATE users SET password='$passwordbaru' where email='$email'");
          if($result){
            echo "<script>alert('Reset Password Berhasil');history.go(-1);</script>";

        }else{   echo "<script>alert('Reset Password Gagal');history.go(-1);</script>";  }
    }
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
<link rel="icon" href="<?php echo $config['site_url'] ?>assets/users/img/Group 1.png" type="image/x-icon" />
<!--css-->
    <?php include '../includes/user1/css.php' ?>
<!--css-->

<script src="<?php echo $config['site_url'] ?>assets/user1/js/jquery2.0.3.min.js"></script>
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
        <div class="form-w3layouts">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Ubah Password
                        </header>
                        
                        <div class="col-lg-6 bg-white">
                          <div class="form d-flex align-items-center">
                          <div class="content">
                          <form method="post" action ="ubahpassword.php" class="form-validate">

                            <div class="form-group">
                              <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material">
                              <label for="register-email" class="label-material">Email Address      </label>
                            </div>
                            
                            <div class="form-group">
                              <input id="register-password" type="password" name="passwordlama" required data-msg="Please enter your password" class="input-material">
                              <label for="register-password" class="label-material"> Password Lama</label>
                            </div>

                            <div class="form-group">
                              <input id="register-password" type="password" name="passwordbaru" required data-msg="Please enter your new password" class="input-material">
                              <label for="register-password" class="label-material">Password Baru</label>
                            </div>

                            <div class="form-group">
                              <input id="register-password" type="password" name="confirmpassword" required data-msg="Please enter confirm password" class="input-material">
                              <label for="register-password" class="label-material">Confirm Password</label>
                            </div>
                     
                            <div class="form-group">
                               <button id="register" type="submit" name="reset"  class="btn btn-primary">Ubah Password</button>
                            </div>
                          </form>
                          </div>
                          </div>
                        </section>   
                      </div>  
                    </div>        
      </div>                 
    </section>
		    
                       
         
            <!-- page end-->
        
<!-- footer -->
 <?php include '../includes/user1/footer.php' ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<?php include '../includes/user1/js.php' ?>
</body>
</html>
