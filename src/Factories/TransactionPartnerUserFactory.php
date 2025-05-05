<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\GiftFactory as Gift;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\AffiliateInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerUserInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\TransactionPartnerUser;

class TransactionPartnerUserFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerUser instance with default fake data.
     *
     * @param string|null                 $type                        Optional. Type of the transaction partner, always “user”
     * @param string|null                 $transactionType             Optional. Type of the transaction, currently one of “invoice_payment” for payments via invoices, “paid_media_payment” for payments for paid media, “gift_purchase” for gifts sent by the bot, “premium_purchase” for Telegram Premium subscriptions gifted by the bot, “business_account_transfer” for direct transfers from managed business accounts
     * @param UserInterface|null          $user                        Optional. Information about the user
     * @param AffiliateInfoInterface|null $affiliate                   Optional. Optional. Information about the affiliate that received a commission via this transaction. Can be available only for “invoice_payment” and “paid_media_payment” transactions.
     * @param string|null                 $invoicePayload              Optional. Optional. Bot-specified invoice payload. Can be available only for “invoice_payment” transactions.
     * @param int|null                    $subscriptionPeriod          Optional. Optional. The duration of the paid subscription. Can be available only for “invoice_payment” transactions.
     * @param array|null                  $paidMedia                   Optional. Optional. Information about the paid media bought by the user; for “paid_media_payment” transactions only
     * @param string|null                 $paidMediaPayload            Optional. Optional. Bot-specified paid media payload. Can be available only for “paid_media_payment” transactions.
     * @param GiftInterface|null          $gift                        Optional. Optional. The gift sent to the user by the bot; for “gift_purchase” transactions only
     * @param int|null                    $premiumSubscriptionDuration Optional. Optional. Number of months the gifted Telegram Premium subscription will be active for; for “premium_purchase” transactions only
     */
    public static function make(
        ?string $type = null,
        ?string $transactionType = null,
        ?UserInterface $user = null,
        ?AffiliateInfoInterface $affiliate = null,
        ?string $invoicePayload = null,
        ?int $subscriptionPeriod = null,
        ?array $paidMedia = null,
        ?string $paidMediaPayload = null,
        ?GiftInterface $gift = null,
        ?int $premiumSubscriptionDuration = null,
    ): TransactionPartnerUserInterface {
        return self::factory()->makeTransactionPartnerUser(
            type: $type ?? self::fake()->word(),
            transactionType: $transactionType ?? self::fake()->text(50),
            user: $user ?? User::make(),
            affiliate: $affiliate,
            invoicePayload: $invoicePayload,
            subscriptionPeriod: $subscriptionPeriod,
            paidMedia: $paidMedia,
            paidMediaPayload: $paidMediaPayload,
            gift: $gift,
            premiumSubscriptionDuration: $premiumSubscriptionDuration,
        );
    }
}
