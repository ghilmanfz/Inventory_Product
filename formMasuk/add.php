<?php

session_start();
include "../koneksi.php";

$id_masuk = $_POST['id_masuk'];
$tgl_masuk = $_POST['tgl_masuk'];
$barang_id = $_POST['barang_id'];
$jml_masuk = $_POST['jml'];
$input_date = date('Y-m-d H:i:s');
$user = $_SESSION['username'];

if (empty($data['error'])) {
    $query = "INSERT into tb_masuk set id_masuk='$id_masuk',tgl_masuk='$tgl_masuk',barang_id='$barang_id',jml_masuk='$jml_masuk',input_date='$input_date',updater='$user'";

    mysqli_query($koneksi, $query) or die("gagal perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "gagal";
}

echo json_encode($data);
