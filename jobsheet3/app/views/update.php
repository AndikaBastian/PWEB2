<!DOCTYPE html>
<html>
<head>
</head>
<body style="display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;">
    <div style="text-align: center;">
        <form>
            <h3>nim: </h3>
                <h3><input type="hidden" name="nim" value="<?php echo $d['nim'] ?>">
                <input type="text" name="nim" value="<?php echo $d['nim'] ?>"></h3>
        
            <h3>nama:
            <input type="text" name="nama" value="<?php echo $d['nama'] ?>"></h3>
      
            <h3>alamat:
            <textarea name="alamat" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea></h3>

            <h3><button type="submit" class="btn btn-success" value="simpan">Simpan</button></h3>
        </form>
    </div>
</body>
</html>
