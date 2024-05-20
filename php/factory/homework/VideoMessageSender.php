<?php

namespace homework;

final class VideoMessageSender implements MessageSenderInterface
{

    public function send(): void
    {
        echo 'Message was sent and uploaded to cloud by VideoMessageSender.' . PHP_EOL;
    }
}