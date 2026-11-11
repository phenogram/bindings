<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\TonNftAttributeInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;

/**
 * This object represents an NFT in the TON blockchain.
 */
class TonNft implements Interfaces\TonNftInterface
{
    /**
     * @param string                               $address           Address of the NFT
     * @param string                               $index             Index of the NFT among all NFTs from the collection as a decimal number
     * @param string                               $name              Name of the NFT
     * @param string                               $description       Description of the NFT
     * @param string|null                          $collectionAddress Optional. Address of the collection to which the NFT belongs; omitted if unknown
     * @param array<TonNftAttributeInterface>|null $attributes        Optional. Attributes of the NFT
     * @param UniqueGiftInterface|null             $gift              Optional. The unique gift corresponding to the NFT
     */
    public function __construct(
        public string $address,
        public string $index,
        public string $name,
        public string $description,
        public ?string $collectionAddress = null,
        public ?array $attributes = null,
        public ?UniqueGiftInterface $gift = null,
    ) {
    }
}
