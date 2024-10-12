<?php

include "../koneksi.php";

$user_id = $_POST['user_id'];

// var_dump($user_id);
// exit();

$query = "DELETE from tb_user where user_id='$user_id'";
mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
if ($query == true) {
    echo '1';
} else {
    echo 'Gagal di Hapus !';
}
