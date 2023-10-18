<?php

class Mahasiswa{
    private $koneksi;
    
    public function __construct($db){
        $this->koneksi = $db;
    }

    public function getAllMahasiswa(){
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    public function createMahasiswa($nim, $nama, $alamat, $no_telp){
        $query = "INSERT INTO mahasiswa (nim, nama, alamat, no_telp) VALUES ('$nim', '$nama', '$alamat', '$no_telp')";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }

    }
    
}

?>