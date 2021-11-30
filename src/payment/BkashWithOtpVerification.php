<?php

namespace App\payment;

class BkashWithOtpVerification extends ViaBkash
{
    public function sendingMethod()
    {
        echo 'sending OPT....';
        echo "<br/>";
        echo 'OTP verified';
        echo "<br/>";
        echo 'Sending Via Bkash';
        echo "<br/>";
    }
}
