<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\File;
use Phenogram\Bindings\Types\Interfaces\FileInterface;

class FileFactory extends AbstractFactory
{
    /**
     * Creates a new File instance with default fake data.
     *
     * @param string|null $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $fileSize     Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     * @param string|null $filePath     Optional. Optional. File path. Use https://api.telegram.org/file/bot/ to get the file.
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $fileSize = null,
        ?string $filePath = null,
    ): FileInterface {
        return self::factory()->makeFile(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileSize: $fileSize,
            filePath: $filePath,
        );
    }
}
