<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputMediaDocument;
use Phenogram\Bindings\Types\Interfaces\InputMediaDocumentInterface;

class InputMediaDocumentFactory extends AbstractFactory
{
    /**
     * Creates a new InputMediaDocument instance with default fake data.
     *
     * @param string|null $type                        Optional. Type of the result, must be document
     * @param string|null $media                       Optional. File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://” to upload a new one using multipart/form-data under  name. More information on Sending Files »
     * @param string|null $thumbnail                   Optional. Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://” if the thumbnail was uploaded using multipart/form-data under . More information on Sending Files »
     * @param string|null $caption                     Optional. Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null $parseMode                   Optional. Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array|null  $captionEntities             Optional. Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null   $disableContentTypeDetection Optional. Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always True, if the document is sent as part of an album.
     */
    public static function make(
        ?string $type = null,
        ?string $media = null,
        ?string $thumbnail = null,
        ?string $caption = null,
        ?string $parseMode = null,
        ?array $captionEntities = null,
        ?bool $disableContentTypeDetection = null,
    ): InputMediaDocumentInterface {
        return self::factory()->makeInputMediaDocument(
            type: $type ?? self::fake()->word(),
            media: $media ?? self::fake()->text(50),
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            disableContentTypeDetection: $disableContentTypeDetection,
        );
    }
}
