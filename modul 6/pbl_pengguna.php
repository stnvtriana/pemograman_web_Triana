<?php

class Pengguna {
    public $nama;
    public $email;

    public function __construct($nama, $email) {
        $this->nama = $nama;
        $this->email = $email;
    }

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Pengguna Umum";
    }
}

class Mahasiswa extends Pengguna {
    public $nim;
    public $prodi;

    public function __construct($nama, $email, $nim, $prodi) {
        parent::__construct($nama, $email);
        $this->nim = $nim;
        $this->prodi = $prodi;
    }

    public function tampilkanDataMahasiswa() {
        $this->tampilkanData();
        echo "NIM: " . $this->nim . "<br>";
        echo "Program Studi: " . $this->prodi . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public $nidn;
    public $mataKuliah;

    public function __construct($nama, $email, $nidn, $mataKuliah) {
        parent::__construct($nama, $email);
        $this->nidn = $nidn;
        $this->mataKuliah = $mataKuliah;
    }

    public function tampilkanDataDosen() {
        $this->tampilkanData();
        echo "NIDN: " . $this->nidn . "<br>";
        echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Dosen";
    }
}

class Admin extends Pengguna {
    public $idPegawai;
    public $bagian;

    public function __construct($nama, $email, $idPegawai, $bagian) {
        parent::__construct($nama, $email);
        $this->idPegawai = $idPegawai;
        $this->bagian = $bagian;
    }

    public function tampilkanDataAdmin() {
        $this->tampilkanData();
        echo "ID Pegawai: " . $this->idPegawai . "<br>";
        echo "Bagian: " . $this->bagian . "<br>";
    }

    public function tampilkanPeran() {
        echo "Peran : Admin";
    }
}

$mhs = new Mahasiswa("Andi", "andi@email.com", "2101001", "Sistem Informasi");
$dosen = new Dosen("Budi", "budi@email.com", "12345", "Pemrograman Web");
$admin = new Admin("Citra", "citra@email.com", "001", "Keuangan");

echo "<h3>Data Mahasiswa:</h3>";
$mhs->tampilkanDataMahasiswa();
$mhs->tampilkanPeran();

echo "<br>";

echo "<hr>";
echo "<h3>Data Dosen:</h3>";
$dosen->tampilkanDataDosen();
$dosen->tampilkanPeran();
echo "<br>";

echo "<hr>";
echo "<h3>Data Admin:</h3>";
$admin->tampilkanDataAdmin();
$admin->tampilkanPeran();

?>