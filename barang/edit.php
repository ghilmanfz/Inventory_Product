<?php
session_start();
include "../koneksi.php";

$id_barang = $_POST['id_barang'];
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$jenis_barang = $_POST['jenis_barang'];
$satuan = $_POST['satuan'];
$stock_awal = $_POST['stock_awal'];
$umur = $_POST['umur'];
$input_date = date('Y-m-d H:i:s');
$user = $_SESSION['username'];

// var_dump($user_id);
// exit();

if (empty($data['error'])) {
    $query = "UPDATE tb_barang set nama_barang='$nama_barang',kode_barang='$kode_barang',jenis_barang='$jenis_barang',satuan='$satuan',stock_awal='$stock_awal', umur='$umur', input_date='$input_date', updater='$user' where id_barang='$id_barang'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);
