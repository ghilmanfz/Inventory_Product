<?php

include "../koneksi.php";

$id_jenis = $_POST['id_jenis'];

// var_dump($user_id);
// exit();

$query = "DELETE from tb_jenis where id_jenis='$id_jenis'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}
