<?php

namespace Phenogram\Bindings\Types;

class EphemeralMessageParameters implements Interfaces\EphemeralMessageParametersInterface
{
    /**
     * @param int         $receiverUserId              Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See here for more details.
     * @param string|null $callbackQueryId             Optional. Identifier of the callback query which triggered the message, if any
     * @param bool|null   $replaceCallbackQueryMessage Optional. Pass True if the ephemeral message must be shown in place of the original message. Must be False for callback queries from ephemeral messages, which must be edited using regular editEphemeralMessage… methods.
     */
    public function __construct(
        public int $receiverUserId,
        public ?string $callbackQueryId = null,
        public ?bool $replaceCallbackQueryMessage = null,
    ) {
    }
}
