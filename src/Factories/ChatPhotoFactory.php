<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatPhoto;
use Phenogram\Bindings\Types\Interfaces\ChatPhotoInterface;

class ChatPhotoFactory extends AbstractFactory
{
    /**
     * Creates a new ChatPhoto instance with default fake data.
     *
     * @param string|null $smallFileId       Optional. File identifier of small (160x160) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string|null $smallFileUniqueId Optional. Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param string|null $bigFileId         Optional. File identifier of big (640x640) chat photo. This file_id can be used only for photo download and only for as long as the photo is not changed.
     * @param string|null $bigFileUniqueId   Optional. Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     */
    public static function make(
        ?string $smallFileId = null,
        ?string $smallFileUniqueId = null,
        ?string $bigFileId = null,
        ?string $bigFileUniqueId = null,
    ): ChatPhotoInterface {
        return self::factory()->makeChatPhoto(
            smallFileId: $smallFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            smallFileUniqueId: $smallFileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            bigFileId: $bigFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            bigFileUniqueId: $bigFileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}
