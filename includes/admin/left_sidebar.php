<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label"></li>
                <li> 
                    <a href="<?php echo $config['site_url']?>dashboard">
                        <i class="fa fa-tachometer"></i>
                        <span class="hide-menu">
                            Dashboard
                        </span>
                    </a>
                </li>
                <li> 
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="hide-menu">
                            Pemasukan 
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $config['site_url']?>pemasukan">Semua Pemasukan </a></li>
                        <li><a href="<?php echo $config['site_url']?>pemasukan/tambah-pemasukan.php">Tambah Pemasukan </a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="hide-menu">
                            Pengeluaran 
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $config['site_url']?>pengeluaran">Semua Pengeluaran </a></li>
                        <li><a href="<?php echo $config['site_url']?>pengeluaran/tambah-pengeluaran.php">Tambah Pengeluaran </a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="hide-menu">
                            Planning 
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $config['site_url']?>planning">Semua Planning </a></li>
                        <li><a href="<?php echo $config['site_url']?>planning/tambah-planning.php">Tambah Planning </a></li>
                    </ul>
                </li>
                <li> 
                    <a class="has-arrow" href="#" aria-expanded="false">
                        <i class="fa fa-tachometer"></i>
                        <span class="hide-menu">
                            Blog 
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo $config['site_url']?>blog/index.1.php">Semua Blog </a></li>
                        <li><a href="<?php echo $config['site_url']?>blog/tambah-blog.php">Tambah Blog </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>
<!-- End Left Sidebar  -->