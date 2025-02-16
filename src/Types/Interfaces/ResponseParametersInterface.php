<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes why a request was unsuccessful.
 */
interface ResponseParametersInterface extends TypeInterface
{
    /** @var int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrateToChatId { set; }

    /** @var int|null $retryAfter Optional. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated */
    public ?int $retryAfter { set; }
}
