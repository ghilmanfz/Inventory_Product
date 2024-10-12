<?php

include "../koneksi.php";

$id_satuan = $_POST['id_satuan'];
$satuan = $_POST['satuan'];

// var_dump($user_id);
// exit();

if (empty($data['error'])) {
    $query = "UPDATE tb_satuan set satuan='$satuan' where id_satuan='$id_satuan'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);
