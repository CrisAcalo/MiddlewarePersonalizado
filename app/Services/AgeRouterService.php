<?php

namespace App\Services;

class AgeRouterService
{
    public static function getRouteByAge(int $age): string
    {
        return match (true) {
            $age >= 0 && $age <= 5   => 'bebes',
            $age >= 6 && $age <= 12  => 'ninos',
            $age >= 13 && $age <= 17  => 'adolescentes',
            $age >= 18 && $age <= 25  => 'jovenes',
            $age >= 26 && $age <= 59  => 'adultos',
            $age >= 60 && $age <= 74  => 'mayores',
            $age >= 75 && $age <= 120  => 'longevos',
            default                  => 'error',
        };
    }

    public static function getClassification(int $age): string
    {
        return match (true) {
            $age >= 0 && $age <= 5   => 'Bebés',
            $age >= 6 && $age <= 12  => 'Niños',
            $age >= 13 && $age <= 17  => 'Adolescentes',
            $age >= 18 && $age <= 25  => 'Jóvenes',
            $age >= 26 && $age <= 59  => 'Adultos',
            $age >= 60 && $age <= 74  => 'Mayores',
            $age >= 75 && $age <= 120  => 'Longevos',
            default                  => 'Inválido',
        };
    }
}
