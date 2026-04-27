<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestManagedBotInterface;
use Phenogram\Bindings\Types\KeyboardButtonRequestManagedBot;

class KeyboardButtonRequestManagedBotFactory extends AbstractFactory
{
    /**
     * Creates a new KeyboardButtonRequestManagedBot instance with default fake data.
     *
     * @param int|null    $requestId         Optional. Signed 32-bit identifier of the request. Must be unique within the message
     * @param string|null $suggestedName     Optional. Optional. Suggested name for the bot
     * @param string|null $suggestedUsername Optional. Optional. Suggested username for the bot
     */
    public static function make(
        ?int $requestId = null,
        ?string $suggestedName = null,
        ?string $suggestedUsername = null,
    ): KeyboardButtonRequestManagedBotInterface {
        return self::factory()->makeKeyboardButtonRequestManagedBot(
            requestId: $requestId ?? self::fake()->numberBetween(100000, 999999999),
            suggestedName: $suggestedName,
            suggestedUsername: $suggestedUsername,
        );
    }
}
