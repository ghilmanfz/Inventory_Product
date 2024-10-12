<?php

include "../koneksi.php";

$id_satuan = $_POST['id_satuan'];

// var_dump($user_id);
// exit();

$query = "DELETE from tb_satuan where id_satuan='$id_satuan'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}
