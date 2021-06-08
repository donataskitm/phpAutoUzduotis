<?php
use DemoApp\Vehicle;
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

        $uzd4 = new Vehicle("Corsa", "Opel");
        print_r($uzd4->model."\n");
        print_r($uzd4->brand);



    ?>

    <?php foreach ($uzd4 as $info):?>
    <?php echo $info;?>
    <?php endforeach;?>
    //

    <?php
        $uzd4 -> setPrice("1200 eur");
        $uzd4 -> setDescription("Naudota");
        echo $uzd4->getDescription()."\n";
        echo $uzd4->getPrice();
    ?>

<?php
$motociklas = new Motorcycle("Road King", "Harley-Davidson", "2000 eur", "Naudotas", "75 AG", "1 600 cm³", "200km/ha");
print_r($motociklas->model."\n");
echo $motociklas->getEngine();


$automobilis = new Car("Corsa", "Opel", "2000 eur", "Pirktas 2013 metai iš JAV, nuvažiavęs 2600", "2 t","2.5 l", "150 AG", "230km", "5");
$dviratis = new Bike("MTB", "CLASSIC PRO 26", "350 eur", "Naujas");

//neradau savybiu, kurios isskirtinai tiktu dviraciui

//tik automobiliui tinkamos savybes
$automobilis ->setSeats("4");
$automobilis ->setWeight("2,5");
echo $automobilis ->getSeats();
echo $automobilis ->getWeight();



?>

</body>
</html>
