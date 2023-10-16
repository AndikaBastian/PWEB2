<?php
// membuat class mahasiswa
class mahasiswa {
    //properti publik
    public $nama;
    //private property
    private $nim = "220302077";

    //public method
    public function tampilkan_nama() {
        //nilai kembalian
        return "nama saya Andika </br>";
    }

    //membuat private method
    function tampilkan_nim() {
        return "nim saya ".$this->nim;
    }
}

//membuat objek mahasiswa ke dalam variable mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>