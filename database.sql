CREATE DATABASE absensi_siswa;

USE absensi_siswa;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    no_presensi INT NOT NULL,
    kelas VARCHAR(50) NOT NULL,
    foto VARCHAR(255) NOT NULL
);

INSERT INTO siswa (nama, no_presensi, kelas, foto) VALUES
('Budi', 1, 'X RPL', 'budi.jpg'),
('Siti', 2, 'X RPL', 'siti.jpg');