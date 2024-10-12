<?php
include '../koneksi.php';
$query = 'SELECT MAX(id_barang) AS kode FROM tb_barang';
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$kode_barang = $data['kode'];
// Nilai 1 dan 4 itu diambil dari ID Barang yang ada di database, nilai 1 untuk huruf B, untuk Nilai 4 adalah 0001
$urutan = (int) substr($kode_barang, 1, 4);
$urutan++;
$huruf = 'B';
$idBarang = $huruf . sprintf('%04s', $urutan);

?>

<div class="modal fade" id="modal_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Input Data Master Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>ID Barang</label>
                <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?php echo $idBarang ?>" readonly>
                <label>Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
                <label>Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                <label>Jenis Barang</label>
                <select name="jenis_barang" id="jenis_barang" class="form-control">
                    <?php
                    include './koneksi.php';
                    $query = 'SELECT * FROM tb_jenis';
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                        echo "<option value='" . $data['jenis'] . "'>" . $data['jenis'] . "</option>";
                    }
                    ?>
                </select>
                <label>Satuan</label>
                <select name="satuan" id="satuan" class="form-control">
                    <?php
                    include './koneksi.php';
                    $query = 'SELECT * FROM tb_satuan';
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                        echo "<option value='" . $data['id_satuan'] . "'>" . $data['satuan'] . "</option>";
                    }
                    ?>
                </select>
                <label>Stock Awal</label>
                <input type="number" class="form-control" id="stock_awal" name="stock">
                <label>Tanggal Masuk Barang</label>
                <input type="date" class="form-control" id="umur" name="umur">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_simpan" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </div>
    </div>
</div>
<script src="barang/barang.js"></script>