<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
interface InlineQueryResultCachedStickerInterface extends TypeInterface
{
    /** @var string $type Type of the result, must be sticker */
    public string $type { set; get; }

    /** @var string $id Unique identifier for this result, 1-64 bytes */
    public string $id { set; get; }

    /** @var string $stickerFileId A valid file identifier of the sticker */
    public string $stickerFileId { set; get; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }

    /** @var InputMessageContentInterface|null $inputMessageContent Optional. Content of the message to be sent instead of the sticker */
    public ?InputMessageContentInterface $inputMessageContent { set; get; }
}
