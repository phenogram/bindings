<?php

namespace Phenogram\Bindings\Types;

/**
 * Contains information about the start page settings of a Telegram Business account.
 */
class BusinessIntro implements TypeInterface
{
    /**
     * @param string|null  $title   Optional. Title text of the business intro
     * @param string|null  $message Optional. Message text of the business intro
     * @param Sticker|null $sticker Optional. Sticker of the business intro
     */
    public function __construct(
        public ?string $title = null,
        public ?string $message = null,
        public ?Sticker $sticker = null,
    ) {
    }
}
