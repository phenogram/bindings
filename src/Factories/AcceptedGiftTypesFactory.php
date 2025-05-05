<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\AcceptedGiftTypes;
use Phenogram\Bindings\Types\Interfaces\AcceptedGiftTypesInterface;

class AcceptedGiftTypesFactory extends AbstractFactory
{
    /**
     * Creates a new AcceptedGiftTypes instance with default fake data.
     *
     * @param bool|null $unlimitedGifts      Optional. True, if unlimited regular gifts are accepted
     * @param bool|null $limitedGifts        Optional. True, if limited regular gifts are accepted
     * @param bool|null $uniqueGifts         Optional. True, if unique gifts or gifts that can be upgraded to unique for free are accepted
     * @param bool|null $premiumSubscription Optional. True, if a Telegram Premium subscription is accepted
     */
    public static function make(
        ?bool $unlimitedGifts = null,
        ?bool $limitedGifts = null,
        ?bool $uniqueGifts = null,
        ?bool $premiumSubscription = null,
    ): AcceptedGiftTypesInterface {
        return self::factory()->makeAcceptedGiftTypes(
            unlimitedGifts: $unlimitedGifts ?? self::fake()->boolean(),
            limitedGifts: $limitedGifts ?? self::fake()->boolean(),
            uniqueGifts: $uniqueGifts ?? self::fake()->boolean(),
            premiumSubscription: $premiumSubscription ?? self::fake()->boolean(),
        );
    }
}
