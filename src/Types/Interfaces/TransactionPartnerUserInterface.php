<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a transaction with a user.
 */
interface TransactionPartnerUserInterface extends TypeInterface
{
	/** @var string $type Type of the transaction partner, always “user” */
	public string $type { set; get; }

	/** @var UserInterface $user Information about the user */
	public UserInterface $user { set; get; }

	/** @var AffiliateInfoInterface|null $affiliate Optional. Information about the affiliate that received a commission via this transaction */
	public ?AffiliateInfoInterface $affiliate { set; get; }

	/** @var string|null $invoicePayload Optional. Bot-specified invoice payload */
	public ?string $invoicePayload { set; get; }

	/** @var int|null $subscriptionPeriod Optional. The duration of the paid subscription */
	public ?int $subscriptionPeriod { set; get; }

	/** @var array<PaidMediaInterface>|null $paidMedia Optional. Information about the paid media bought by the user */
	public ?array $paidMedia { set; get; }

	/** @var string|null $paidMediaPayload Optional. Bot-specified paid media payload */
	public ?string $paidMediaPayload { set; get; }

	/** @var GiftInterface|null $gift Optional. The gift sent to the user by the bot */
	public ?GiftInterface $gift { set; get; }
}
