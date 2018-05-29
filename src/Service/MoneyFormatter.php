<?php

namespace App\Service;

class MoneyFormatter
{   
    private $numberFormatter;

    public function __construct($numberFormatter)
    {
        $this->numberFormatter = $numberFormatter;
    }

    public function eurFormatter($price)
    {
        $price = $this->numberFormatter->format($price);
        return $price . " €";
    }
    
    public function usdFormatter($price)
    {
        $price = $this->numberFormatter->format($price);
        return "$" . $price;
    }
    
}