<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes the types of gifts that can be gifted to a user or a chat.
 */
class AcceptedGiftTypes implements Interfaces\AcceptedGiftTypesInterface
{
    /**
     * @param bool $unlimitedGifts      True, if unlimited regular gifts are accepted
     * @param bool $limitedGifts        True, if limited regular gifts are accepted
     * @param bool $uniqueGifts         True, if unique gifts or gifts that can be upgraded to unique for free are accepted
     * @param bool $premiumSubscription True, if a Telegram Premium subscription is accepted
     */
    public function __construct(
        public bool $unlimitedGifts,
        public bool $limitedGifts,
        public bool $uniqueGifts,
        public bool $premiumSubscription,
    ) {
    }
}
