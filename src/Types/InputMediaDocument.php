<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;

/**
 * Represents a general file to be sent.
 */
class InputMediaDocument extends InputMedia implements Interfaces\InputMediaDocumentInterface
{
    /**
     * @param string                             $media                       File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>” to upload a new one using multipart/form-data under <file_attach_name> name. More information on Sending Files »
     * @param string                             $type                        Type of the result, must be document
     * @param string|null                        $thumbnail                   Optional. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file_attach_name>” if the thumbnail was uploaded using multipart/form-data under <file_attach_name>. More information on Sending Files »
     * @param string|null                        $caption                     Optional. Caption of the document to be sent, 0-1024 characters after entities parsing
     * @param string|null                        $parseMode                   Optional. Mode for parsing entities in the document caption. See formatting options for more details.
     * @param array<MessageEntityInterface>|null $captionEntities             Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode
     * @param bool|null                          $disableContentTypeDetection Optional. Disables automatic server-side content type detection for files uploaded using multipart/form-data. Always True, if the document is sent as part of an album.
     */
    public function __construct(
        public string $media,
        public string $type = 'document',
        public ?string $thumbnail = null,
        public ?string $caption = null,
        public ?string $parseMode = null,
        public ?array $captionEntities = null,
        public ?bool $disableContentTypeDetection = null,
    ) {
    }
}
