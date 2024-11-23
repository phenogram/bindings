<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a sticker.
 */
interface StickerInterface extends TypeInterface
{
	/** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
	public string $fileId { set; get; }

	/** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $fileUniqueId { set; get; }

	/** @var string $type Type of the sticker, currently one of “regular”, “mask”, “custom_emoji”. The type of the sticker is independent from its format, which is determined by the fields is_animated and is_video. */
	public string $type { set; get; }

	/** @var int $width Sticker width */
	public int $width { set; get; }

	/** @var int $height Sticker height */
	public int $height { set; get; }

	/** @var bool $isAnimated True, if the sticker is animated */
	public bool $isAnimated { set; get; }

	/** @var bool $isVideo True, if the sticker is a video sticker */
	public bool $isVideo { set; get; }

	/** @var PhotoSizeInterface|null $thumbnail Optional. Sticker thumbnail in the .WEBP or .JPG format */
	public ?PhotoSizeInterface $thumbnail { set; get; }

	/** @var string|null $emoji Optional. Emoji associated with the sticker */
	public ?string $emoji { set; get; }

	/** @var string|null $setName Optional. Name of the sticker set to which the sticker belongs */
	public ?string $setName { set; get; }

	/** @var FileInterface|null $premiumAnimation Optional. For premium regular stickers, premium animation for the sticker */
	public ?FileInterface $premiumAnimation { set; get; }

	/** @var MaskPositionInterface|null $maskPosition Optional. For mask stickers, the position where the mask should be placed */
	public ?MaskPositionInterface $maskPosition { set; get; }

	/** @var string|null $customEmojiId Optional. For custom emoji stickers, unique identifier of the custom emoji */
	public ?string $customEmojiId { set; get; }

	/** @var bool|null $needsRepainting Optional. True, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places */
	public ?bool $needsRepainting { set; get; }

	/** @var int|null $fileSize Optional. File size in bytes */
	public ?int $fileSize { set; get; }
}
