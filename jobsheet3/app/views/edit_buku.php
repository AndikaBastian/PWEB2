<?php
include '../classes/Database.php';
$db=new Database();
?>

<div class="px-5 py-5">
    <h3>edit data buku</h3>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<form action="proses_buku.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){

    ?>
    <table>
        <tr>
            <td>id buku</td>
            <td>
                <input type="hidden" name="id_buku" value="<?php echo $d['id_buku'] ?>">
                <input type="text" name="id_buku" value="<?php echo $d['id_buku'] ?>"></td>
        </tr>    
        <tr>
            <td>judul buku</td>
            <td><input type="text" name="judul_buku" value="<?php echo $d['judul_buku'] ?>"></td>
        </tr>
        <tr>
            <td>penerbit</td>
            <td><textarea name="penerbit" cols="30" rows="5"><?php echo $d['penerbit'] ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-success" value="simpan">Simpan</button></td>
        </tr>
    </table>
    <?php
    }
    ?> 
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</div>