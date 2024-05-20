<?php

final class WebmoneyProcessor  implements PaymentProcessorInterface
{

    public function payout(): void
    {
        echo 'Webmoney payout';
    }

    public function payment(): void
    {
        echo 'Webmoney payment';
    }
}