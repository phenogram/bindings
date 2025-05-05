<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\GiftFactory as Gift;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerChatInterface;
use Phenogram\Bindings\Types\TransactionPartnerChat;

class TransactionPartnerChatFactory extends AbstractFactory
{
    /**
     * Creates a new TransactionPartnerChat instance with default fake data.
     *
     * @param string|null        $type Optional. Type of the transaction partner, always “chat”
     * @param ChatInterface|null $chat Optional. Information about the chat
     * @param GiftInterface|null $gift Optional. Optional. The gift sent to the chat by the bot
     */
    public static function make(
        ?string $type = null,
        ?ChatInterface $chat = null,
        ?GiftInterface $gift = null,
    ): TransactionPartnerChatInterface {
        return self::factory()->makeTransactionPartnerChat(
            type: $type ?? self::fake()->word(),
            chat: $chat ?? Chat::make(),
            gift: $gift,
        );
    }
}
