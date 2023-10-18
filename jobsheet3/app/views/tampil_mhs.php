<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
//memanggil class database
include '../classes/Database.php';
//instansiasi class database
$db=new database;
include 'bootstrap.php';
?>


<div class="px-5 py-5">

<?php
error_reporting(E_ERROR | E_PARSE);

if ($_GET['success'] === "tambah") {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Di Tambahkan<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} elseif ($_GET['success'] === "update") {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Di Edit<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} elseif ($_GET['success'] === "hapus") {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Di Hapus<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

    <h3>Data mahasiswa</h3> <br>
<a href="input_mhs.php" class="btn btn-primary mb-3">Tambah mahasiswa</a>


<table border="1" class="table">
<tr>
    <th>no</th>
    <th>nim</th>
    <th>nama</th>
    <th>alamat</th>
    <th>aksi</th>
</tr>
<?php
$no=1;
foreach ($db->tampil_mhs() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['nim']; ?></td>
        <td><?php echo $x['nama']; ?></td>
        <td><?php echo $x['alamat']; ?></td>
        <td>
        <a href="edit_mhs.php?id=<?php echo $x['nim'];?>&aksi=edit" class="btn btn-warning">edit mahasiswa</a>
        <a href="proses_mhs.php?id=<?php echo $x['nim'];?>&aksi=hapus" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">hapus mahasiswa</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>