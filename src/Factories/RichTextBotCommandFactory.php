<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextBotCommandInterface;
use Phenogram\Bindings\Types\RichTextBotCommand;

class RichTextBotCommandFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextBotCommand instance with default fake data.
     *
     * @param string|null                                                              $type       Optional. Type of the rich text, always “bot_command”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text       Optional. The text
     * @param string|null                                                              $botCommand Optional. The bot command
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $botCommand = null,
    ): RichTextBotCommandInterface {
        return self::factory()->makeRichTextBotCommand(
            type: $type ?? 'bot_command',
            text: $text ?? self::fake()->sentence(),
            botCommand: $botCommand ?? self::fake()->text(50),
        );
    }
}
