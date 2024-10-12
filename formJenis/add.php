<?php

include "../koneksi.php";

$id_jenis = $_POST['id_jenis'];
$jenis = $_POST['jenis'];

// var_dump($user_id);
// exit();

if (empty($data['error'])) {
    $query = "INSERT into tb_jenis set id_jenis='$id_jenis',jenis='$jenis'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);
