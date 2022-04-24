<?php



class Speedometer {

    public const ratioKmToMiles = 0.621;

    public static function convertKmToMiles (float $number): float {
        $convertedNumber = $number * self::ratioKmToMiles;
        return $convertedNumber;
    }

    public static function convertMilesToKm (float $number): float {
        $convertedNumber = $number / self::ratioKmToMiles;
        return $convertedNumber;
    }

}

echo Speedometer::convertMilesToKm(10);