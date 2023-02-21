<?php
require("Human.php");
require("Mahasiswa.php");
require("Akademik.php");

// Inisialisasi data
$mahasiswa = new Mahasiswa();
$mahasiswa->setNik("1313144881");
$mahasiswa->setName("Akmal Zulkifli");
$mahasiswa->setGender('He/Him');
$mahasiswa->setKampus("UPI");
$mahasiswa->setEmail("akmalzulkifli29@upi.edu");
$mahasiswa->setNIM("2101310");
$mahasiswa->setProdi("Ilmu Komputer");
$mahasiswa->setFakultas("FPMIPA");

// Buat array untuk menyimpan data mahasiswa
$mahasiswaList = array();
$mahasiswaList[] = $mahasiswa;

// Tampilkan data mahasiswa
echo "Daftar Mahasiswa:" . "<br>";
for ($i = 0; $i < count($mahasiswaList); $i++) {
    $mahasiswa = $mahasiswaList[$i];
    echo "NIK: " . $mahasiswa->getNik() . "<br>";
    echo "Nama: " . $mahasiswa->getName() . "<br>";
    echo "Jenis Kelamin: " . $mahasiswa->getGender() . "<br>";
    echo "Kampus: " . $mahasiswa->getKampus() . "<br>";
    echo "Email: " . $mahasiswa->getEmail() . "<br>";
    echo "NIM: " . $mahasiswa->getNIM() . "<br>";
    echo "Program Studi: " . $mahasiswa->getProdi() . "<br>";
    echo "Fakultas: " . $mahasiswa->getFakultas();
}
