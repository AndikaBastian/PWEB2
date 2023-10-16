<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branching</title>
</head>
<body>
    <h1>Cek Angka</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Masukkan nilai x: <input type="number" name="angka">
        <input type="submit" value="Cek">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka = $_POST["angka"];

        if ($angka > 0) {
            echo "Angka $angka adalah bilangan positif.";
        } elseif ($angka < 0) {
            echo "Angka $angka adalah bilangan negatif.";
        } else {
            echo "Angka $angka adalah bilangan nol.";
        }
    }
    ?>
</body>
</html>