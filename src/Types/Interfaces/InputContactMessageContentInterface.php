<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 */
interface InputContactMessageContentInterface extends TypeInterface
{
	/** @var string $phoneNumber Contact's phone number */
	public string $phoneNumber { set; get; }

	/** @var string $firstName Contact's first name */
	public string $firstName { set; get; }

	/** @var string|null $lastName Optional. Contact's last name */
	public ?string $lastName { set; get; }

	/** @var string|null $vcard Optional. Additional data about the contact in the form of a vCard, 0-2048 bytes */
	public ?string $vcard { set; get; }
}
