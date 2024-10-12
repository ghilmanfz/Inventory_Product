<?php

include "../koneksi.php";

$id_keluar = $_POST['id_keluar'];

$query = "DELETE from tb_keluar where id_keluar='$id_keluar'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}

?>