<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\UniqueGiftModel;

class UniqueGiftModelFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGiftModel instance with default fake data.
     *
     * @param string|null           $name           Optional. Name of the model
     * @param StickerInterface|null $sticker        Optional. The sticker that represents the unique gift
     * @param int|null              $rarityPerMille Optional. The number of unique gifts that receive this model for every 1000 gifts upgraded
     */
    public static function make(
        ?string $name = null,
        ?StickerInterface $sticker = null,
        ?int $rarityPerMille = null,
    ): UniqueGiftModelInterface {
        return self::factory()->makeUniqueGiftModel(
            name: $name ?? self::fake()->text(50),
            sticker: $sticker ?? Sticker::make(),
            rarityPerMille: $rarityPerMille ?? self::fake()->randomNumber(),
        );
    }
}
