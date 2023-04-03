<?php
require_once __DIR__ . "./foods.php";
require_once __DIR__ . "./categories.php";
require_once __DIR__ . "./toys.php";

$cane = new categories ("cane");
$gatto = new categories ("gatto");

$prodotto1 = new foods("CIBO",20,10,"carne",$cane,"premium",50);
$gioco1 = new toys("GIOCO","legno",10,"bastone",$cane);

$alimenti = [
    $prodotto1,
    new foods("CIBO",10,5,"snack",$gatto),
    new foods("CIBO",5,15,"snack",$cane)
];

var_dump($alimenti);
var_dump($gioco1);

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
    <?php foreach ($alimenti as $prodotto) : ?>
        <h5><?php echo $prodotto->type ?></h5>
        <ul>
          <li><img src="<?php echo $prodotto->categories->getimg() ?>" alt=""></li>
          <li><strong>peso:</strong> <?php echo $prodotto->weight ?>Kg</li>
          <li><strong>Prezzo:</strong> <?php echo $prodotto->price ?>€</li>
          <li><strong>Descrizione:</strong> <?php echo $prodotto->description ?></li>
        </ul>
    <?php endforeach ?>

    <h5><?php echo $gioco1->type ?></h5>
        <ul>
          <li><img src="<?php echo $gioco1->categories->getimg() ?>" alt=""></li>
          <li><strong>peso:</strong> <?php echo $gioco1->material ?></li>
          <li><strong>Prezzo:</strong> <?php echo $gioco1->price ?>€</li>
          <li><strong>Descrizione:</strong> <?php echo $gioco1->description ?></li>
    </ul>

</body>
</html>