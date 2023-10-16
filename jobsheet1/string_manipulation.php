<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string manipulation</title>
</head>
<body>
    <?php
    $x = "selamat belajar PHP! </br>";
    echo $x;
    echo strtoupper($x);
    echo strtolower($x);
    echo substr($x, 0, 7);
    ?>
</body>
</html>