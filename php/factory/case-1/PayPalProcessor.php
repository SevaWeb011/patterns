<?php

final class PayPalProcessor  implements PaymentProcessorInterface
{

    public function payout(): void
    {
        echo 'PayPal payout';
    }

    public function payment(): void
    {
        echo 'PayPal payment';
    }
}