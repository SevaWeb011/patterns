<?php

namespace homework;

class TextMessageSender implements MessageSenderInterface
{
    public function send(): void
    {
        echo 'Message was sent by TextMessageSender.' . PHP_EOL;
    }
}