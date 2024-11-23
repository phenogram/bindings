<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a video message (available in Telegram apps as of v.4.0).
 */
interface VideoNoteInterface extends TypeInterface
{
	/** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
	public string $fileId { set; get; }

	/** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $fileUniqueId { set; get; }

	/** @var int $length Video width and height (diameter of the video message) as defined by the sender */
	public int $length { set; get; }

	/** @var int $duration Duration of the video in seconds as defined by the sender */
	public int $duration { set; get; }

	/** @var PhotoSizeInterface|null $thumbnail Optional. Video thumbnail */
	public ?PhotoSizeInterface $thumbnail { set; get; }

	/** @var int|null $fileSize Optional. File size in bytes */
	public ?int $fileSize { set; get; }
}
