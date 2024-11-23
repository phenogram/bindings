<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;

/**
 * Contains information about the location of a Telegram Business account.
 */
class BusinessLocation implements Interfaces\BusinessLocationInterface
{
    /**
     * @param string                 $address  Address of the business
     * @param LocationInterface|null $location Optional. Location of the business
     */
    public function __construct(
        public string $address,
        public ?LocationInterface $location = null,
    ) {
    }
}
