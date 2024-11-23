<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a phone contact.
 */
interface ContactInterface extends TypeInterface
{
	/** @var string $phoneNumber Contact's phone number */
	public string $phoneNumber { set; get; }

	/** @var string $firstName Contact's first name */
	public string $firstName { set; get; }

	/** @var string|null $lastName Optional. Contact's last name */
	public ?string $lastName { set; get; }

	/** @var int|null $userId Optional. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. */
	public ?int $userId { set; get; }

	/** @var string|null $vcard Optional. Additional data about the contact in the form of a vCard */
	public ?string $vcard { set; get; }
}
