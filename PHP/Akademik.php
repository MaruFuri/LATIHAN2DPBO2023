<?php
class Mahasiswa extends Akademik
{
    private $nim = '';
    private $prodi = '';
    private $fakultas = '';

    // Constructors
    public function __construct($nim = '', $prodi = '', $fakultas = '')
    {
        $this->nim = $nim;
        $this->prodi = $prodi;
        $this->fakultas = $fakultas;
    }

    // Getter NIM
    public function getNIM()
    {
        return $this->nim;
    }

    // Setter NIM
    public function setNIM($nim)
    {
        $this->nim = $nim;
    }

    // Getter Prodi
    public function getProdi()
    {
        return $this->prodi;
    }

    // Setter Prodi
    public function setProdi($prodi)
    {
        $this->prodi = $prodi;
    }

    // Getter Fakultas
    public function getFakultas()
    {
        return $this->fakultas;
    }

    // Setter Fakultas
    public function setFakultas($fakultas)
    {
        $this->fakultas = $fakultas;
    }
}
