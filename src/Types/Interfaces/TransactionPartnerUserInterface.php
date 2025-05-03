<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a transaction with a user.
 */
interface TransactionPartnerUserInterface extends TypeInterface
{
    /** @var string $type Type of the transaction partner, always “user” */
    public string $type { set; get; }

    /** @var string $transactionType Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts */
    public string $transactionType { set; get; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; get; }

    /** @var AffiliateInfoInterface|null $affiliate Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions. */
    public ?AffiliateInfoInterface $affiliate { set; get; }

    /** @var string|null $invoicePayload Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions. */
    public ?string $invoicePayload { set; get; }

    /** @var int|null $subscriptionPeriod Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions. */
    public ?int $subscriptionPeriod { set; get; }

    /** @var array<PaidMediaInterface>|null $paidMedia Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only */
    public ?array $paidMedia { set; get; }

    /** @var string|null $paidMediaPayload Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions. */
    public ?string $paidMediaPayload { set; get; }

    /** @var GiftInterface|null $gift Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only */
    public ?GiftInterface $gift { set; get; }

    /** @var int|null $premiumSubscriptionDuration Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only */
    public ?int $premiumSubscriptionDuration { set; get; }
}
