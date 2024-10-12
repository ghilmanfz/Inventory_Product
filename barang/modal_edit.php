<?php
include '../koneksi.php';
$id_barang = $_GET['id_barang'];
$query = "SELECT * FROM tb_barang WHERE id_barang='$id_barang'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$id_barang = $data['id_barang'];
$kode_barang = $data['kode_barang'];
$nama_barang = $data['nama_barang'];
$jenis_barang = $data['jenis_barang'];
$satuan = $data['satuan'];
$stock_awal = $data['stock_awal'];
$harga = $data['harga'];
?>

<div class="modal fade" id="modal_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Master Barang</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>ID Barang</label>
                <input type="text" class="form-control" id="id_barang_e" name="id_barang_e"
                    value="<?php echo $id_barang ?>" readonly>
                <label>Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang_e" name="kode_barang_e"
                    value="<?php echo $kode_barang ?>">
                <label>Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang_e" name="nama_barang_e"
                    value="<?php echo $nama_barang ?>">
                <label>Jenis Barang</label>
                <select name="jenis_barang_e" id="jenis_barang_e" class="form-control">
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
                <select name="satuan_e" id="satuan_e" class="form-control">
                    <?php
                    include '../koneksi.php';
                    $query = 'SELECT * FROM tb_satuan';
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                        if ($satuan == $data['id_satuan']) {
                            $select = "selected";
                        } else {
                            $select = "";
                        }
                        echo "<option $select value='" . $data['id_satuan'] . "'>" . $data['satuan'] . "</option>";
                    }
                    ?>
                </select>
                <label>Stock Awal</label>
                <input type="number" class="form-control" id="stock_awal_e" name="stock_e"
                    value="<?php echo $stock_awal ?>">
                <label>Tanggal Masuk Barang</label>
                <input type="date" class="form-control" id="umur_e" name="umur_e" value="<?php echo $umur ?>">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_ubah" class="btn btn-primary btn-sm">Ubah Data</button>
            </div>
        </div>
    </div>
</div>
<script src="barang/barang.js"></script>