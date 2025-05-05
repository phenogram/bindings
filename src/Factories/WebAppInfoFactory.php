<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;
use Phenogram\Bindings\Types\WebAppInfo;

class WebAppInfoFactory extends AbstractFactory
{
    /**
     * Creates a new WebAppInfo instance with default fake data.
     *
     * @param string|null $url Optional. An HTTPS URL of a Web App to be opened with additional data as specified in Initializing Web Apps
     */
    public static function make(?string $url = null): WebAppInfoInterface
    {
        return self::factory()->makeWebAppInfo(
            url: $url ?? self::fake()->url(),
        );
    }
}
