<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultVoice;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVoiceInterface;

class InlineQueryResultVoiceFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultVoice instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be voice
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $voiceUrl            Optional. A valid URL for the voice recording
     * @param string|null                                                            $title               Optional. Recording title
     * @param string|null                                                            $caption             Optional. Optional. Caption, 0-1024 characters after entities parsing
     * @param string|null                                                            $parseMode           Optional. Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array|null                                                             $captionEntities     Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null                                                               $voiceDuration       Optional. Optional. Recording duration in seconds
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the voice recording
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $voiceUrl = null,
        ?string $title = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $voiceDuration = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultVoiceInterface {
        return self::factory()->makeInlineQueryResultVoice(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            voiceUrl: $voiceUrl ?? self::fake()->url(),
            title: $title ?? self::fake()->sentence(3),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            voiceDuration: $voiceDuration,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
