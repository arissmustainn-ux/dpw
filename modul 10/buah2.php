<?php

/*
 * ============================================================
 * SOAL 6 - buah2.php (ANALISIS ERROR)
 * ============================================================
 * KODE ASLI YANG DIBERIKAN (menyebabkan error):
 * ------------------------------------------------------------
 *   class buah2 {
 *       public $nama;
 *       public $warna;
 *       public $bhobot;
 *
 *       function set_name($n)             { $this->nama   = $n; }
 *       protected function set_color($n)  { $this->warna  = $n; }
 *       private   function set_weight($n) { $this->bhobot = $n; }
 *   }
 *
 *   $mango = new buah2();
 *   $mango->set_name('Mango');
 *   $mango->set_color('Yellow');   // ERROR di sini
 *   $mango->set_weight('300');     // ERROR di sini
 *
 * ------------------------------------------------------------
 * ANALISIS PENYEBAB ERROR:
 *   1. $mango->set_color('Yellow')
 *      → Method set_color() dideklarasikan sebagai PROTECTED.
 *        Method protected tidak bisa dipanggil dari luar kelas.
 *        Hanya dapat dipanggil dari dalam kelas atau kelas turunan.
 *
 *   2. $mango->set_weight('300')
 *      → Method set_weight() dideklarasikan sebagai PRIVATE.
 *        Method private hanya dapat dipanggil dari dalam kelas
 *        itu sendiri, sama sekali tidak dari luar.
 *
 * SOLUSI PERBAIKAN:
 *   Ubah access modifier method set_color() dan set_weight()
 *   menjadi PUBLIC agar dapat dipanggil dari luar kelas.
 * ============================================================
 */

class buah2
{
    public $nama;
    public $warna;
    public $bhobot;

    // public: bisa dipanggil dari luar kelas
    public function set_name($n)
    {
        $this->nama = $n;
    }

    // DIPERBAIKI: protected → public
    public function set_color($n)
    {
        $this->warna = $n;
    }

    // DIPERBAIKI: private → public
    public function set_weight($n)
    {
        $this->bhobot = $n;
    }
}

// ── Kode yang sudah diperbaiki ────────────────────────────────
$mango = new buah2();
$mango->set_name('Mango');
$mango->set_color('Yellow');
$mango->set_weight('300');

echo "Nama  : " . $mango->nama   . "<br>";
echo "Warna : " . $mango->warna  . "<br>";
echo "Berat : " . $mango->bhobot . " gram<br>";
