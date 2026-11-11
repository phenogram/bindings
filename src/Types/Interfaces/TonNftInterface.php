<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an NFT in the TON blockchain.
 */
interface TonNftInterface extends TypeInterface
{
    /** @var string $address Address of the NFT */
    public string $address { set; get; }

    /** @var string|null $collectionAddress Optional. Address of the collection to which the NFT belongs; omitted if unknown */
    public ?string $collectionAddress { set; get; }

    /** @var string $index Index of the NFT among all NFTs from the collection as a decimal number */
    public string $index { set; get; }

    /** @var string $name Name of the NFT */
    public string $name { set; get; }

    /** @var string $description Description of the NFT */
    public string $description { set; get; }

    /** @var array<TonNftAttributeInterface>|null $attributes Optional. Attributes of the NFT */
    public ?array $attributes { set; get; }

    /** @var UniqueGiftInterface|null $gift Optional. The unique gift corresponding to the NFT */
    public ?UniqueGiftInterface $gift { set; get; }
}
