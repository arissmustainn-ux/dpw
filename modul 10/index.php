<?php

require_once ('kelas/Manusia.php');

// Objek $andi
$andi = new Manusia();
$andi->setNama("Andi Pratama");

// Objek $budi
$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(22);

// Tampilkan nama lengkap $budi
echo "Nama lengkap Budi : " . $budi->getNama();
echo "<br>";

// Tambah dengan identitas sendiri
$saya = new Manusia();
$saya->setNama("Rizky Dwi Cahyo");  // Ganti dengan nama Anda
$saya->setUmur(20);

echo "Nama saya        : " . $saya->getNama();
echo "<br>";
echo "Umur saya        : " . $saya->getUmur() . " tahun";
echo "<br>";

// Tampilkan NIK (menggunakan method publik tampilkanNIK())
echo "NIK Budi         :" . $budi->tampilkanNIK();
echo "<br>";
echo "NIK Saya         :" . $saya->tampilkanNIK();
echo "<br>";

/*
 * KESIMPULAN:
 * ------------------------------------------------------------
 * 1. Class adalah blueprint/cetakan untuk membuat objek.
 *    Objek dibuat dengan keyword "new" diikuti nama kelas.
 *
 * 2. Access Modifier mengatur hak akses properti/method:
 *    - public    : dapat diakses dari mana saja (dalam/luar kelas)
 *    - protected : hanya dapat diakses dalam kelas dan kelas turunannya
 *    - private   : hanya dapat diakses di dalam kelas itu sendiri
 *
 * 3. Getter adalah method untuk MEMBACA nilai properti (terutama
 *    yang protected/private), sedangkan Setter adalah method untuk
 *    MENGISI/MENGUBAH nilai properti dari luar kelas.
 *
 * 4. Karena $nik bersifat protected dan getNIK() bersifat private,
 *    kita tidak bisa memanggil $budi->getNIK() langsung dari luar kelas.
 *    Solusinya: buat method publik pembungkus (tampilkanNIK()) yang
 *    memanggil getNIK() dari dalam kelas.
 *
 * 5. Dengan OOP, kode menjadi lebih terorganisir, mudah digunakan
 *    ulang (reusable), dan mudah dikembangkan.
 * ------------------------------------------------------------
 */
?>
