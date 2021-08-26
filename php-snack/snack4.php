<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- Creare un array contenente qualche alunno di un’ipotetica classe. -->
<!-- Ogni alunno avrà i seguenti dati: -->
<!-- nome -->
<!-- cognome -->
<!-- un array contenente i suoi voti scolastici -->
<!-- Stampare nome, cognome e la media dei voti di ogni alunno. -->


<?php

$alunni = [
    [
        "nome" => "gigi",
        "cognome" => "Ceruleo",
        "voti" => [8,7,5]
    ],
    [
        "nome" => "luigi",
        "cognome" => "bianchi",
        "voti" => [8,7,5]
    ],
    [
        "nome" => "mario",
        "cognome" => "Rossi",
        "voti" => [8,7,5]
    ],
];

for ($i = 0; $i < count($alunni); $i++) {
    
    $mediaVoti = array_sum($alunni[$i]['voti']) / count($alunni[$i]['voti']);
    
    echo "nome: {$alunni[$i]['nome']} <br> cognome: {$alunni[$i]['cognome']} <br> media: {$mediaVoti} <br><br>";
};

?>

</body>
</html>