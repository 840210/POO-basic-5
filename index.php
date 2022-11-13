<?php 
require_once './Vehicle.php';
require_once './HighWay.php';
require_once './MotorWay.php';
require_once 'Car.php';

$nissan350Z = new Car('green', 4, 'essence');

try {
    echo $nissan350Z->start();
} catch (Exception $e) {
    echo  $nissan350Z->getMessage() . "<br>";
    $nissan350Z->setParkBrake(false);
    echo "changement d'état du frein à main, redémarrage : " . $nissan350Z->start() . "<br>";
} finally {
    echo "Ma voiture roule comme un donut.";
}
echo '<br>';
echo $nissan350Z->start();
?>