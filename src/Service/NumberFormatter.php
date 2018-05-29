<?php

namespace App\Service;

class NumberFormatter
{
    
    public function format($number)
    {
        $abs = abs($number);
        
        if ($abs >= 999500) {
            $number = number_format($number / 10 ** 6, 2);
            return $number . "M";
        }  else if ($abs >= 99950) {
            $number = number_format($number / 10 ** 3);
            return $number . "K";
        } else if (round($abs, 2) >= 10 ** 3) {
            $number = number_format($number, 0, "", " ");
            return $number;
        } else {
            $number = number_format($number, 2, ".", "");
            return $number;
        }

        return $result;
    }

}