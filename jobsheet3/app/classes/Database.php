<?php
class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="modul4";

    function __construct() {
        $koneksi= mysqli_connect($this->host, $this->username, $this->password, $this->db)
    }

    function tampil_buku(){
        $data=mysqli_query($this->koneksi, "select * from buku");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
}
?>