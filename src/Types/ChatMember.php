<?php

namespace Shanginn\TelegramBotApiBindings\Types;

/**
 * This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:.
 */
abstract class ChatMember implements TypeInterface
{
    public function __construct()
    {
    }

    public static function fromResponseResult(array $result): self
    {
        return new self();
    }
}
