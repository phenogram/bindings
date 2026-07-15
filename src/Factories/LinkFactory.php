<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LinkInterface;
use Phenogram\Bindings\Types\Link;

class LinkFactory extends AbstractFactory
{
    /**
     * Creates a new Link instance with default fake data.
     *
     * @param string|null $url Optional. URL of the link
     */
    public static function make(?string $url = null): LinkInterface
    {
        return self::factory()->makeLink(
            url: $url ?? self::fake()->url(),
        );
    }
}
