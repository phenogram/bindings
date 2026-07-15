<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaVoiceNote;
use Phenogram\Bindings\Types\Interfaces\InputMediaVoiceNoteInterface;

class InputMediaVoiceNoteFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaVoiceNote instance with default fake data.
     *
     * @param string|null $type            Optional. Type of the media, must be voice_note
     * @param string|null $media           Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass "attach://" to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $caption         Optional. Optional. Caption of the voice message to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode       Optional. Optional. Mode for parsing entities in the voice message caption. See formatting options for more details.
     * @param array|null  $captionEntities Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param int|null    $duration        Optional. Optional. Duration of the voice message in seconds
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?int $duration = null,
    ): InputMediaVoiceNoteInterface {
        return self::factory()->makeInputMediaVoiceNote(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            duration: $duration,
        );
    }
}
