<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a service message about a transfer with a TON wallet.
 */
class TonWalletTransfer implements Interfaces\TonWalletTransferInterface
{
    /**
     * @param string      $transactionId Unique identifier of the transaction; may be empty if the transfer hasn't been sent yet
     * @param string      $peerAddress   Address of the transfer peer in the TON blockchain
     * @param string      $amount        The amount of transferred cryptocurrency, in the smallest units of the cryptocurrency, as a decimal number; negative for outgoing transfers
     * @param string|null $comment       Optional. Comment added to the transfer; omitted if the comment is encrypted
     */
    public function __construct(
        public string $transactionId,
        public string $peerAddress,
        public string $amount,
        public ?string $comment = null,
    ) {
    }
}
