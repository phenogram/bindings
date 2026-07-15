<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextBotCommandInterface;
use Phenogram\Bindings\Types\RichTextBotCommand;

class RichTextBotCommandFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextBotCommand instance with default fake data.
     *
     * @param string|null                                                 $type       Optional. Type of the rich text, always “bot_command”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|null $text       Optional. The text
     * @param string|null                                                 $botCommand Optional. The bot command
     */
    public static function make(
        ?string $type = null,
        ?\Phenogram\Bindings\Types\Interfaces\RichTextInterface $text = null,
        ?string $botCommand = null,
    ): RichTextBotCommandInterface {
        return self::factory()->makeRichTextBotCommand(
            type: $type ?? self::fake()->word(),
            text: $text ?? '[Abstract type: RichText]',
            botCommand: $botCommand ?? self::fake()->text(50),
        );
    }
}
