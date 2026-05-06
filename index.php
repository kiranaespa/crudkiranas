<!-- <?php include 'config/database.php'; ?>

<h2>Daftar Siswa</h2>
<a href="tambah.php">Tambah Siswa Baru</a>

<table border="1" cellpadding="10">
<tr>
    <th>Nama</th>
    <th>No Presensi</th>
    <th>Kelas</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM siswa");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['no_presensi']; ?></td>
    <td><?= $d['kelas']; ?></td>
    <td><img src="assets/<?= $d['foto']; ?>" width="100"></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>">Hapus</a>
    </td>
</tr>
<?php } ?>
</table> -->

<?php include 'config/database.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Daftar Siswa</h2>

<a href="tambah.php" class="btn-tambah">Tambah Siswa Baru</a>

<table>
<tr>
    <th>Nama</th>
    <th>No Presensi</th>
    <th>Kelas</th>
    <th>Foto</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM siswa");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
    <td><?= $d['nama']; ?></td>
    <td><?= $d['no_presensi']; ?></td>
    <td><?= $d['kelas']; ?></td>
    <td>
        <img src="assets/<?= $d['foto']; ?>" alt="foto">
    </td>
    <td class="aksi">
        <a href="edit.php?id=<?= $d['id']; ?>" class="edit">Edit</a>
        <a href="hapus.php?id=<?= $d['id']; ?>" class="hapus">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>