<?php

enum PaymentSystemEnum: string
{
    case PAYPAL = 'paypal';

    case WEBMONEY = 'webmoney';

    case CAT_BANK = 'cat-bank';
}
