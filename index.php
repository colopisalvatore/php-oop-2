<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Toy.php';
include_once __DIR__ . '/Models/Accessory.php';


$categoryDog = new Category('Dog', 'dog.png');

$categoryCat = new Category('Cat', 'cat.png');

$foodDog = new Food('Monge All Breeds Adult Salmone e Riso', 'monge.png', 45.90, $categoryDog, 12, ['Salmone - ', 'Riso - ', 'Verdure '], '2023-06-21');

$foodCat = new Food('Royal Canin V-Diet Urinary S/O Cat', 'royal.png', 45.50, $categoryCat, 3.5, ['Pollame - ', 'Verdure - ', 'Fibre - ', 'Proteine Animali'], '2021-01-12');

$toyDog = new Toy('KONG Scrunch Knots Racoon', 'kong.png', 12.90, $categoryDog, 'L 15 x P 7 x H 6', ['Cordura - ', 'Tessuto Felpato ']);

$toyCat = new Toy('Palla Cuore Cotone Juta', 'palla.png', 2.24, $categoryCat, 'ø 4,5 x L 18', ['Poliestere Juta - ', 'Tessuto']);

$accessoryDog = new Accessory('Cuccia Ovale Catene', 'cuccia-cane.png', 18.90, $categoryDog, 'Indoor', 'L 60 x P 45 x H 24', ['Tessuto - ', 'Spugna']);

$accessoryCat = new Accessory('Croci Gipsy Trasportino', 'trasportino.png', 8.67, $categoryCat, 'Trasportini', 'Piccolo', ['Plastica ABS']);


include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php';


?>

