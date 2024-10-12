<?php include 'partial/header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Master Barang</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Master Barang</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Barang</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                <button type="button" class="btn btn-info btn-sm" id="btn_add">Add Barang</button>
                                <button type="button" class="btn btn-warning btn-sm" id="btn_edit">Edit Barang</button>
                                <button type="button" class="btn btn-danger btn-sm" id="btn_delete">Delete
                                    Barang</button>
                            </div>
                            <table id="tabel" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>No</th>
                                        <th>ID Barang</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Jenis</th>
                                        <th>Satuan</th>
                                        <th>Stock Awal</th>
                                        <th>Tanggal Masuk Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<div id="konten"></div>
<?php include 'partial/footer.php'; ?>
<script src="barang/barang.js"></script>