<?php

namespace App\payment;

use App\interfaces\SendingMethodContract;

class ViaBkash implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via bkash";
    }

}
