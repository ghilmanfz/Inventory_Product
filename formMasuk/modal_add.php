<?php
include '../koneksi.php';
$query = 'SELECT MAX(id_masuk) AS kode FROM tb_masuk';
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$kode_masuk = $data['kode'];
$urutan = (int) substr($kode_masuk, 12, 4);
$urutan++;
$huruf = "TM";
$tgl = date('Ymd');
$idMasuk = $huruf . '-' . $tgl . '-' . sprintf("%04s", $urutan);
?>

<div class="modal fade" id="modal_add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-tittle">Input Barang Masuk</h4>
                <button type="button" class="close" data-dimiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>ID Masuk</label>
                <input type="text" class="form-control" id="id_masuk" name="id_masuk" value="<?php echo $idMasuk ?>"
                    readonly>
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" id="tgl_masuk" name="tgl_masuk">
                <label>ID Barang</label>
                <select name="barang_id" id="barang_id" class="form-control" style="width: 100%;">
                    <?php
                    include '../koneksi.php';
                    $query = "SELECT * FROM tb_barang";
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                        echo "<option value='" . $data['id_barang'] . "'>" . $data['id_barang'] . ' - ' . $data['nama_barang'] . "</option>";
                    }
                    ?>
                </select>
                <label>Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" readonly>
                <label>Stok Barang</label>
                <input type="text" class="form-control" id="stock" name="stock" readonly>
                <label>Jumlah Masuk</label>
                <input type="number" class="form-control" id="jml" name="jml">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_simpan" class="btn btn-primary btn-sm">Simpan Data</button>
            </div>
        </div>
    </div>
</div>
<script src="formMasuk/masuk.js"></script>