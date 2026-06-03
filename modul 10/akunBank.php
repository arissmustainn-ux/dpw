<?php

class akunBank
{
    protected $accountNumber;
    protected $jmlUang;
    protected $nama;   // variabel $nama yang ditambahkan

    public function __construct($nomorAkun, $nominal)
    {
        $this->accountNumber = $nomorAkun;
        $this->jmlUang       = $nominal;
    }

    // ── Getter & Setter $nama ──────────────────────────────────
    public function getNama()
    {
        return $this->nama;
    }

    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    // ── Getter & Setter $accountNumber ────────────────────────
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($nomorAkun)
    {
        $this->accountNumber = $nomorAkun;
    }

    // ── Fungsi transaksi ──────────────────────────────────────

    // Menambahkan jumlah uang
    public function tambahUang($jumlah)
    {
        if ($jumlah > 0) {
            $this->jmlUang += $jumlah;
            return "Berhasil menambahkan Rp " . number_format($jumlah, 0, ',', '.') .
                   ". Saldo sekarang: Rp " . number_format($this->jmlUang, 0, ',', '.');
        }
        return "Nominal tidak valid.";
    }

    // Mengurangi jumlah uang
    public function kurangUang($jumlah)
    {
        if ($jumlah > 0 && $jumlah <= $this->jmlUang) {
            $this->jmlUang -= $jumlah;
            return "Berhasil menarik Rp " . number_format($jumlah, 0, ',', '.') .
                   ". Saldo sekarang: Rp " . number_format($this->jmlUang, 0, ',', '.');
        }
        return "Saldo tidak mencukupi atau nominal tidak valid.";
    }

    // Menampilkan jumlah uang
    public function tampilkanSaldo()
    {
        return "Saldo akun [" . $this->accountNumber . "] atas nama " .
               $this->nama . ": Rp " . number_format($this->jmlUang, 0, ',', '.');
    }

    // Menghitung pajak (11% dari saldo)
    public function hitungPajak()
    {
        $pajak = $this->jmlUang * 0.11;
        return "Pajak (11%) untuk akun [" . $this->accountNumber . "]: Rp " .
               number_format($pajak, 0, ',', '.');
    }
}
