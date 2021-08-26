<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>

<!-- creamo un array con le partite di basket -->
<!-- ogni array avrà una squadra di casa e una ospite con i relativi punteggi -->
<!-- stampiamo a schermo tutte le partite con questo schema -->
<!-- Olimpia Milano - Cantù | 55-60 -->

<?php

$partite = [
    [
        "casa" => "OlimpiaMilano",
        "ospite" => "Cantù",
        "casaPunti" => 55,
        "ospitePunti" => 60
    ],
    [
        "casa" => "VirtusBologna",
        "ospite" => "VirtusRoma",
        "casaPunti" => 40,
        "ospitePunti" => 30
    ],
    [
        "casa" => "F.C.Matera",
        "ospite" => "Inter",
        "casaPunti" => 55,
        "ospitePunti" => 1
    ],
];

for ($i = 0; $i < count($partite); $i++) {
  
    echo "{$partite[$i]['casa']} - {$partite[$i]['ospiti']} - {$partite[$i]['casaPunti']} - {$partite[$i]['ospitiPunti']}";
}

?>

</main>

</body>
</html>