<?php
include '../koneksi.php';

$id_masuk = $_GET['id_masuk'];
$query = "SELECT * FROM tb_masuk where id_masuk='$id_masuk'";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$id_masuk = $data['id_masuk'];
$tgl_masuk = $data['tgl_masuk'];
$barang_id = $data['barang_id'];
$jml_masuk = $data['jml_masuk'];
?>
<div class="modal fade" id="modal_edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-tittle">Edit Data Barang Masuk</h4>
                <button type="button" class="close" data-dimiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>ID Masuk</label>
                <input type="text" class="form-control" id="id_masuk_e" name="id_masuk_e" value="<?php echo $id_masuk ?>" readonly>
                <label>Tanggal Masuk</label>
                <input type="date" class="form-control" id="tgl_masuk_e" name="tgl_masuk_e" value="<?php echo $tgl_masuk ?>">
                <label>ID Barang</label>
                <select name="barang_id_e" id="barang_id_e" class="form-control select2bs4" style="width: 100%;">
                    <?php
                    include './koneksi.php';
                    $query = "SELECT * FROM tb_barang";
                    $sql = mysqli_query($koneksi, $query);
                    while ($data = mysqli_fetch_array($sql)) {
                        if ($barang_id == $data['id_barang']) {
                            $select = "selected";
                        } else {
                            $select = "";
                        }
                        echo "<option value='" . $data['id_barang'] . "'>" . $data['id_barang'] . ' - ' . $data['nama_barang'] . "</option>";
                    }
                    ?>
                </select>
                <label>Jumlah Masuk</label>
                <input type="number" class="form-control" id="jml_e" name="jml_e" value="<?php echo $jml_masuk ?>">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_ubah" class="btn btn-primary btn-sm">Ubah Data</button>
            </div>
        </div>
    </div>
</div>
<script src="formMasuk/masuk.js"></script>