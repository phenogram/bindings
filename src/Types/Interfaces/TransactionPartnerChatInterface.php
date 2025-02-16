<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a transaction with a chat.
 */
interface TransactionPartnerChatInterface extends TypeInterface
{
    /** @var string $type Type of the transaction partner, always “chat” */
    public string $type { set; }

    /** @var ChatInterface $chat Information about the chat */
    public ChatInterface $chat { set; }

    /** @var GiftInterface|null $gift Optional. The gift sent to the chat by the bot */
    public ?GiftInterface $gift { set; }
}
