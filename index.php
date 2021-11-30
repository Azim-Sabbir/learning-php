<?php
require __DIR__ . "/vendor/autoload.php";

use App\currencyconverter\CurrencyConverter;
use App\interfaces\CurrencyTypes;
use App\payment\BkashWithOtpVerification;
use App\payment\currency\SendDollar;
use App\payment\currency\SendTaka;
use App\payment\ViaBkash;
use App\payment\ViaNagad;

//payment system
(new sendTaka())->send(new ViaBkash(), 100);
echo PHP_EOL;
echo "<br>";
(new sendTaka())->send(new ViaBkash(), 100);
echo PHP_EOL;
echo "<br>";
(new sendDollar())->send(new ViaNagad(), 500);
echo "<br>";
//if you want otp verification
(new sendTaka())->send(new BkashWithOtpVerification(), 100);
echo PHP_EOL;
echo "<br>";


//currency converter
echo "<br/>";
echo PHP_EOL;
echo "Currency Converter;";
echo "<br/>";
echo PHP_EOL;
$currencyConverter = new CurrencyConverter();
echo $currencyConverter->ConvertCurrency(CurrencyTypes::TAKA, CurrencyTypes::US_DOLLAR, 80);
