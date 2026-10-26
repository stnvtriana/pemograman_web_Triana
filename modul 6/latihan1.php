<?php

class Pengguna {
    public $nama;
    public $email;

    public function tampilkanData() {
        echo "Nama: " . $this->nama . "<br>";
        echo "Email: " . $this->email;
    }
}

$pengguna1 = new Pengguna();
$pengguna1->nama = "Andi";
$pengguna1->email = "andi@email.com";
$pengguna1->tampilkanData();

?>
