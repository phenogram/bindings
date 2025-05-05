<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PreparedInlineMessageInterface;
use Phenogram\Bindings\Types\PreparedInlineMessage;

class PreparedInlineMessageFactory extends AbstractFactory
{
    /**
     * Creates a new PreparedInlineMessage instance with default fake data.
     *
     * @param string|null $id             Optional. Unique identifier of the prepared message
     * @param int|null    $expirationDate Optional. Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used
     */
    public static function make(?string $id = null, ?int $expirationDate = null): PreparedInlineMessageInterface
    {
        return self::factory()->makePreparedInlineMessage(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            expirationDate: $expirationDate ?? self::fake()->unixTime(),
        );
    }
}
