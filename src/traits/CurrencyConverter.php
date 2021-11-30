<?php

namespace App\traits;

use App\interfaces\CurrencyTypes;

trait CurrencyConverter
{
    public function convert($fromAmountType, $toAmountType,$fromAmount)
    {
        if ($fromAmountType == CurrencyTypes::TAKA && $toAmountType == CurrencyTypes::US_DOLLAR) {
            return "converted to ".$fromAmount / 80 . " Dollar";
        } else {
            return "converted to ".$fromAmount * 80 ." Taka";
        }
    }
}
