<?php

class Buku {

    public $judul;
    public $penulis;
    public $harga;
    public $stok;
    public $diskon;

    // Constructor menerima semua data awal
    public function __construct($judul, $penulis, $harga, $stok, $diskon) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->stok = $stok;
        $this->diskon = $diskon;
    }

    public function tampilkanData() {
        echo "=== DATA BUKU ===<br>";
        echo "Judul   : " . $this->judul . "<br>";
        echo "Penulis : " . $this->penulis . "<br>";
        echo "Harga   : Rp " . number_format($this->harga, 0, ',', '.') . "<br>";
        echo "Stok    : " . $this->stok . " pcs<br>";
        echo "Diskon  : " . $this->diskon . "%<br><br>";
    }

    public function hitungStok($perubahan) {
        $stokBaru = $this->stok + $perubahan;

        if ($stokBaru < 0) {
            echo "Stok tidak cukup! (Sisa: {$this->stok})<br><br>";
        } else {
            $this->stok = $stokBaru; 
            echo "Perubahan Stok : " . $perubahan . "<br>";
            echo "Stok Sekarang  : " . $this->stok . " pcs<br><br>";
        }
    }

   
    public function hitungDiskon() {
        $potongan = ($this->harga * $this->diskon) / 100;
        $hargaAkhir = $this->harga - $potongan;

        echo "Potongan Diskon : Rp " . number_format($potongan, 0, ',', '.') . "<br>";
        echo "Harga Akhir    : Rp " . number_format($hargaAkhir, 0, ',', '.') . "<br><br>";
    }
}

// ==================== PEMANGGILAN ====================

// 1. Buat Objek (Judul, Penulis, Harga, Stok, Diskon)
$buku1 = new Buku("Pemrograman PHP", "Ahmad", 100000, 10, 15);
$buku2 = new Buku("Belajar JavaScript", "Budi", 80000, 5, 10);

// 2. Eksekusi satu per satu
$buku1->tampilkanData();
$buku1->hitungStok(-1);  
$buku1->hitungDiskon();  

$buku2->tampilkanData();
$buku2->hitungStok(-1);   
$buku2->hitungDiskon();  

?>