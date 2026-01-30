<?php 
class Tugas {
    public $nama;
    public $deskripsi;
    public $status;

    public function getInfo() {
        return "Nama Tugas : {$this->nama} <br>" . 
               "Deskripsi: {$this->deskripsi} <br>" . 
               "Status: {$this->status} <br>";
    }
}

// menambah objek
$tugas1 = new Tugas();
$tugas1->nama = "Belajar PHP";
$tugas1->deskripsi = "Mempelajari dasar-dasar PHP";
$tugas1->status = "Belum Selesai";

echo $tugas1->getInfo();
?>