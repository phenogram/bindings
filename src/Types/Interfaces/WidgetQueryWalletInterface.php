<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a TON wallet of the user, which is used in a query from a widget.
 */
interface WidgetQueryWalletInterface extends TypeInterface
{
    /** @var string $address Address of the wallet */
    public string $address { set; get; }

    /** @var string $amount Balance of the wallet, in the smallest units of the cryptocurrency, as a decimal number */
    public string $amount { set; get; }

    /** @var string|null $publicKey Optional. Hex-encoded public key of the wallet; omitted if unknown */
    public ?string $publicKey { set; get; }

    /** @var string|null $stateInit Optional. Base64-encoded serialized StateInit of the wallet contract; omitted if and only if public_key is omitted */
    public ?string $stateInit { set; get; }
}
