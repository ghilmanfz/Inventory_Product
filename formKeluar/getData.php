<?php

include "../koneksi.php";
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_keluar a INNER JOIN tb_barang b ON a.barang_id=b.id_barang ORDER BY a.tgl_keluar DESC") or die(mysqli_error($koneksi));
while ($result = mysqli_fetch_array($query)) {
?>

<tr>
    <td><?php echo $no++; ?></td>
    <td><?php echo $result['id_keluar']; ?></td>
    <td><?php echo $result['tgl_keluar']; ?></td>
    <td><?php echo $result['barang_id']; ?></td>
    <td><?php echo $result['nama_barang']; ?></td>
    <td><?php echo $result['jml_keluar']; ?></td>
    <td><button class="btn btn-sm btn-warning" onclick="edit_data('<?php echo $result['id_keluar']; ?>')"
            value="<?php echo $result['id_keluar']; ?>">Edit</button>
        <button class="btn btn-sm btn-danger"
            onclick="delete_data('<?php echo $result['id_keluar']; ?>')">Delete</button>
    </td>
</tr>

<?php } ?>