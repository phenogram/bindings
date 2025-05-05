<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultCachedAudio;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedAudioInterface;

class InlineQueryResultCachedAudioFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultCachedAudio instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be audio
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $audioFileId         Optional. A valid file identifier for the audio file
     * @param string|null                                                            $caption             Optional. Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the audio
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $audioFileId = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultCachedAudioInterface {
        return self::factory()->makeInlineQueryResultCachedAudio(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            audioFileId: $audioFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
