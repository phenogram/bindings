<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes an inline message sent by a guest bot.
 */
interface SentGuestMessageInterface extends TypeInterface
{
    /** @var string $inlineMessageId Identifier of the sent inline message */
    public string $inlineMessageId { set; get; }
}
