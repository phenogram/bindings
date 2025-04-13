<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AffiliateInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * Describes a transaction with a user.
 */
class TransactionPartnerUser extends TransactionPartner implements Interfaces\TransactionPartnerUserInterface
{
    /**
     * @param string                         $type                        Type of the transaction partner, always “user”
     * @param string                         $transactionType             Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
     * @param UserInterface                  $user                        Information about the user
     * @param AffiliateInfoInterface|null    $affiliate                   Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
     * @param string|null                    $invoicePayload              Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
     * @param int|null                       $subscriptionPeriod          Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
     * @param array<PaidMediaInterface>|null $paidMedia                   Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     * @param string|null                    $paidMediaPayload            Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
     * @param GiftInterface|null             $gift                        Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
     * @param int|null                       $premiumSubscriptionDuration Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
     */
    public function __construct(
        public string $type,
        public string $transactionType,
        public UserInterface $user,
        public ?AffiliateInfoInterface $affiliate = null,
        public ?string $invoicePayload = null,
        public ?int $subscriptionPeriod = null,
        public ?array $paidMedia = null,
        public ?string $paidMediaPayload = null,
        public ?GiftInterface $gift = null,
        public ?int $premiumSubscriptionDuration = null,
    ) {
    }
}
