<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping</title>
</head>
<body>
    <?php
    echo "perulangan FOR bilangan genap dari 1 sampai 10 </br>";
    for ($x = 2; $x <= 10; $x += 2){
    echo "$x </br>";
    }

    echo "</br> perulangan WHILE bilangan ganjil dari 1 sampai 10 </br>";
    $y=1;
    while ($y <= 10){
        echo "$y </br>";
        $y += 2;
    }

    echo "</br> perulangan DO...WHile bilangan prima kurang dari 20 </br>";
    $num = 2;

    do {
        $isPrime = true;
        
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                $isPrime = false;
                break;
            }
        }

        if ($isPrime) {
            echo $num . "</br>";
        }
        
        $num++;
    } while ($num < 20);
        ?>
    </body>
    </html>