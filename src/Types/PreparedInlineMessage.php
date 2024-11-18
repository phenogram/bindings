<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes an inline message to be sent by a user of a Mini App.
 */
class PreparedInlineMessage implements TypeInterface
{
    /**
     * @param string $id             Unique identifier of the prepared message
     * @param int    $expirationDate Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
     */
    public function __construct(
        public string $id,
        public int $expirationDate,
    ) {
    }
}
