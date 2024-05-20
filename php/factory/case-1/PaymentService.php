<?php

final class PaymentService
{
    public function payout(PaymentSystemEnum $type): void
    {
        $processor = PaymentProcessorFactory::getProcessorByType($type);
        $processor->payout();
    }

    public function payment(PaymentSystemEnum $type): void
    {
        $processor = PaymentProcessorFactory::getProcessorByType($type);
        $processor->payment();
    }
}
