<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 */
interface InlineQueryResultPhotoInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be photo */
    public string $type { set; get; }

    /** @var string $id Unique identifier for this result, 1-64 bytes */
    public string $id { set; get; }

    /** @var string $photoUrl A valid URL of the photo. Photo must be in JPEG format. Photo size must not exceed 5MB */
    public string $photoUrl { set; get; }

    /** @var string $thumbnailUrl URL of the thumbnail for the photo */
    public string $thumbnailUrl { set; get; }

    /** @var int|null $photoWidth Optional. Width of the photo */
    public ?int $photoWidth { set; get; }

    /** @var int|null $photoHeight Optional. Height of the photo */
    public ?int $photoHeight { set; get; }

    /** @var string|null $title Optional. Title for the result */
    public ?string $title { set; get; }

    /** @var string|null $description Optional. Short description of the result */
    public ?string $description { set; get; }

    /** @var string|null $caption Optional. Caption of the photo to be sent, 0-1024 characters after entities parsing */
    public ?string $caption { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the photo caption. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; get; }

    /** @var bool|null $showCaptionAboveMedia Optional. Pass True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; get; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the photo */
    public ?InputMessageContentInterface $inputMessageContent { set; get; }
}
