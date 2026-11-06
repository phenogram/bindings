<?php

namespace Phenogram\Bindings\Types\Interfaces;

interface EphemeralMessageParametersInterface extends TypeInterface
{
    /** @var int $receiverUserId Identifier of the user who will receive the message. It is not guaranteed that the user will receive the message, especially if they are offline. See here for more details. */
    public int $receiverUserId { set; get; }

    /** @var string|null $callbackQueryId Optional. Identifier of the callback query which triggered the message, if any */
    public ?string $callbackQueryId { set; get; }

    /** @var bool|null $replaceCallbackQueryMessage Optional. Pass True if the ephemeral message must be shown in place of the original message. Must be False for callback queries from ephemeral messages, which must be edited using regular editEphemeralMessage… methods. */
    public ?bool $replaceCallbackQueryMessage { set; get; }
}
