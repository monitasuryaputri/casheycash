<!--================Search Area =================-->
<section class="search_area">
    <div class="search_inner">
        <input type="text" placeholder="Enter Your Search...">
        <i class="ti-close"></i>
    </div>
</section>
<!--================End Search Area =================-->

<!--================Header Menu Area =================-->
<header class="main_menu_area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="CasheyCash1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="<?php echo $config['site_url'] ?>">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="<?php echo $config['site_url'] ?>">Review</a></li>
                <li class="nav-item"><a  href="<?php echo $config['site_url'] ?>blog">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['site_url'] ?>auth">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $config['site_url'] ?>auth/register.php">Register</a></li>
            </ul>
            <ul class="navbar-nav justify-content-end">
                <li><a href="#"><i class="icon_search"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<!--================End Header Menu Area =================-->
