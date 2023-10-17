<?php
include '../classes/Database.php';
$db=new Database();

$aksi= $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_mhs($_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("Location:tampil_mhs.php?success=tambah");
}elseif ($aksi=="update"){
    $db->update_mhs($_POST['id'],$_POST['nim'],$_POST['nama'],$_POST['alamat']);
    header("Location:tampil_mhs.php?success=update");
}elseif ($aksi=="hapus"){
    $db->hapus_mhs($_GET['id']);
    header("Location:tampil_mhs.php?success=hapus");
}
?>