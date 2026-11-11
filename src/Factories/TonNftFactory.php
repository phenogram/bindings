<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TonNftInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\TonNft;

class TonNftFactory extends AbstractFactory
{
    /**
     * Creates a new TonNft instance with default fake data.
     *
     * @param string|null              $address           Optional. Address of the NFT
     * @param string|null              $collectionAddress Optional. Optional. Address of the collection to which the NFT belongs; omitted if unknown
     * @param string|null              $index             Optional. Index of the NFT among all NFTs from the collection as a decimal number
     * @param string|null              $name              Optional. Name of the NFT
     * @param string|null              $description       Optional. Description of the NFT
     * @param array|null               $attributes        Optional. Optional. Attributes of the NFT
     * @param UniqueGiftInterface|null $gift              Optional. Optional. The unique gift corresponding to the NFT
     */
    public static function make(
        ?string $address = null,
        ?string $collectionAddress = null,
        ?string $index = null,
        ?string $name = null,
        ?string $description = null,
        ?array $attributes = null,
        ?UniqueGiftInterface $gift = null,
    ): TonNftInterface {
        return self::factory()->makeTonNft(
            address: $address ?? self::fake()->text(50),
            collectionAddress: $collectionAddress,
            index: $index ?? self::fake()->text(50),
            name: $name ?? self::fake()->text(50),
            description: $description ?? self::fake()->sentence(),
            attributes: $attributes,
            gift: $gift,
        );
    }
}
