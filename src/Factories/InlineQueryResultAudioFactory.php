<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultAudio;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultAudioInterface;

class InlineQueryResultAudioFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultAudio instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be audio
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $audioUrl            Optional. A valid URL for the audio file
     * @param string|null                                                            $title               Optional. Title
     * @param string|null                                                            $caption             Optional. Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the audio caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param string|null                                                            $performer           Optional. Optional. Performer
     * @param int|null                                                               $audioDuration       Optional. Optional. Audio duration in seconds
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the audio
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $audioUrl = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?string $performer = null,
        ?int $audioDuration = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultAudioInterface {
        return self::factory()->makeInlineQueryResultAudio(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            audioUrl: $audioUrl ?? self::fake()->url(),
            title: $title ?? self::fake()->sentence(3),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            performer: $performer,
            audioDuration: $audioDuration,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
