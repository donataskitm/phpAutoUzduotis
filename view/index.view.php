<?php

use DemoApp\Bike;
use DemoApp\Car;
use DemoApp\Motorcycle;
?>

<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo opp</title>
</head>
<body>
<h1>Transporto priemones</h1>
<?php
$automobilis = new Car("Corsa", "Opel", "2000 eur", "Pirktas 2013 metai iš JAV, nuvažiavęs 2600", "2 t","2.5 l", "150 AG", "230km", "5");
$motociklas = new Motorcycle("Road King", "Harley-Davidson", "2000 eur", "Naudotas", "75 AG", "1 600 cm³", "200km/ha", );
$dviratis = new Bike("MTB", "CLASSIC PRO 26", "350 eur", "Naujas");
echo $automobilis->getModelBrand();
echo $automobilis->getModel();
$automobilis->setWeight("3 t");
$motociklas ->setModel("Bianchi");
$dviratis = setModel("Bianchi");
var_dump($dviratis ->getModel());
?>

</body>
</html>