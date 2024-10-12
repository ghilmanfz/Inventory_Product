<?php
include "koneksi.php";

$data = array();
$query = mysqli_query($koneksi, "SELECT a.*,d.satuan AS nm_satuan,e.jenis AS nm_jenis, COALESCE(SUM(b.jml_masuk), 0) AS total_masuk, COALESCE(SUM(c.jml_keluar), 0) AS total_keluar, 
                    (a.stock_awal + COALESCE(SUM(b.jml_masuk), 0) - COALESCE(SUM(c.jml_keluar), 0)) AS stok_saat_ini 
                    FROM tb_barang a 
                    LEFT JOIN tb_masuk b ON a.id_barang = b.barang_id 
                    LEFT JOIN tb_keluar c ON a.id_barang = c.barang_id 
                    LEFT JOIN tb_satuan d ON a.satuan=d.id_satuan
                    LEFT JOIN tb_jenis e ON a.jenis_barang=e.id_jenis
                    GROUP BY a.id_barang ORDER BY a.id_barang ASC");

while ($result = mysqli_fetch_array($query)) {
    $data[] = array(
        'label' => $result['nama_barang'],
        'total_masuk' => $result['total_masuk'],
        'total_keluar' => $result['total_keluar']
    );
}

echo json_encode($data);
