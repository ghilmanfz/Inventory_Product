<?php

include "../koneksi.php";
$no = 1;
$query = mysqli_query($koneksi, "SELECT * FROM tb_jenis Order by id_jenis ASC") or die(mysqli_error($koneksi));
while ($result = mysqli_fetch_array($query)) {
?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $result['id_jenis']; ?></td>
        <td><?php echo $result['jenis']; ?></td>
        <td><button class="btn btn-sm btn-warning" onclick="edit_data('<?php echo $result['id_jenis']; ?>')" value="<?php echo $result['id_jenis']; ?>">Edit Data</button>
            <button class="btn btn-sm btn-danger" onclick="delete_data('<?php echo $result['id_jenis']; ?>')">Delete</button>
        </td>
    </tr>

<?php } ?>