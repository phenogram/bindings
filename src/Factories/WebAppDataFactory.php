<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WebAppDataInterface;
use Phenogram\Bindings\Types\WebAppData;

class WebAppDataFactory extends AbstractFactory
{
    /**
     * Creates a new WebAppData instance with default fake data.
     *
     * @param string|null $data       Optional. The data. Be aware that a bad client can send arbitrary data in this field.
     * @param string|null $buttonText Optional. Text of the web_app keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
     */
    public static function make(?string $data = null, ?string $buttonText = null): WebAppDataInterface
    {
        return self::factory()->makeWebAppData(
            data: $data ?? self::fake()->text(50),
            buttonText: $buttonText ?? self::fake()->text(50),
        );
    }
}
