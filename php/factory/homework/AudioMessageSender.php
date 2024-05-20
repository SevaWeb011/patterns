<?php

namespace homework;

final class AudioMessageSender implements MessageSenderInterface
{

    public function send(): void
    {
        echo 'Message was sent and uploaded to cloud by AudioMessageSender.' . PHP_EOL;
    }
}