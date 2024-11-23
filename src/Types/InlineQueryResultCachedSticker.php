<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface;

/**
 * Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use input_message_content to send a message with the specified content instead of the sticker.
 */
class InlineQueryResultCachedSticker extends InlineQueryResult implements Interfaces\InlineQueryResultCachedStickerInterface
{
    /**
     * @param string                             $id                  Unique identifier for this result, 1-64 bytes
     * @param string                             $stickerFileId       A valid file identifier of the sticker
     * @param string                             $type                Type of the result, must be sticker
     * @param InlineKeyboardMarkupInterface|null $replyMarkup         Optional. Inline keyboard attached to the message
     * @param InputMessageContentInterface|null  $inputMessageContent Optional. Content of the message to be sent instead of the sticker
     */
    public function __construct(
        public string $id,
        public string $stickerFileId,
        public string $type = 'sticker',
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
        public ?InputMessageContentInterface $inputMessageContent = null,
    ) {
    }
}
