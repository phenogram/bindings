<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineQueryResultCachedSticker;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedStickerInterface;

class InlineQueryResultCachedStickerFactory extends AbstractFactory
{
    /**
     * Creates a new InlineQueryResultCachedSticker instance with default fake data.
     *
     * @param string|null                                                            $type                Optional. Type of the result, must be sticker
     * @param string|null                                                            $id                  Optional. Unique identifier for this result, 1-64 bytes
     * @param string|null                                                            $stickerFileId       Optional. A valid file identifier of the sticker
     * @param InlineKeyboardMarkupInterface|null                                     $replyMarkup         Optional. Optional. Inline keyboard attached to the message
     * @param \Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface|null $inputMessageContent Optional. Optional. Content of the message to be sent instead of the sticker
     */
    public static function make(
        ?string $type = null,
        ?string $id = null,
        ?string $stickerFileId = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
        ?\Phenogram\Bindings\Types\Interfaces\InputMessageContentInterface $inputMessageContent = null,
    ): InlineQueryResultCachedStickerInterface {
        return self::factory()->makeInlineQueryResultCachedSticker(
            type: $type ?? self::fake()->word(),
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            stickerFileId: $stickerFileId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }
}
