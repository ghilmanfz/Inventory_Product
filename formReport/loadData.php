<?php

include "../koneksi.php";
$no = 1;
$start = $_GET['start'];
$end = $_GET['end'];
$query = mysqli_query($koneksi, "SELECT *, c.satuan AS satuan FROM tb_barang a 
LEFT JOIN tb_masuk b ON a.id_barang=b.barang_id 
LEFT JOIN tb_satuan c ON a.satuan=c.id_satuan 
LEFT JOIN tb_keluar d ON a.id_barang=d.barang_id 
WHERE a.id_barang BETWEEN '$start' AND '$end' ORDER BY a.id_barang ASC") or die(mysqli_error($koneksi));
while ($result = mysqli_fetch_array($query)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['id_barang']; ?></td>
        <td><?php echo $result['kode_barang']; ?></td>
        <td><?php echo $result['nama_barang']; ?></td>
        <td><?php echo $result['jenis_barang']; ?></td>
        <td><?php echo $result['satuan']; ?></td>
        <td><?php echo $result['stock_awal']; ?></td>
        <td><?php echo $result['jml_masuk']; ?></td>
        <td><?php echo $result['jml_keluar']; ?></td>
        <td><?php echo $result['actual_stock']; ?></td>
        </td>
    </tr>

<?php } ?>