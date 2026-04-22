<?php
include 'config/database.php';

// TAMBAH DATA
if (isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $no = $_POST['no_presensi'];
    $kelas = $_POST['kelas'];

    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], "assets/".$foto);

    mysqli_query($conn, "INSERT INTO siswa VALUES('', '$nama', '$no', '$kelas', '$foto')");

    header("Location: index.php");
}

// UPDATE DATA
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $no = $_POST['no_presensi'];
    $kelas = $_POST['kelas'];

    mysqli_query($conn, "UPDATE siswa SET 
        nama='$nama',
        no_presensi='$no',
        kelas='$kelas'
        WHERE id='$id'
    ");

    header("Location: index.php");
}
?>