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

?>