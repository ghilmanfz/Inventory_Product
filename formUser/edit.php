<?php

include "../koneksi.php";

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$status = $_POST['status'];
$create_date = date('Y-m-d H:i:s');

// var_dump($user_id);
// exit();

if (empty($data['error'])) {
    $query = "UPDATE tb_user set username='$username',password='$password',status='$status',create_date='$create_date' where user_id='$user_id'";

    mysqli_query($koneksi, $query) or die("Gagal Perintah SQL" . mysqli_error());
    $data = 1;
} else {
    $data = "Gagal";
}

echo json_encode($data);
