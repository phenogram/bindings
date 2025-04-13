<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
interface UniqueGiftInterface extends TypeInterface
{
    /** @var string $baseName Human-readable name of the regular gift from which this unique gift was upgraded */
    public string $baseName { set; }

    /** @var string $name Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas */
    public string $name { set; }

    /** @var int $number Unique number of the upgraded gift among gifts upgraded from the same regular gift */
    public int $number { set; }

    /** @var UniqueGiftModelInterface $model Model of the gift */
    public UniqueGiftModelInterface $model { set; }

    /** @var UniqueGiftSymbolInterface $symbol Symbol of the gift */
    public UniqueGiftSymbolInterface $symbol { set; }

    /** @var UniqueGiftBackdropInterface $backdrop Backdrop of the gift */
    public UniqueGiftBackdropInterface $backdrop { set; }
}
