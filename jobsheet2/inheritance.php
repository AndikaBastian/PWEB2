<?php
class manusia {
    public $nama_saya;
    protected $jenis_kelamin = "laki-laki";
    private $alamat;

    function panggil_nama($saya) {
        $this->nama_saya = $saya;
    }

    function panggil_jk() {
        return $this->jenis_kelamin;
    }

    function panggil_alamat($alamat) {
        $this->alamat_saya = $alamat;
    }
}
// class turunan atau sub class dari manusia
class mahasiswa extends manusia {
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa){
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika= new mahasiswa();

$informatika->panggil_nama("Andika ");
$informatika->panggil_mahasiswa("Bastian");
$informatika->panggil_alamat("Donan");

//tampilkan isi properti
echo "nama depan saya : ".$informatika->nama_saya. "</br>";
echo "nama belakang : ".$informatika->nama_mahasiswa. "</br>";
echo "jenis kelamin : ".$informatika->panggil_jk(). "</br>";
echo "alamat : ".$informatika->alamat_saya;

?>