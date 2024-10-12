        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="assets/Admin/dist/img/spclogo.png" alt="SPC Logo" class="brand-image img-circle" style="opacity: .8">
                <span class="brand-text font-weight-light">PT Supertone</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="assets/Admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block"><?php echo $_SESSION['username']; ?></a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <?php
                    $role = $_SESSION['role'];
                    ?>

                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Home menu -->
                        <li class="nav-item menu-open">
                            <a href="index.php" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <!-- Transaksi menu -->
                        <li class="nav-item">
                            <a href="assets/Admin/#" class="nav-link">
                                <i class="nav-icon far fa-envelope"></i>
                                <p>
                                    Transaksi
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="brg_masuk.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang Masuk</p>
                                    </a>
                                    <a href="brg_keluar.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang Keluar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Report menu -->
                        <li class="nav-item">
                            <a href="assets/LTE/#" class="nav-link">
                                <i class="nav-icon far fa-copy"></i>
                                <p>
                                    Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="report.php" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Report Barang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- Admin-specific menus -->
                        <?php if ($role == 'admin') { ?>
                            <!-- Master Data menu -->
                            <li class="nav-item">
                                <a href="assets/Admin/#" class="nav-link">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Master Data
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="barang.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Barang</p>
                                        </a>
                                        <a href="satuan.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Satuan</p>
                                        </a>
                                        <a href="jenis_barang.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Jenis</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- Pengguna menu -->
                            <li class="nav-item">
                                <a href="assets/LTE/#" class="nav-link">
                                    <i class="nav-icon far fa-plus-square"></i>
                                    <p>
                                        Pengguna
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="user.php" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Data Pengguna</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>