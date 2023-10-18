<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';

$database = new Database();
$db = $database->getkoneksi();

if (isset($_POST['submit'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $mahasiswaController = new MahasiswaController($db);
    $result = $mahasiswaController->createMahasiswa($nim, $nama, $alamat, $no_telp);

    if ($result){
        header("Location:index.php");
    }else{
        header("Location:tambah.php");
    }
}
?>