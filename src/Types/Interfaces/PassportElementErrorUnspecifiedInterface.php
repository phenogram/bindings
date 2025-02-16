<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 */
interface PassportElementErrorUnspecifiedInterface extends TypeInterface
{
    /** @var string $source Error source, must be unspecified */
    public string $source { set; }

    /** @var string $type Type of element of the user's Telegram Passport which has the issue */
    public string $type { set; }

    /** @var string $elementHash Base64-encoded element hash */
    public string $elementHash { set; }

    /** @var string $message Error message */
    public string $message { set; }
}
