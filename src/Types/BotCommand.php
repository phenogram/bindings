<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a bot command.
 */
class BotCommand implements Interfaces\BotCommandInterface
{
    /**
     * @param string $command     Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @param string $description description of the command; 1-256 characters
     */
    public function __construct(
        public string $command,
        public string $description,
    ) {
    }
}
