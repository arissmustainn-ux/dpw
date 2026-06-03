<?php

class Manusia
{
    // Deklarasi Variabel
    protected $name;
    protected $nik = "123212131243243";
    protected $umur;

    // Getter dan Setter untuk $name
    public function getNama()
    {
        return $this->name;
    }

    public function setNama($name)
    {
        $this->name = $name;
    }

    // Getter untuk $nik (private agar tidak bisa diakses langsung dari luar)
    private function getNIK()
    {
        return " nik {$this->nik} ";
    }

    // Method publik untuk menampilkan NIK (wrapper agar bisa dipanggil dari luar)
    public function tampilkanNIK()
    {
        return $this->getNIK();
    }

    // Getter dan Setter untuk $umur
    public function getUmur()
    {
        return $this->umur;
    }

    public function setUmur($umur)
    {
        $this->umur = $umur;
    }
}
