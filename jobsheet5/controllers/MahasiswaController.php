<?php

include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    private $model;

    public function __construct($db){
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }

    public function createMahasiswa($nim, $nama, $alamat, $no_telp){
        return $this->model->createMahasiswa($nim, $nama, $alamat, $no_telp);
    }
}

?>