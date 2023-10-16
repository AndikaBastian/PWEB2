<?php
//membuat class
class mahasiswa {
    //menulis properti
    var $nim;
    var $nama;
    var $alamat;

    function __construct() {
        echo "saya mahasiswa Teknik Informatika";
        echo "</br>";
    }

    function __destruct() {
        echo "Politeknik Negeri Cilacap";
        echo "</br>";
    }

    //method untuk menampilkan nama
    function tampil_nama() {
        //isi method
        return "nama: Andika";
    }

    function tampil_mahasiswa() {
        return "tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }

    //method untuk menampilkan alamat
    function tampil_alamat() {
        //isi method
        
    }
}

class dosen {
    var $nidn;
    var $nama;
    var $prodi;

    function tampil_nama() {
        return "nama saya adalah Andika Bastian";
    }

    function tampil_alamat() {

    }
}

//membuat objek nama_mahasiswa
$nama_mahasiswa=new mahasiswa();

$nama_dosen = new dosen();

//menampilkan objek
echo $nama_mahasiswa->tampil_nama();
echo "</br>";

echo $nama_mahasiswa->tampil_mahasiswa();
echo "</br>";

echo $nama_dosen->tampil_nama();
echo "</br>";

?>