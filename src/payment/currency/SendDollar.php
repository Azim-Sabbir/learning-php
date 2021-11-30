<?php

namespace App\payment\currency;

use App\interfaces\SendingMethodContract;

class SendDollar
{
    public function send(SendingMethodContract $sendingMethod, $amount)
    {
        echo "sending {$amount} dollar: ";
        echo "<br/>";
        echo PHP_EOL;
        $sendingMethod->sendingMethod();
    }
}
