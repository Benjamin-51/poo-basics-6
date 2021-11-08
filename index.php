<?php

require_once 'Bicycle.php';
require_once 'Truck.php';
require_once 'Skateboard.php';


$truck = new Truck("rouge", 2, "hybrid", 20);

echo($truck->isFull() . PHP_EOL);

echo($truck->start() . PHP_EOL);
echo($truck->forward() . PHP_EOL);

echo(($truck->switchOn($truck->getSpeed()) ? "Lights on!" : "Lights off!") . PHP_EOL);
echo(($truck->switchOff() ? "Lights on!" : "Lights off!") . PHP_EOL . PHP_EOL);


$bicycle = new Bicycle("bleu", 1);
echo(($bicycle->switchOn($bicycle->getSpeed()) ? "Lights on!" : "Lights off!") . PHP_EOL);
$bicycle->setCurrentSpeed(20);
echo "Bicycle speed set to 20. " . PHP_EOL;
echo(($bicycle->switchOn($bicycle->getSpeed()) ? "Lights on!" : "Lights off!") . PHP_EOL);
echo(($bicycle->switchOff() ? "Lights on!" : "Lights off!") . PHP_EOL);

?>