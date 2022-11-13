<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct($nbLane = 1, $maxSpeed = 10)
    {
        parent::__construct($nbLane, $maxSpeed);

    }
    public function addVehicule(object $Vehicle)
    {
        if ($Vehicle instanceof Bicycle || $Vehicle instanceof Skateboard) {
            $this->currentVehicles[] = $Vehicle;

        }


    }
}