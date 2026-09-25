<?php

class kendaraan {
    public $nomor;
    public $merk;
    public $jenis;
    public $warna;
    public $status;

    public function tampilkanData() {
        echo "Nomor : $this->nomor<br>";
        echo "Merk : $this->merk<br>";
        echo "Jenis : $this->jenis<br>";
        echo "Warna : $this->warna<br>";
    }

    public function statusKendaraan() {
        if ($this->status == "tersedia") {
            return "Kendaraan tersedia untuk disewa.";
        } elseif ($this->status == "disewa") {
            return "Kendaraan sedang disewa.";
        } else {
            return "Status kendaraan tidak diketahui.";
        }
    }
}

echo "<h3>Data Kendaraan</h3>";
echo "<h3>====================</h3><br>";

$kendaraan1 = new kendaraan();
$kendaraan2 = new kendaraan();

$kendaraan1->nomor = "B 1234 ABC";
$kendaraan1->merk = "Toyota";
$kendaraan1->jenis = "Sedan";
$kendaraan1->warna = "Hitam";
$kendaraan1->status = "tersedia";

$kendaraan2->nomor = "B 5678 DEF";
$kendaraan2->merk = "Honda";
$kendaraan2->jenis = "SUV";
$kendaraan2->warna = "Putih";
$kendaraan2->status = "disewa";

$kendaraan1->tampilkanData();
echo $kendaraan1->statusKendaraan() . "<br> <br>";

$kendaraan2->tampilkanData();
echo $kendaraan2->statusKendaraan() . "<br><br>";


class pelanggan {
    public $id;
    public $nama;
    public $alamat;
    public $telepon;

    public function tampilkanData() {
        echo "ID : $this->id<br>";
        echo "Nama : $this->nama<br>";
        echo "Alamat : $this->alamat<br>";
        echo "Telepon : $this->telepon<br>";
    }

    public function sewaKendaraan($kendaraan) {
        if ($kendaraan->status == "tersedia") {
            $kendaraan->status = "disewa";
            return "Pelanggan $this->nama berhasil menyewa kendaraan $kendaraan->merk.";
        } else {
            return "Kendaraan $kendaraan->merk tidak tersedia untuk disewa.";
        }
    }
}

echo "<h3>Data Pelanggan</h3>";
echo "<h3>====================</h3><br>";

$pelanggan1 = new pelanggan();
$pelanggan2 = new pelanggan();

$pelanggan1->id = 1;
$pelanggan1->nama = "Triana";
$pelanggan1->alamat = "Jl. Cempaka No. 123";
$pelanggan1->telepon = "081234567890";

$pelanggan2->id = 2;
$pelanggan2->nama = "Triani";
$pelanggan2->alamat = "Jl. Melati No. 456";
$pelanggan2->telepon = "081987654321";

$pelanggan1->tampilkanData();
echo $pelanggan1->sewaKendaraan($kendaraan1) . "<br><br>";

$pelanggan2->tampilkanData();
echo $pelanggan2->sewaKendaraan($kendaraan2) . "<br><br>";

?>