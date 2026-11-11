<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\PaidMessagesWaivedInterface;
use Phenogram\Bindings\Types\PaidMessagesWaived;

class PaidMessagesWaivedFactory extends AbstractFactory
{
    /**
     * Creates a new PaidMessagesWaived instance with default fake data.
     */
    public static function make(): PaidMessagesWaivedInterface
    {
        return self::factory()->makePaidMessagesWaived(
        );
    }
}
