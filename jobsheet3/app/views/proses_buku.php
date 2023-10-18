<?php
include '../classes/Database.php';
$db=new Database();

$aksi= $_GET['aksi'];
if ($aksi=="tambah"){
    $db->tambah_buku($_POST['id_buku'],$_POST['judul_buku'],$_POST['penerbit']);
    header("Location:tampil_buku.php?success=tambah");
}elseif ($aksi=="update"){
    $db->update($_POST['id'],$_POST['id_buku'],$_POST['judul_buku'],$_POST['penerbit']);
    header("Location:tampil_buku.php?success=update");
}elseif ($aksi=="hapus"){
    $db->hapus($_GET['id']);
    header("Location:tampil_buku.php?success=hapus");
}
?>