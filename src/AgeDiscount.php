<?php

// src/AgeDiscount.php

namespace AgeDiscount;

class AgeDiscount
{
    public static function getDiscount($age)
    {
        if ($age < 18) {
            return 'Pas de réduction';
        } elseif ($age >= 18 && $age <= 25) {
            return 'Réduction de 10%';
        } else {
            return 'Réduction de 5%';
        }
    }
}
