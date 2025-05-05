<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ForceReply;
use Phenogram\Bindings\Types\Interfaces\ForceReplyInterface;

class ForceReplyFactory extends AbstractFactory
{
    /**
     * Creates a new ForceReply instance with default fake data.
     *
     * @param bool|null   $forceReply            Optional. Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     * @param string|null $inputFieldPlaceholder Optional. Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     * @param bool|null   $selective             Optional. Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.
     */
    public static function make(
        ?bool $forceReply = null,
        ?string $inputFieldPlaceholder = null,
        ?bool $selective = null,
    ): ForceReplyInterface {
        return self::factory()->makeForceReply(
            forceReply: $forceReply ?? self::fake()->boolean(),
            inputFieldPlaceholder: $inputFieldPlaceholder,
            selective: $selective,
        );
    }
}
