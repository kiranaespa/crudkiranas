<?php
include 'config/database.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<form action="proses.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">
    Nama: <input type="text" name="nama" value="<?= $d['nama']; ?>"><br>
    No Presensi: <input type="number" name="no_presensi" value="<?= $d['no_presensi']; ?>"><br>
    Kelas: <input type="text" name="kelas" value="<?= $d['kelas']; ?>"><br>
   Foto Saat Ini: <br>
    <img src="uploads/<?= $d['foto']; ?>" width="100"><br>
    Ganti Foto: <input type="file" name="foto"><br>
    <small>*Kosongkan jika tidak ingin mengubah foto</small><br><br>
    <button type="submit" name="update">Update</button>
</form>