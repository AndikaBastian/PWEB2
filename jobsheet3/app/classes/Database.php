<?php
class database{
    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="modul4";
    var $koneksi;

    function __construct() {
       $this->koneksi= mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_buku(){
        $data=mysqli_query($this->koneksi, "select * from buku");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tampil_mhs(){
        $data=mysqli_query($this->koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambah_buku($id_buku, $judul_buku, $penerbit){
        mysqli_query($this->koneksi, "insert into buku(id_buku,judul_buku,penerbit) values('$id_buku','$judul_buku','$penerbit')");
    }

    function tambah_mhs($nim, $nama, $alamat){
        mysqli_query($this->koneksi, "insert into mahasiswa(nim,nama,alamat) values('$nim','$nama','$alamat')");
    }

    function edit($id){
        $data = mysqli_query($this->koneksi,"select * from buku where id_buku='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

     function edit_mhs($id){
        $data = mysqli_query($this->koneksi,"select * from mahasiswa where nim='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function update($id,$id_buku, $judul_buku, $penerbit){
        mysqli_query($this->koneksi, "update buku set id_buku='$id_buku',judul_buku='$judul_buku',penerbit='$penerbit' where id_buku='$id_buku'");
    }

     function update_mhs($id,$nim, $nama, $alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim',nama='$nama',alamat='$alamat' where nim='$nim'");
    }
    
    function hapus($id){
        mysqli_query($this->koneksi, "delete from buku where id_buku='$id'");
    }

    function hapus_mhs($id){
        mysqli_query($this->koneksi, "delete from mahasiswa where nim='$id'");
    }
}
?>