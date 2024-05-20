<?php

namespace homework;

enum MessageTypeEnum: string
{
    case TEXT = 'text';

    case VIDEO = 'video';

    case IMAGE = 'image';

    case AUDIO_MESSAGE = 'audio_message';
}
