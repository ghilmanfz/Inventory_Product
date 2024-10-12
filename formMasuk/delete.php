<?php

include "../koneksi.php";

$id_masuk = $_POST['id_masuk'];

$query = "DELETE from tb_masuk where id_masuk='$id_masuk'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}
