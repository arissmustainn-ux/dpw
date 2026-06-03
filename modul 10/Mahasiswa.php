<?php

require_once "Manusia.php";

class mahasiswa extends Manusia
{
    protected $NIM;
    protected $jurusan;
    protected $kelas;

    public function __construct($nama)
    {
        // Manfaatkan fungsi dari kelas Manusia.php
        $this->setNama($nama);
    }

    // ── Getter & Setter $NIM ──────────────────────────────────
    public function getNim()
    {
        return $this->NIM;
    }

    public function setNIM($nim)
    {
        $this->NIM = $nim;
    }

    // ── Getter & Setter $jurusan ──────────────────────────────
    public function getJurusan()
    {
        return $this->jurusan;
    }

    public function setJurusan($jurusan)
    {
        $this->jurusan = $jurusan;
    }

    // ── Getter & Setter $kelas ────────────────────────────────
    public function getKelas()
    {
        return $this->kelas;
    }

    public function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }
}
