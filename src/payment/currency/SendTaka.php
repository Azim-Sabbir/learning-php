<?php

namespace App\payment\currency;

use App\interfaces\SendingMethodContract;

class SendTaka
{
    public function send(SendingMethodContract $sendingMethod, $amount)
    {
        echo "sending {$amount} taka: ";
        echo PHP_EOL;
        echo "<br/>";
        $sendingMethod->sendingMethod();
    }

}
