<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php
    function persegi_panjang($p, $l){
        return $p * $l;
    }

    function lingkaran($r){
        return 3.14 * $r * $r;
    }

    $luas_persegi_panjang = 0;
    $luas_lingkaran = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $panjang = $_POST["p"];
        $lebar = $_POST["l"];
        $jari_jari = $_POST["r"];

        $luas_persegi_panjang = persegi_panjang($panjang, $lebar);
        $luas_lingkaran = lingkaran($jari_jari);
    }
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        luas persegi panjang <br>
        Masukkan panjang: <input type="number" name="p" id="p"> 
        Masukkan lebar: <input type="number" name="l" id="l"><br><br>
        luas lingkaran <br>
        Masukkan jari-jari lingkaran: <input type="number" name="r" id="r">
        <input type="submit" value="Hitung"><br><br>
    </form>

    <?php
    echo "Luas persegi panjang: " . $luas_persegi_panjang . "<br>";
    echo "Luas lingkaran: " . $luas_lingkaran . "<br>";
    ?>
</body>
</html>
