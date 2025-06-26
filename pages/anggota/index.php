<?php
include '../../config/koneksi.php';
$data = $conn->query("SELECT * FROM anggota");
?>
<a href="tambah.php">Tambah</a>
<table>
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>
  <?php $no = 1;
  while ($a = $data->fetch_assoc()): ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $a['nama'] ?></td>
      <td><a href="edit.php?id=<?= $a['id'] ?>">Edit</a></td>
    </tr>
  <?php endwhile; ?>
</table>