<?php

namespace Shanginn\TelegramBotApiBindings\Types;

/**
 * A placeholder, currently holds no information. Use BotFather to set up your game.
 */
class CallbackGame implements TypeInterface
{
    public function __construct()
    {
    }

    public static function fromResponseResult(array $result): self
    {
        return new self();
    }
}
