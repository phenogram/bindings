<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\VoiceInterface;
use Phenogram\Bindings\Types\Voice;

class VoiceFactory extends AbstractFactory
{
    /**
     * Creates a new Voice instance with default fake data.
     *
     * @param string|null $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $duration     Optional. Duration of the audio in seconds as defined by the sender
     * @param string|null $mimeType     Optional. Optional. MIME type of the file as defined by the sender
     * @param int|null    $fileSize     Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $duration = null,
        ?string $mimeType = null,
        ?int $fileSize = null,
    ): VoiceInterface {
        return self::factory()->makeVoice(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            duration: $duration ?? self::fake()->numberBetween(10, 1000),
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }
}
