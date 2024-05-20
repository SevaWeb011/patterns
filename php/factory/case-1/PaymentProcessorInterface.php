<?php

interface PaymentProcessorInterface
{
    public function payout(): void;

    public function payment(): void;
}