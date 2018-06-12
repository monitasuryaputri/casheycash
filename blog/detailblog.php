<?php include '../config/config.php'?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title></title>



        <!-- Icon css link -->
        <link rel="icon" href="<?php echo $config['site_url'] ?>assets/users/img/Group 1.png" type="image/x-icon" />

      <?php include '../includes/users/css.php' ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

      <?php include '../includes/users/header.php' ?>

      <!--================Banner Area =================-->
         <section class="banner_area">
             <div class="container">
                 <div class="banner_text_inner">
                     <h4>Blog</h4>
                     <ul>
                         <li><a href="<?php echo $config['site_url']?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
                         <li><a href="<?php echo $config['site_url']?>blog"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                     </ul>
                 </div>
             </div>
         </section>
         <!--================End Banner Area =================-->

         <!--================Static Area =================-->
       
        <section class="static_area">
            <div class="container">
                <div class="static_inner">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="static_main_content">
                                <div class="static_social">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-thumb-tack" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <div class="static_img">
                                    <img class="img-fluid" src="<?php echo $config['site_url'] ?>assets/users/img/blog1.jpg" alt="">          
                                </div>
                                <div class="static_text">

                                <p><strong>Menabung</strong> merupakan kegiatan menyimpan uang yang disisihkan dari penghasilan harian atau bulanan. 
                                         Pada umumnya tabungan disimpan di tempat yang aman. Walau dari kecil sudah diajarkan menabung di celengan, 
                                         namun pada zaman now, kebanyakan orang sudah beralih ke tempat yang lebih aman, yaitu bank. 
                                         Nah, tabungan tersebut menyimpan uang yang Anda. Selanjutnya, uang di tabungan bisa ditarik sewaktu-waktu ketika Anda membutuhkannya.</p>
                                    <p>Sementara, investasi adalah pembelian aset moneter yang memiliki nilai, di mana nilai sejumlah dana yang Anda investasikan bisa berpotensi meningkat dan sebaliknya, menurun.</p>
                                </div>
                                <div class="static_text2">
                                    <h3>Karakteristik Menabung dan Investasi</h3>
                                    <p>Tujuan Uang yang disimpan dalam bentuk tabungan, pada umumnya bisa digunakan saat diperlukan ketika keadaan mendesak. Maka menabung 
                                         bisa dikategorikan simpanan jangka pendek. Hal tersebut sangat berbeda dengan investasi yang memiliki tujuan utama sebagai bentuk simpanan jangan panjang. 
                                         Biasanya setiap investasi memiliki periode tertentu, misalnya saja jangka waktu 5 tahun, 10 tahun bahkan lebih. Dengan begitu, sebagai investor memiliki
                                          harapan yang lebih di masa yang akan datang...</p>
                                </div>
                                
                                <div class="static_text2">
                                    <h3>Akses Penggunanya</h3>
                                    <p>Pada umumnya menabung memiliki sifat yang lentur. Jadi, akses penggunaannya pun sangat mudah sehingga bisa leluasa menggunakannya.
                                          Sebaliknya dengan investasi yang memiliki sifat tidak lentur karena memiliki periode yang telah ditentukan. Maka, sulit digunakan.  Namun, tergantung pada jenis investasi yang dipilih. 
                                         Misalnya saja emas yang lebih mudah digunakan dibandingkan dengan jenis investasi lainnya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="right_sidebar_area">
                                <aside class="right_widget r_news_widget">
                                    <div class="r_w_title">
                                        <h3>Recent News</h3>
                                    </div>
                                    <div class="news_inner">
                                         <div class="news_item">
                                             <a href="#"><h4>In order to succeed, we must first believe that we can.</h4></a>
                                             <a href="#"><h6>April 20, 2018</h6></a>
                                         </div>
                                         <div class="news_item">
                                             <a href="#"><h4>Survei Terbaru: Millennial Lebih Banyak Habiskan Uang Untuk Ngopi, Dibanding Pikirkan Masa Depan.</h4></a>
                                             <a href="#"><h6>March 18, 2018</h6></a>
                                         </div>
                                         <div class="news_item">
                                             <a href="#"><h4>Cara menekan keinginan membeli baju.</h4></a>
                                             <a href="#"><h6>February 7, 2018</h6></a>
                                         </div>
                                         <div class="news_item">
                                             <a href="#"><h4>Tips aman berinvestasi.</h4></a>
                                             <a href="#"><h6>January 10, 2018</h6></a>
                                         </div>
                                    </div>
                                </aside>
                                <aside class="right_widget r_cat_widget">
                                    <div class="r_w_title">
                                        <h3>Categories</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Branding</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Illustration</a></li>
                                        <li><a href="#">News</a></li>
                                        <li><a href="#">Trending</a></li>
                                    </ul>
                                </aside>
                                <aside class="right_widget r_tag_widget">
                                    <div class="r_w_title">
                                        <h3>Popular Tags</h3>
                                    </div>
                                    <ul>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Unique</a></li>
                                        <li><a href="#">Photography</a></li>
                                        <li><a href="#">Music</a></li>
                                        <li><a href="#">Wordpress Template</a></li>
                                        <li><a href="#">Ideas</a></li>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         <!--================End Static Area =================-->


      <?php include '../includes/users/footer.php'?>
      <?php include '../includes/users/js.php'?>


    </body>
</html>
