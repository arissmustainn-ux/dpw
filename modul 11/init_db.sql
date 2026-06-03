-- Buat database
CREATE DATABASE IF NOT EXISTS db_praktikum;
USE db_praktikum;

-- Tabel t_dosen
CREATE TABLE IF NOT EXISTS t_dosen (
    idDosen    INT          NOT NULL AUTO_INCREMENT PRIMARY KEY,
    namaDosen  VARCHAR(50)  NOT NULL,
    noHP       VARCHAR(25)  NOT NULL
);

-- Tabel t_mahasiswa
CREATE TABLE IF NOT EXISTS t_mahasiswa (
    npm       INT          NOT NULL PRIMARY KEY,
    namaMhs   VARCHAR(50)  NOT NULL,
    prodi     VARCHAR(25)  NOT NULL,
    alamat    VARCHAR(70)  NOT NULL,
    noHP      VARCHAR(25)  NOT NULL
);

-- Tabel t_matakuliah
CREATE TABLE IF NOT EXISTS t_matakuliah (
    kodeMK  INT          NOT NULL PRIMARY KEY,
    namaMK  VARCHAR(70)  NOT NULL,
    sks     INT          NOT NULL,
    jam     INT          NOT NULL
);

-- Data contoh t_dosen
INSERT INTO t_dosen (namaDosen, noHP) VALUES
('Dr. Ahmed Yusuf, M.Sc', '081222333444'),
('Jarwo Slamet Joyo, Ph.D', '081444333555');

-- Data contoh t_mahasiswa
INSERT INTO t_mahasiswa VALUES
(2101001, 'Budi Santoso', 'Teknik Informatika', 'Jl. Merdeka No.10 Madiun', '085611223344'),
(2101002, 'Siti Rahayu', 'Sistem Informasi', 'Jl. Diponegoro No.5 Madiun', '085799887766');

-- Data contoh t_matakuliah
INSERT INTO t_matakuliah VALUES
(101, 'Pemrograman Web', 3, 3),
(102, 'Basis Data', 3, 3),
(103, 'Algoritma dan Pemrograman', 4, 4);
