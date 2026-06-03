<?php

require_once ('kelas/akunBank.php');

// Buat dua objek akun bank
$data1 = new akunBank(nomorAkun: "001", nominal: 10000);
$data1->setNama("Andi Pratama");

$data2 = new akunBank(nomorAkun: "002", nominal: 10000);
$data2->setNama("Budi Santoso");

echo "====== DATA AKUN BANK ======<br><br>";

// Tampilkan saldo awal
echo $data1->tampilkanSaldo() . "<br>";
echo $data2->tampilkanSaldo() . "<br><br>";

// Tambah uang pada akun 1
echo $data1->tambahUang(5000) . "<br>";

// Kurangi uang pada akun 2
echo $data2->kurangUang(3000) . "<br><br>";

// Tampilkan saldo terbaru
echo $data1->tampilkanSaldo() . "<br>";
echo $data2->tampilkanSaldo() . "<br><br>";

// Hitung pajak
echo $data1->hitungPajak() . "<br>";
echo $data2->hitungPajak() . "<br>";
