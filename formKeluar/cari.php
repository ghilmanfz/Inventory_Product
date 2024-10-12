<?php

include "../koneksi.php";

$id = $_GET['id'];
$arrayKu = array();

$data = mysqli_query($koneksi, "SELECT a.*,
COALESCE(SUM(b.jml_masuk),0) AS total_masuk,
COALESCE(SUM(c.jml_keluar),0) AS total_keluar,
(a.stock_awal + COALESCE(SUM(b.jml_masuk),0) - COALESCE(SUM(c.jml_keluar),0)) AS stock_saat_ini
FROM tb_barang a
LEFT JOIN tb_masuk b ON a.id_barang=b.barang_id
LEFT JOIN tb_keluar c ON a.id_barang=c.barang_id
WHERE a.id_barang='$id'
GROUP BY a.id_barang");

while ($row = $data->fetch_assoc()) {
    $arrayKu[] = $row;
}

echo json_encode($arrayKu);
