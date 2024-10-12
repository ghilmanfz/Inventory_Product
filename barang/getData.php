<?php

include "../koneksi.php";
$no = 1;
$query = mysqli_query($koneksi, "SELECT * ,b.satuan as nm_satuan FROM tb_barang a INNER JOIN tb_satuan b ON a.satuan=b.id_satuan") or die(mysqli_error($koneksi));
while ($result = mysqli_fetch_array($query)) {
?>

    <tr>
        <td><input type="checkbox" id="select_id" class="cek" value="<?php echo $result['id_barang']; ?>"></td>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['id_barang']; ?></td>
        <td><?php echo $result['kode_barang']; ?></td>
        <td><?php echo $result['nama_barang']; ?></td>
        <td><?php echo $result['jenis_barang']; ?></td>
        <td><?php echo $result['nm_satuan']; ?></td>
        <td><?php echo $result['stock_awal']; ?></td>
        <td><?php echo $result['umur']; ?></td>
    </tr>

<?php } ?>