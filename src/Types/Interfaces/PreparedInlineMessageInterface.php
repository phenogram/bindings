<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
interface PreparedInlineMessageInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the prepared message */
    public string $id { set; get; }

    /** @var int $expirationDate Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used */
    public int $expirationDate { set; get; }
}
