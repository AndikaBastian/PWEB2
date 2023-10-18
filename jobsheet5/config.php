<?php

class database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "modul4";
    var $koneksi;

    function getkoneksi(){
        $this->koneksi = mysqli_connect($this->host,$this->username,$this->password,$this->db);
        if(!$this->koneksi){
            die("Gagal koneksi ke database".mysqli_connect_error());
        }
        return $this->koneksi;
    }
}

?>