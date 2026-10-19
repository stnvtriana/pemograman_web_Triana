<?php

class mahasiswa{

public $nama;
private $nilai;

public function getNilai(){
    return $this->nilai;

}
public function setNilai($nilai){
    $this->nilai = $nilai;
}

}
$mhs1 = new mahasiswa();
$mhs1-> nama = "Andi <br>";
$mhs1->setNilai(90);
echo "Nama : " . $mhs1-> nama;
echo "Nilai : ". $mhs1->getNilai();
?>
