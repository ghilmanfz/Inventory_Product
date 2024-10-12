<?php

session_start();
include "../koneksi.php";

$id_masuk = $_POST['id_masuk'];
$tgl_masuk = $_POST['tgl_masuk'];
$barang_id = $_POST['barang_id'];
$kode_barang = $_POST['kode_barang'];
$jml_masuk = $_POST['jml'];
$input_date = date('Y-m-d H:i:s');
$user = $_SESSION['username'];

if (empty($data['error'])) {
    $query = "UPDATE tb_masuk set tgl_masuk='$tgl_masuk',barang_id='$barang_id',kode_barang='$kode_barang',jml_masuk='$jml_masuk',input_date='$input_date',updater='$user' where id_masuk='$id_masuk'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);

?>