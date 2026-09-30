<?php

class mahasiswa{

public $nama;
public $prodi;

public function __construct($nama, $prodi){


    $this -> nama = $nama;
    $this -> prodi = $prodi;

    }

public function tampilkanData (){
    echo "Nama : " . $this->nama. "<br>";
    echo "Prodi : " .  $this->prodi. "<br>";
       }
}

$mhs1 = new mahasiswa ("Andi", "Sistem Informasi");
$mhs2 = new mahasiswa ("Budi", "Teknik Informatika");

$mhs1->tampilkanData();
echo "<hr>";

$mhs2->tampilkanData();
echo "<hr>";

?>

