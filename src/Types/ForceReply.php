<?php

namespace Shanginn\TelegramBotApiBindings\Types;

/**
 * Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice privacy mode.
 */
class ForceReply implements TypeInterface
{
    /**
     * @param bool        $forceReply            Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'
     * @param string|null $inputFieldPlaceholder Optional. The placeholder to be shown in the input field when the reply is active; 1-64 characters
     * @param bool|null   $selective             Optional. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply (has reply_to_message_id), sender of the original message.
     */
    public function __construct(
        public bool $forceReply = true,
        public ?string $inputFieldPlaceholder = null,
        public ?bool $selective = null,
    ) {
    }
}
