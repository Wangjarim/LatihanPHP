<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Kondisi bilangan genap atau ganjil</h2>

    <?php

$angka = 7;

if ($angka % 2 == 0) {
    echo "$angka adalah bilangan genap";
} else {
    echo "$angka adalah bilangan ganjil";
}
?>
</body>
</html>