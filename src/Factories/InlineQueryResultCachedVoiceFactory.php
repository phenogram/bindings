<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultCachedVoice;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedVoiceInterface;

class InlineQueryResultCachedVoiceFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultCachedVoice instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be voice
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $voiceFileId         Optional. A valid file identifier for the voice message
     * @param string|null                                                            $title               Optional. Voice message title
     * @param string|null                                                            $caption             Optional. Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the voice message
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $voiceFileId = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultCachedVoiceInterface {
        return self::factory()->makeInlineQueryResultCachedVoice(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            voiceFileId: $voiceFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            title: $title ?? self::fake()->sentence(3),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
