<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 */
interface PassportFileInterface extends TypeInterface
{
	/** @var string $fileId Identifier for this file, which can be used to download or reuse the file */
	public string $fileId { set; get; }

	/** @var string $fileUniqueId Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file. */
	public string $fileUniqueId { set; get; }

	/** @var int $fileSize File size in bytes */
	public int $fileSize { set; get; }

	/** @var int $fileDate Unix time when the file was uploaded */
	public int $fileDate { set; get; }
}
