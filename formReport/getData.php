<?php

include "../koneksi.php";
$no = 1;
$strQuery = "SELECT a.*, IFNULL(b.jml, '0') as jumlah_masuk, IFNULL(c.jml, '0') as jumlah_keluar, d.satuan, e.jenis
            FROM tb_barang a
            LEFT JOIN (
                    SELECT SUM(jml_masuk) as jml, barang_id
                    FROM tb_masuk  
                    GROUP BY barang_id
                ) as b
            ON a.id_barang = b.barang_id
            LEFT JOIN (
                    SELECT SUM(jml_keluar) as jml, barang_id
                    FROM tb_keluar  
                    GROUP BY barang_id
                ) as c
            ON a.id_barang = c.barang_id
            LEFT JOIN tb_satuan as d
            ON a.satuan = d.id_satuan
            LEFT JOIN tb_jenis as e
            ON a.jenis_barang = e.id_jenis
";
$query = mysqli_query($koneksi, $strQuery) or die(mysqli_error($koneksi));
var_dump($query);
while ($result = mysqli_fetch_array($query)) {
    $actualStock = $result['stock_awal'] + $result['jumlah_masuk'] - $result['jumlah_keluar'];
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $result['id_barang']; ?></td>
    <td><?php echo $result['kode_barang']; ?></td>
    <td><?php echo $result['nama_barang']; ?></td>
    <td><?php echo $result['jenis_barang']; ?></td>
    <td><?php echo $result['satuan']; ?></td>
    <td><?php echo $result['stock_awal']; ?></td>
    <td><?php echo $result['jumlah_masuk']; ?></td>
    <td><?php echo $result['jumlah_keluar']; ?></td>
    <td><?php echo $actualStock; ?></td>
</tr>

<?php } ?>