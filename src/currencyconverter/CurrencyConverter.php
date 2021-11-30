<?php

namespace App\currencyconverter;

use \App\traits\CurrencyConverter as Converter;

class CurrencyConverter
{
    use Converter;

    public function ConvertCurrency($toAmountType, $fromAmountType, $fromAmount = 0)
    {
        return $this->convert($toAmountType, $fromAmountType, $fromAmount);
    }
}
