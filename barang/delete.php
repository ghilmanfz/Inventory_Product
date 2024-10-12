<?php

include "../koneksi.php";

$id_barang = $_POST['id_barang'];

// var_dump($user_id);
// exit();

$query = "DELETE from tb_barang where id_barang='$id_barang'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}
