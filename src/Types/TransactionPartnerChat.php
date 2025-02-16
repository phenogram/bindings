<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;

/**
 * Describes a transaction with a chat.
 */
class TransactionPartnerChat extends TransactionPartner implements Interfaces\TransactionPartnerChatInterface
{
    /**
     * @param string             $type Type of the transaction partner, always “chat”
     * @param ChatInterface      $chat Information about the chat
     * @param GiftInterface|null $gift Optional. The gift sent to the chat by the bot
     */
    public function __construct(
        public string $type,
        public ChatInterface $chat,
        public ?GiftInterface $gift = null,
    ) {
    }
}
