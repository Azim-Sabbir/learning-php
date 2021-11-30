<?php

namespace App\payment;

use App\interfaces\SendingMethodContract;

class ViaRocket implements SendingMethodContract
{
    public function sendingMethod()
    {
        echo "sending via rocket";
    }

}
