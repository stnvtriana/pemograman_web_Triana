<?php
class mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;
    public $nilai;
    public $grade;

    public function tampilkanData() {
        echo "NIM : $this->nim<br>";
        echo "Nama : $this->nama<br>";
        echo "Prodi : $this->prodi<br>";
        echo "Semester : $this->semester<br>";
        echo "Nilai : $this->nilai<br>";
        echo "Grade : $this->grade<br>";
    }

    public function grade() {
        if ($this->nilai >= 80) {
            return "A";
        } elseif ($this->nilai >= 70) {
            return "B";
        } elseif ($this->nilai >= 60) {
            return "C";
        } elseif ($this->nilai >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}
$mhs = new mahasiswa();
$mhs1  = new mahasiswa();

$mhs->nim = "202457201064";
$mhs->nama = "Triana";
$mhs->prodi = "Sistem Informasi";
$mhs->semester = "V";
$mhs->nilai = 85;
$mhs->grade = $mhs->grade() . "<br>";

$mhs1->nim = "202457201065";
$mhs1->nama = "Triani";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = "V";
$mhs1->nilai = 75;
$mhs1->grade = $mhs1->grade();


$mhs->tampilkanData();
$mhs1->tampilkanData();
?>