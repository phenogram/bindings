<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputTextMessageContent;
use Phenogram\Bindings\Types\Interfaces\InputTextMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;

class InputTextMessageContentFactory extends AbstractFactory
{
    /**
     * Creates a new InputTextMessageContent instance with default fake data.
     *
     * @param string|null                      $messageText        Optional. Text of the message to be sent, 1-4096 characters
     * @param string|null                      $parseMode          Optional. Optional. Mode for parsing entities in the message text. See formatting options for more details.
     * @param array|null                       $entities           Optional. Optional. List of special entities that appear in message text, which can be specified instead of parse_mode
     * @param LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Optional. Link preview generation options for the message
     */
    public static function make(
        ?string $messageText = null,
        ?string $parseMode = null,
        ?array $entities = null,
        ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
    ): InputTextMessageContentInterface {
        return self::factory()->makeInputTextMessageContent(
            messageText: $messageText ?? self::fake()->text(50),
            parseMode: $parseMode,
            entities: $entities,
            linkPreviewOptions: $linkPreviewOptions,
        );
    }
}
