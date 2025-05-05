<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PassportFileInterface;
use Phenogram\Bindings\Types\PassportFile;

class PassportFileFactory extends AbstractFactory
{
    /**
     * Creates a new PassportFile instance with default fake data.
     *
     * @param string|null $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param int|null    $fileSize     Optional. File size in bytes
     * @param int|null    $fileDate     Optional. Unix time when the file was uploaded
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?int $fileSize = null,
        ?int $fileDate = null,
    ): PassportFileInterface {
        return self::factory()->makePassportFile(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileSize: $fileSize ?? self::fake()->randomNumber(),
            fileDate: $fileDate ?? self::fake()->unixTime(),
        );
    }
}
