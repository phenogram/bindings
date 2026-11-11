<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an attribute of an NFT in the TON blockchain.
 */
interface TonNftAttributeInterface extends TypeInterface
{
    /** @var string $traitType Trait type of the attribute */
    public string $traitType { set; get; }

    /** @var string $value Value of the attribute */
    public string $value { set; get; }
}
