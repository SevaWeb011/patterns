<?php

final class PaymentProcessorFactory
{
    public static function getProcessorByType(PaymentSystemEnum $type): PaymentProcessorInterface
    {
        if ($type === PaymentSystemEnum::PAYPAL) {
            return new PayPalProcessor();
        } elseif ($type === PaymentSystemEnum::WEBMONEY) {
            return new WebMoneyProcessor();
        } elseif ($type === PaymentSystemEnum::CAT_BANK) {
            return new CatBankProcessor();
        } else {
            throw new InvalidArgumentException('Unknown payment system');
        }
    }
}