<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a voice recording in an .OGG container encoded with OPUS. By default, this voice recording will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the the voice message.
 */
interface InlineQueryResultVoiceInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be voice */
    public string $type { set; get; }

    /** @var string $id Unique identifier for this result, 1-64 bytes */
    public string $id { set; get; }

    /** @var string $voiceUrl A valid URL for the voice recording */
    public string $voiceUrl { set; get; }

    /** @var string $title Recording title */
    public string $title { set; get; }

    /** @var string|null $caption Optional. Caption, 0-1024 characters after entities parsing */
    public ?string $caption { set; get; }

    /** @var string|null $parseMode Optional. Mode for parsing entities in the voice message caption. See formatting options for more details. */
    public ?string $parseMode { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. List of special entities that appear in the caption, which can be specified instead of parse_mode */
    public ?array $captionEntities { set; get; }

    /** @var int|null $voiceDuration Optional. Recording duration in seconds */
    public ?int $voiceDuration { set; get; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the voice recording */
    public ?InputMessageContentInterface $inputMessageContent { set; get; }
}
