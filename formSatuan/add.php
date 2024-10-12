<?php

include "../koneksi.php";

$id_satuan = $_POST['id_satuan'];
$satuan = $_POST['satuan'];

// var_dump($user_id);
// exit();

if (empty($data['error'])) {
    $query = "INSERT into tb_satuan set id_satuan='$id_satuan',satuan='$satuan'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);
