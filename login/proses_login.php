<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE username='$username' AND password='$password' AND status='1'");
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $row = mysqli_fetch_assoc($data);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    $_SESSION['role'] = $row['level'];
    header("location:../index.php");
} else {
    echo "<script>alert('Username atau Password Anda Salah !');window.location.href='../login.php';</script>";
    // header("location:../login.php");
}
