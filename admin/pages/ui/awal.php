
<?php 

session_start();

include '../../../config/config.php';
require_once "../../../config/koneksi.php";

if (isset($_POST['submit'])){
$email = htmlentities(strip_tags($_POST['email']));
$password = md5(htmlentities(strip_tags($_POST['password'])));

$sql = "SELECT *FROM users WHERE email ='$email' and password ='$password'";

$data = mysqli_query($link,$sql);

if (mysqli_num_rows($data)>0){
$data = mysqli_fetch_assoc($data);
$_SESSION['nama_user'] = $data['nama'];
$_SESSION['login_user'] = $email;
header('Location:../../../dashboard');
}
else{
echo   $alert ="email atau password salah.";
}
}



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Modals | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
  
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
     
    </section>

    <section class="content">
        <div class="container-fluid">
            
            <!-- Modal Size Example -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <button type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#defaultModal">LOGIN USER</button>
                            <button type="button" class="btn bg-blue waves-effect" data-toggle="modal" data-target="#defaultModal">LOGIN ADMIN</button>
                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Size Example -->
          
            <!-- Modal Dialogs ====================================================================================================================== -->
            <!-- Default Size -->
            <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog" > 
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel"><center>LOGIN USER</center></h4>
                        </div>
                        <div class="modal-body">
                        <div id="main-wrapper">
                            <div class="unix-login">
                                <div class="container-fluid">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-12" >
                                            <div class="login-content card">
                                                <div class="login-form">
                                                    <h4></h4>
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
                                                        <button type="submit" class="btn btn-primary btn-flat m-b-20 m-t-20" name='submit'><center>Login</center></button>
                                                        <div class="register-link m-t-15 text-center">
                                                            <p>Don't have account ? <a href="<?php echo $config['site_url'] ?>auth/register.php"> Register Here</a></p>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Bootstrap Notify Plugin Js -->
    <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/ui/modals.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>