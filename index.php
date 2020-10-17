<?php

require_once 'Truck.php';

echo 'Truck' . '<br><br>';

$truck = new Truck(10, 'red', 3, 'electric');
$truck->setCurrentSpeed(20);

echo $truck->forward() . '<br>';
echo 'truck speed ' . $truck->getCurrentSpeed() . 'km/h' . '<br>';
echo $truck->brake();
echo'<br>';
echo $truck->isFull();