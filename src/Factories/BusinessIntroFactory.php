<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Types\BusinessIntro;
use Phenogram\Bindings\Types\Interfaces\BusinessIntroInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;

class BusinessIntroFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessIntro instance with default fake data.
     *
     * @param string|null           $title   Optional. Optional. Title text of the business intro
     * @param string|null           $message Optional. Optional. Message text of the business intro
     * @param StickerInterface|null $sticker Optional. Optional. Sticker of the business intro
     */
    public static function make(
        ?string $title = null,
        ?string $message = null,
        ?StickerInterface $sticker = null,
    ): BusinessIntroInterface {
        return self::factory()->makeBusinessIntro(
            title: $title,
            message: $message,
            sticker: $sticker,
        );
    }
}
