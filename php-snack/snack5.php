<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<!-- Prendere un testo abbastanza lungo, contenente diverse frasi. -->
<!-- Suddividere il testo in tanti paragrafi <p>: ad ogni punto corrisponde un -->
<!-- nuovo paragrafo. -->
<!--  -->
<?php

$loremText = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed do eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullamco laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis aute irure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

$str = str_replace(".", "<p>", $loremText);
echo $str;


?>


</body>
</html>