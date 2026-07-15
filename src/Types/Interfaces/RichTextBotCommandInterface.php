<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A bot command.
 */
interface RichTextBotCommandInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “bot_command” */
    public string $type { set; get; }

    /** @var RichTextInterface $text The text */
    public RichTextInterface $text { set; get; }

    /** @var string $botCommand The bot command */
    public string $botCommand { set; get; }
}
