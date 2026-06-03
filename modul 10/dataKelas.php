<?php

require_once ('kelas/Mahasiswa.php');

$mhs1 = new mahasiswa(nama: "Nama Anda");
$mhs1->setNIM("NIM anda");
$mhs1->setKelas("Kelas anda");
$mhs1->setJurusan("Teknik Informatika");
$mhs1->setUmur(20);

// Tampilkan nama, nim, dan kelas dari $mhs1
echo "====== DATA MAHASISWA ======<br>";
echo "Nama    : " . $mhs1->getNama()   . "<br>";
echo "NIM     : " . $mhs1->getNim()    . "<br>";
echo "Kelas   : " . $mhs1->getKelas()  . "<br>";
echo "Jurusan : " . $mhs1->getJurusan(). "<br>";
echo "Umur    : " . $mhs1->getUmur()   . " tahun<br>";
