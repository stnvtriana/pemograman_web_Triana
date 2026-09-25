<?php
class mahasiswa {
    public $nim;
    public $nama;
    public $prodi;
    public $semester;

    public function tampilkanData($nim, $nama, $prodi, $semester) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->semester = $semester;
    }
}

$mhs1 = new mahasiswa();
$mhs2 = new mahasiswa();

$mhs1->nim = "202457201064";
$mhs1->nama = "Ana";
$mhs1->prodi = "Sistem Informasi";
$mhs1->semester = "V";

$mhs2->nim = "202457201065";
$mhs2->nama = "Ani";
$mhs2->prodi = "Sistem Informasi";
$mhs2->semester = "V";

echo $mhs1->nim . "<br>";
echo $mhs1->nama . "<br>";
echo $mhs1->prodi . "<br>";
echo $mhs1->semester . "<br>";

echo $mhs2->nim . "<br>";
echo $mhs2->nama . "<br>";
echo $mhs2->prodi . "<br>";
echo $mhs2->semester . "<br>";


?>