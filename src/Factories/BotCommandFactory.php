<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommand;
use Phenogram\Bindings\Types\Interfaces\BotCommandInterface;

class BotCommandFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommand instance with default fake data.
     *
     * @param string|null $command     Optional. Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
     * @param string|null $description Optional. Description of the command; 1-256 characters
     * @param bool|null   $isEphemeral Optional. Optional. True, if the command sends an ephemeral message, which can be seen only by the sender of the message and the bot
     */
    public static function make(
        ?string $command = null,
        ?string $description = null,
        ?bool $isEphemeral = null,
    ): BotCommandInterface {
        return self::factory()->makeBotCommand(
            command: $command ?? self::fake()->text(50),
            description: $description ?? self::fake()->sentence(),
            isEphemeral: $isEphemeral,
        );
    }
}
