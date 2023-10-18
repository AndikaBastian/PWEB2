<?php
include '../classes/Database.php';
$db=new Database();
?>

   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<form action="proses_buku.php?aksi=update" method="post">
    <?php
    foreach($db->edit($_GET['id']) as $d){

    ?>

<!DOCTYPE html>
<html>
<head>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="background-color: #F0ECE3; padding: 20px; text-align: auto;">
        <form>
            <div style="text-align: center">
                <h3>edit data buku</h3>
            </div>
             <br>
            <h3>id buku:</h3>
                <h3><input type="hidden" name="id_buku" value="<?php echo $d['id_buku'] ?>">
                <input type="text" name="id_buku" value="<?php echo $d['id_buku'] ?>"></h3>
        
            <h3>judul buku:</h3>
            <h3><input type="text" name="judul_buku" value="<?php echo $d['judul_buku'] ?>"></h3>
      
            <h3>penerbit:</h3>
            <h3><input type="text" name="penerbit" value="<?php echo $d['penerbit'] ?>"></h3>
            
            <div style="text-align: right">
            <h3><button type="submit" class="btn btn-success mt-3" value="simpan">Simpan</button></h3>
            </div>
        </form>
    </div>
</body>
</html>


    <?php
    }
    ?> 
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
