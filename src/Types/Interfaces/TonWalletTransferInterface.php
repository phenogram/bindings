<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a service message about a transfer with a TON wallet.
 */
interface TonWalletTransferInterface extends TypeInterface
{
    /** @var string $transactionId Unique identifier of the transaction; may be empty if the transfer hasn't been sent yet */
    public string $transactionId { set; get; }

    /** @var string $peerAddress Address of the transfer peer in the TON blockchain */
    public string $peerAddress { set; get; }

    /** @var string $amount The amount of transferred cryptocurrency, in the smallest units of the cryptocurrency, as a decimal number; negative for outgoing transfers */
    public string $amount { set; get; }

    /** @var string|null $comment Optional. Comment added to the transfer; omitted if the comment is encrypted */
    public ?string $comment { set; get; }
}
