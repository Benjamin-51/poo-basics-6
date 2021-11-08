<?php

require_once 'Speedometer.php';


$speedometer = new Speedometer();

echo round($speedometer->milesToKm(500),2) . PHP_EOL;
echo round(Speedometer::kmToMiles(10),2);
?>