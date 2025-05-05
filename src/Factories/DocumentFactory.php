<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Document;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;

class DocumentFactory extends AbstractFactory
{
    /**
     * Creates a new Document instance with default fake data.
     *
     * @param string|null             $fileId       Optional. Identifier for this file, which can be used to download or reuse the file
     * @param string|null             $fileUniqueId Optional. Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
     * @param PhotoSizeInterface|null $thumbnail    Optional. Optional. Document thumbnail as defined by the sender
     * @param string|null             $fileName     Optional. Optional. Original filename as defined by the sender
     * @param string|null             $mimeType     Optional. Optional. MIME type of the file as defined by the sender
     * @param int|null                $fileSize     Optional. Optional. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
     */
    public static function make(
        ?string $fileId = null,
        ?string $fileUniqueId = null,
        ?PhotoSizeInterface $thumbnail = null,
        ?string $fileName = null,
        ?string $mimeType = null,
        ?int $fileSize = null,
    ): DocumentInterface {
        return self::factory()->makeDocument(
            fileId: $fileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            fileUniqueId: $fileUniqueId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            thumbnail: $thumbnail,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }
}
