<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one result of an inline query. Telegram clients currently support results of the following 20 types:
 *
 * @see InlineQueryResultCachedAudioInterface
 * @see InlineQueryResultCachedDocumentInterface
 * @see InlineQueryResultCachedGifInterface
 * @see InlineQueryResultCachedMpeg4GifInterface
 * @see InlineQueryResultCachedPhotoInterface
 * @see InlineQueryResultCachedStickerInterface
 * @see InlineQueryResultCachedVideoInterface
 * @see InlineQueryResultCachedVoiceInterface
 * @see InlineQueryResultArticleInterface
 * @see InlineQueryResultAudioInterface
 * @see InlineQueryResultContactInterface
 * @see InlineQueryResultGameInterface
 * @see InlineQueryResultDocumentInterface
 * @see InlineQueryResultGifInterface
 * @see InlineQueryResultLocationInterface
 * @see InlineQueryResultMpeg4GifInterface
 * @see InlineQueryResultPhotoInterface
 * @see InlineQueryResultVenueInterface
 * @see InlineQueryResultVideoInterface
 * @see InlineQueryResultVoiceInterface
 */
interface InlineQueryResultInterface extends TypeInterface
{
}
