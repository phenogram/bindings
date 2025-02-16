<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains information about the start page settings of a Telegram Business account.
 */
interface BusinessIntroInterface extends TypeInterface
{
    /** @var string|null $title Optional. Title text of the business intro */
    public ?string $title { set; }

    /** @var string|null $message Optional. Message text of the business intro */
    public ?string $message { set; }

    /** @var StickerInterface|null $sticker Optional. Sticker of the business intro */
    public ?StickerInterface $sticker { set; }
}
