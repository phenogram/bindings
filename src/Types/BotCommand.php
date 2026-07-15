<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents a bot command.
 */
class BotCommand implements Interfaces\BotCommandInterface
{
    /**
     * @param string    $command     Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @param string    $description Description of the command; 1-256 characters
     * @param bool|null $isEphemeral Optional. True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
     */
    public function __construct(
        public string $command,
        public string $description,
        public ?bool $isEphemeral = null,
    ) {
    }
}
