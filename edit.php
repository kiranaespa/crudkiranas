<?php
include 'config/database.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Data Siswa</h2>
        <a href="index.php" class="btn btn-primary" style="margin-bottom: 20px;">Kembali</a>
        
        <form action="proses.php" method="post">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
            
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>No. Presensi</label>
                <input type="number" name="no_presensi" value="<?php echo $d['no_presensi']; ?>" required>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" value="<?php echo $d['kelas']; ?>" required>
            </div>
            
            <button type="submit" name="update" class="btn btn-success">Update Data</button>
        </form>
    </div>
</body>
</html>