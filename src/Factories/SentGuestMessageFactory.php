<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SentGuestMessageInterface;
use Phenogram\Bindings\Types\SentGuestMessage;

class SentGuestMessageFactory extends AbstractFactory
{
    /**
     * Creates a new SentGuestMessage instance with default fake data.
     *
     * @param string|null $inlineMessageId Optional. Identifier of the sent inline message
     */
    public static function make(?string $inlineMessageId = null): SentGuestMessageInterface
    {
        return self::factory()->makeSentGuestMessage(
            inlineMessageId: $inlineMessageId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}
