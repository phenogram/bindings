<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 */
interface PassportElementErrorFrontSideInterface extends TypeInterface
{
	/** @var string $source Error source, must be front_side */
	public string $source { set; get; }

	/** @var string $type The section of the user's Telegram Passport which has the issue, one of “passport”, “driver_license”, “identity_card”, “internal_passport” */
	public string $type { set; get; }

	/** @var string $fileHash Base64-encoded hash of the file with the front side of the document */
	public string $fileHash { set; get; }

	/** @var string $message Error message */
	public string $message { set; get; }
}
