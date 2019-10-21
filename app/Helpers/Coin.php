<?php

namespace App\Helpers;

class Coin
{
    public $id;
    public $name;
    public $symbol;
    public $rank;
    public $price;
    public $vol24h;
    public $marketcap;
    public $change1h;
    public $change24h;
    public $change7d;

    public function priceConverter($decimals, $number, $usePoints = false)
    {
        if ($usePoints) {
            $money = number_format($number, $decimals, ',', '.');   
        } else {
            $money = number_format($number, $decimals, '.', ',');   
        }

        return $money;
    }    
}
