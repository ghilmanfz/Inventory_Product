<?php include 'partial/header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Barang SPC v1</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <?php if ($role == 'admin') { ?>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3><?php
                                    include 'koneksi.php';
                                    $data_user = mysqli_query($koneksi, "SELECT * FROM tb_user");
                                    $jumlah_user = mysqli_num_rows($data_user);
                                    echo $jumlah_user;
                                    ?></h3>
                                <p>Total Pengguna</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3><?php
                                    include 'koneksi.php';
                                    $data_barang = mysqli_query($koneksi, "SELECT * FROM tb_barang");
                                    $jumlah_barang = mysqli_num_rows($data_barang);
                                    echo $jumlah_barang;
                                    ?></h3>
                                <p>Jumlah Master Barang</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="barang.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <?php } ?>
                    <!-- ./col -->
                        <?php
                        $role = $_SESSION['role'];
                        ?>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3><?php
                                    include 'koneksi.php';
                                    $data_masuk = mysqli_query($koneksi, "SELECT * FROM tb_masuk");
                                    $jumlah_masuk = mysqli_num_rows($data_masuk);
                                    echo $jumlah_masuk;
                                    ?></h3>
                                <p>Total Barang Masuk</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="brg_masuk.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3><?php
                                    include 'koneksi.php';
                                    $data_keluar = mysqli_query($koneksi, "SELECT * FROM tb_keluar");
                                    $jumlah_keluar = mysqli_num_rows($data_keluar);
                                    echo $jumlah_keluar;
                                    ?></h3>
                                <p>Jumlah Barang Keluar</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a href="brg_keluar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                <!-- ./col -->
                </div>
                <!-- /.row -->
                <!-- Main row -->
                <div class="container-fluid">
                    <!-- Left col -->
                    <section class="col-lg-12 connectedSortable">
                        <div class="card card-success">
                            <div class="card-header">
                                <h3 class="card-title">Bar Chart</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart">
                                    <!-- <canvas id="barChart" -->
                                    <!-- style="min-height: 800px; height: 800px; max-height: 800px; max-width: 100%;"></canvas> -->
                                    <!-- <div id="chartContainer" style="height: 300px; width: 100%;"></div> -->
                                    <canvas id="myChart" style="height: 500px; width: 100%;"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /.card -->
                    </section>
                </div>
                <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include 'partial/footer.php'; ?>