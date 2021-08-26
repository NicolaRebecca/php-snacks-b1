<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
<!-- Utilizzare questo array di partenza e -->
<!-- stampare tutti gli insegnanti in un rettangolo grigio e tutti i PM in un -->
<!-- rettangolo verde. -->

<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

    <div class="teachers">
            
        <?php
            $key = array_keys($db);
            echo "<h4> {$key[0]}: </h4>";

            for($i = 0; $i < count($db[$key[0]]); $i++) {
                echo "{$db[$key[0]][$i]['name']} {$db[$key[0]][$i]['lastname']}<br>";
            }

        ?>

    </div>
    
    <div class="pm">
        <?php
            $key = array_keys($db);
            echo "<h4> {$key[1]}: </h4>";

            for($i = 0; $i < count($db[$key[0]]); $i++) {
                echo "{$db[$key[1]][$i]['name']} {$db[$key[1]][$i]['lastname']}<br>";
            }

        ?>
    </div>




</body>
</html>