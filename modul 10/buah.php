<?php

/*
 * ============================================================
 * SOAL 5 - buah.php (ANALISIS ERROR)
 * ============================================================
 * KODE ASLI YANG DIBERIKAN (menyebabkan error):
 * ------------------------------------------------------------
 *   class buah {
 *       public    $nama;
 *       protected $warna;
 *       private   $berat;
 *   }
 *
 *   $mango = new buah();
 *   $mango->nama  = 'Mango';
 *   $mango->warna = 'Yellow';   // ERROR di sini
 *   $mango->buah  = '300';      // ERROR di sini
 *
 * ------------------------------------------------------------
 * ANALISIS PENYEBAB ERROR:
 *   1. $mango->warna = 'Yellow'
 *      → $warna bersifat PROTECTED, artinya tidak dapat diakses
 *        langsung dari luar kelas. Akses hanya diizinkan dari
 *        dalam kelas atau kelas turunannya.
 *
 *   2. $mango->buah = '300'
 *      → Nama properti yang benar adalah $berat, bukan $buah.
 *        Selain itu, $berat bersifat PRIVATE sehingga tidak dapat
 *        diakses langsung dari luar kelas sama sekali.
 *
 * SOLUSI PERBAIKAN:
 *   Tambahkan getter dan setter untuk properti protected/private,
 *   lalu gunakan setter tersebut untuk mengisi nilai dari luar kelas.
 * ============================================================
 */

class buah
{
    public    $nama;
    protected $warna;
    private   $berat;

    // Setter untuk $warna (protected)
    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    // Getter untuk $warna
    public function getWarna()
    {
        return $this->warna;
    }

    // Setter untuk $berat (private)
    public function setBerat($berat)
    {
        $this->berat = $berat;
    }

    // Getter untuk $berat
    public function getBerat()
    {
        return $this->berat;
    }
}

// ── Kode yang sudah diperbaiki ────────────────────────────────
$mango = new buah();
$mango->nama = 'Mango';
$mango->setWarna('Yellow');   // gunakan setter karena protected
$mango->setBerat('300');      // gunakan setter karena private (nama prop = $berat)

echo "Nama  : " . $mango->nama       . "<br>";
echo "Warna : " . $mango->getWarna() . "<br>";
echo "Berat : " . $mango->getBerat() . " gram<br>";
