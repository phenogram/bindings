<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\RichTextInterface;

/**
 * A bot command.
 */
class RichTextBotCommand extends RichText implements Interfaces\RichTextBotCommandInterface
{
    /**
     * @param string            $type       Type of the rich text, always “bot_command”
     * @param RichTextInterface $text       The text
     * @param string            $botCommand The bot command
     */
    public function __construct(
        public string $type,
        public RichTextInterface $text,
        public string $botCommand,
    ) {
    }
}
