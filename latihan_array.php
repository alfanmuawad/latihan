<?php 
    $kendaraan = [
        [
        "Merk"=>"avansa",
        "Warna"=>"silver",
        "Plate"=>"Z0001Z"
        ],
        [
        "Merk"=>"brio",
        "Warna"=>"putih",
        "Plate"=>"Z0002Z"
        ],
        [
        "Merk"=>"bmw",
        "Warna"=>"biru",
        "Plate"=>"Z0003Z"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
</head>
<body>
    <h1>daftar mobil</h1>
    <?php foreach ($kendaraan as $mobil) :?> 
    <ul>
        <li>Merk : <?=$mobil["Merk"];?></li>
        <li>Warna : <?=$mobil["Warna"];?></li>
        <li>Plate : <?=$mobil["Plate"];?></li>
    </ul>
    <?php endforeach?>
</body>
</html>