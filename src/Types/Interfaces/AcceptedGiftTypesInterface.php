<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
interface AcceptedGiftTypesInterface extends TypeInterface
{
    /** @var bool $unlimitedGifts True, if unlimited regular gifts are accepted */
    public bool $unlimitedGifts { set; }

    /** @var bool $limitedGifts True, if limited regular gifts are accepted */
    public bool $limitedGifts { set; }

    /** @var bool $uniqueGifts True, if unique gifts or gifts that can be upgraded to unique for free are accepted */
    public bool $uniqueGifts { set; }

    /** @var bool $premiumSubscription True, if a Telegram Premium subscription is accepted */
    public bool $premiumSubscription { set; }
}
