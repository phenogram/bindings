<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents an attribute of an NFT in the TON blockchain.
 */
class TonNftAttribute implements Interfaces\TonNftAttributeInterface
{
    /**
     * @param string $traitType Trait type of the attribute
     * @param string $value     Value of the attribute
     */
    public function __construct(
        public string $traitType,
        public string $value,
    ) {
    }
}
