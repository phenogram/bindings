<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
class InlineQueryResultContact extends InlineQueryResult
{
    /**
     * @param string                    $id                  Unique identifier for this result, 1-64 Bytes
     * @param string                    $phoneNumber         Contact's phone number
     * @param string                    $firstName           Contact's first name
     * @param string                    $type                Type of the result, must be contact
     * @param string|null               $lastName            Optional. Contact's last name
     * @param string|null               $vcard               Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes
     * @param InlineKeyboardMarkup|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContent|null  $inputMessageContent Optional. Content of the message to be sent instead of the contact
     * @param string|null               $thumbnailUrl        Optional. Url of the thumbnail for the result
     * @param int|null                  $thumbnailWidth      Optional. Thumbnail width
     * @param int|null                  $thumbnailHeight     Optional. Thumbnail height
     */
    public function __construct(
        public string $id,
        public string $phoneNumber,
        public string $firstName,
        public string $type = 'contact',
        public ?string $lastName = null,
        public ?string $vcard = null,
        public ?InlineKeyboardMarkup $replyMarkup = null,
        public ?InputMessageContent $inputMessageContent = null,
        public ?string $thumbnailUrl = null,
        public ?int $thumbnailWidth = null,
        public ?int $thumbnailHeight = null,
    ) {
    }
}
