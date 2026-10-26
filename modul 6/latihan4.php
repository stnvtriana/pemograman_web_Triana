<?php
class Pengguna {
    
public function tampilkanPeran() {
        echo "Peran : Pengguna Sistem Informasi";
    }
}

class Mahasiswa extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran : Mahasiswa";
    }
}

class Dosen extends Pengguna {
    public function tampilkanPeran() {
        echo "Peran : Dosen";
    }
}

$mhs1 = new Mahasiswa();
$dosen1 = new Dosen();

$mhs1->tampilkanPeran();
echo "<br>";
$dosen1->tampilkanPeran();
?>