<?php 

$server = "localhost";
$user = "root";
$pass = "";
$dbname ="db_lte";

$koneksi = mysqli_connect($server,$user,$pass,$dbname);
if (mysqli_connect_error()) {
    echo "Koneksi ke Database Gagal".mysqli_connect_error();
}

?>