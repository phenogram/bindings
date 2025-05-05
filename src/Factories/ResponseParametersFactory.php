<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ResponseParametersInterface;
use Phenogram\Bindings\Types\ResponseParameters;

class ResponseParametersFactory extends AbstractFactory
{
    /**
     * Creates a new ResponseParameters instance with default fake data.
     *
     * @param int|null $migrateToChatId Optional. Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null $retryAfter      Optional. Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
     */
    public static function make(?int $migrateToChatId = null, ?int $retryAfter = null): ResponseParametersInterface
    {
        return self::factory()->makeResponseParameters(
            migrateToChatId: $migrateToChatId,
            retryAfter: $retryAfter,
        );
    }
}
