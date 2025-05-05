<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPurchasedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\PaidMediaPurchased;

class PaidMediaPurchasedFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMediaPurchased instance with default fake data.
     *
     * @param UserInterface|null $from             Optional. User who purchased the media
     * @param string|null        $paidMediaPayload Optional. Bot-specified paid media payload
     */
    public static function make(
        ?UserInterface $from = null,
        ?string $paidMediaPayload = null,
    ): PaidMediaPurchasedInterface {
        return self::factory()->makePaidMediaPurchased(
            from: $from ?? User::make(),
            paidMediaPayload: $paidMediaPayload ?? self::fake()->text(50),
        );
    }
}
