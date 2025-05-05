<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\ProximityAlertTriggeredInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\ProximityAlertTriggered;

class ProximityAlertTriggeredFactory extends AbstractFactory
{
    /**
     * Creates a new ProximityAlertTriggered instance with default fake data.
     *
     * @param UserInterface|null $traveler Optional. User that triggered the alert
     * @param UserInterface|null $watcher  Optional. User that set the alert
     * @param int|null           $distance Optional. The distance between the users
     */
    public static function make(
        ?UserInterface $traveler = null,
        ?UserInterface $watcher = null,
        ?int $distance = null,
    ): ProximityAlertTriggeredInterface {
        return self::factory()->makeProximityAlertTriggered(
            traveler: $traveler ?? User::make(),
            watcher: $watcher ?? User::make(),
            distance: $distance ?? self::fake()->randomNumber(),
        );
    }
}
