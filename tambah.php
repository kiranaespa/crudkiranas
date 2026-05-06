<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Siswa</h2>
        <a href="index.php" class="btn btn-primary" style="margin-bottom: 20px;">Kembali</a>
        
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Nama Siswa</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>No. Presensi</label>
                <input type="number" name="no_presensi" required>
            </div>
            <div class="form-group">
                <label>Kelas</label>
                <input type="text" name="kelas" required>
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" required>
            </div>
            <button type="submit" name="tambah" class="btn btn-success">Simpan Data</button>
        </form>
    </div>
</body>
</html>