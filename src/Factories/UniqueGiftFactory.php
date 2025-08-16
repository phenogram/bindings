<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\UniqueGiftBackdropFactory as UniqueGiftBackdrop;
use Phenogram\Bindings\Factories\UniqueGiftModelFactory as UniqueGiftModel;
use Phenogram\Bindings\Factories\UniqueGiftSymbolFactory as UniqueGiftSymbol;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftSymbolInterface;
use Phenogram\Bindings\Types\UniqueGift;

class UniqueGiftFactory extends AbstractFactory
{
    /**
     * Creates a new UniqueGift instance with default fake data.
     *
     * @param string|null                      $baseName      Optional. Human-readable name of the regular gift from which this unique gift was upgraded
     * @param string|null                      $name          Optional. Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     * @param int|null                         $number        Optional. Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param UniqueGiftModelInterface|null    $model         Optional. Model of the gift
     * @param UniqueGiftSymbolInterface|null   $symbol        Optional. Symbol of the gift
     * @param UniqueGiftBackdropInterface|null $backdrop      Optional. Backdrop of the gift
     * @param ChatInterface|null               $publisherChat Optional. Optional. Information about the chat that published the gift
     */
    public static function make(
        ?string $baseName = null,
        ?string $name = null,
        ?int $number = null,
        ?UniqueGiftModelInterface $model = null,
        ?UniqueGiftSymbolInterface $symbol = null,
        ?UniqueGiftBackdropInterface $backdrop = null,
        ?ChatInterface $publisherChat = null,
    ): UniqueGiftInterface {
        return self::factory()->makeUniqueGift(
            baseName: $baseName ?? self::fake()->text(50),
            name: $name ?? self::fake()->text(50),
            number: $number ?? self::fake()->randomNumber(),
            model: $model ?? UniqueGiftModel::make(),
            symbol: $symbol ?? UniqueGiftSymbol::make(),
            backdrop: $backdrop ?? UniqueGiftBackdrop::make(),
            publisherChat: $publisherChat,
        );
    }
}
