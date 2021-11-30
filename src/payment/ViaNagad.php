<?php

namespace App\payment;

use App\interfaces\SendingMethodContract;

class ViaNagad implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via Nagad";
    }

}
