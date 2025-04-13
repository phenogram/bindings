<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftSymbolInterface;

/**
 * This object describes a unique gift that was upgraded from a regular gift.
 */
class UniqueGift implements Interfaces\UniqueGiftInterface
{
    /**
     * @param string                      $baseName Human-readable name of the regular gift from which this unique gift was upgraded
     * @param string                      $name     Unique name of the gift. This name can be used in https://t.me/nft/... links and story areas
     * @param int                         $number   Unique number of the upgraded gift among gifts upgraded from the same regular gift
     * @param UniqueGiftModelInterface    $model    Model of the gift
     * @param UniqueGiftSymbolInterface   $symbol   Symbol of the gift
     * @param UniqueGiftBackdropInterface $backdrop Backdrop of the gift
     */
    public function __construct(
        public string $baseName,
        public string $name,
        public int $number,
        public UniqueGiftModelInterface $model,
        public UniqueGiftSymbolInterface $symbol,
        public UniqueGiftBackdropInterface $backdrop,
    ) {
    }
}
