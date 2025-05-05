<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SentWebAppMessageInterface;
use Phenogram\Bindings\Types\SentWebAppMessage;

class SentWebAppMessageFactory extends AbstractFactory
{
    /**
     * Creates a new SentWebAppMessage instance with default fake data.
     *
     * @param string|null $inlineMessageId Optional. Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message.
     */
    public static function make(?string $inlineMessageId = null): SentWebAppMessageInterface
    {
        return self::factory()->makeSentWebAppMessage(
            inlineMessageId: $inlineMessageId,
        );
    }
}
