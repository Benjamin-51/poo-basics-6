<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
    {
        public function switchOn($currentSpeed): bool
        {
            return $currentSpeed > 10;
        }
    
    
        public function switchOff(): bool
        {
            return false;
        }
    }