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
    <h3>Data buku</h3> <br>
<a href="input_buku.php" class="btn btn-primary mb-3">Tambah buku</a>


<table border="1" class="table">
<tr>
    <th>no</th>
    <th>id buku</th>
    <th>judul buku</th>
    <th>penerbit</th>
    <th>aksi</th>
</tr>
<?php
$no=1;
foreach ($db->tampil_buku() as $x){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['id_buku']; ?></td>
        <td><?php echo $x['judul_buku']; ?></td>
        <td><?php echo $x['penerbit']; ?></td>
        <td>
        <a href="edit_buku.php?id=<?php echo $x['id_buku'];?>&aksi=edit" class="btn btn-warning">edit buku</a>
        <a href="proses_buku.php?id=<?php echo $x['id_buku'];?>&aksi=hapus" class="btn btn-danger">hapus buku</a>
        </td>
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>