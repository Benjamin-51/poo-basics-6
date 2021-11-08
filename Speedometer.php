<?php

    class Speedometer
    {
        public const COEF_KM_TO_MILES = 1.60934;
  
        public static function milesToKm(float $distanceInMiles): ?float
        {   
            return $distanceInMiles * self::COEF_KM_TO_MILES;    
        }

        public static function kmToMiles(float $distanceInKm): ?float
        {   
            return $distanceInKm / self::COEF_KM_TO_MILES;    
        }
    }