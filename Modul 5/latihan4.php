<?php

class mahasiswa{

private $nama;
private $nilai;

public function setNama($nama){
    $this->nama= $nama;

}
public function setNilai($nilai){
    if ($nilai >= 0 && $nilai <= 100){
        $this->nilai = $nilai;
    }else {

    echo "Nilai harus berada antara 0 sampai 100.";
    }
}

public function getNama(){
    return $this->nama;
}
public function getNilai(){
    return $this->nilai;
}

}
$mhs1 = new mahasiswa();
$mhs1-> nama = "Andi <br>";
$mhs1->setNilai(90);
echo "Nama : " . $mhs1-> nama;
echo "Nilai : ". $mhs1->getNilai();
?>
