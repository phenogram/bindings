<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes an inline message sent by a Web App on behalf of a user.
 */
interface SentWebAppMessageInterface extends TypeInterface
{
    /** @var string|null $inlineMessageId Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. */
    public ?string $inlineMessageId { set; get; }
}
