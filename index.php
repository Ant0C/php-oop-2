<?php
require_once "./foods.php";
require_once "./categories.php";

$prodotto1 = new foods("carne",20,10,"delizziosa");
$animal = new categories("");

var_dump($prodotto1);
var_dump($animal);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>