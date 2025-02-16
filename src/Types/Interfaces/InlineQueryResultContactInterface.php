<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 */
interface InlineQueryResultContactInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be contact */
    public string $type { set; }

    /** @var string $id Unique identifier for this result, 1-64 Bytes */
    public string $id { set; }

    /** @var string $phoneNumber Contact's phone number */
    public string $phoneNumber { set; }

    /** @var string $firstName Contact's first name */
    public string $firstName { set; }

    /** @var string|null $lastName Optional. Contact's last name */
    public ?string $lastName { set; }

    /** @var string|null $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes */
    public ?string $vcard { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the contact */
    public ?InputMessageContentInterface $inputMessageContent { set; }

    /** @var string|null $thumbnailUrl Optional. Url of the thumbnail for the result */
    public ?string $thumbnailUrl { set; }

    /** @var int|null $thumbnailWidth Optional. Thumbnail width */
    public ?int $thumbnailWidth { set; }

    /** @var int|null $thumbnailHeight Optional. Thumbnail height */
    public ?int $thumbnailHeight { set; }
}
