<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes an inline message sent by a guest bot.
 */
class SentGuestMessage implements Interfaces\SentGuestMessageInterface
{
    /**
     * @param string $inlineMessageId Identifier of the sent inline message
     */
    public function __construct(
        public string $inlineMessageId,
    ) {
    }
}
