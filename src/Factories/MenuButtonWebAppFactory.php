<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\WebAppInfoFactory as WebAppInfo;
use Phenogram\Bindings\Types\Interfaces\MenuButtonWebAppInterface;
use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;
use Phenogram\Bindings\Types\MenuButtonWebApp;

class MenuButtonWebAppFactory extends AbstractFactory
{
    /**
     * Creates a new MenuButtonWebApp instance with default fake data.
     *
     * @param string|null              $type   Optional. Type of the button, must be web_app
     * @param string|null              $text   Optional. Text on the button
     * @param WebAppInfoInterface|null $webApp Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Alternatively, a t.me link to a Web App of the bot can be specified in the object instead of the Web App's URL, in which case the Web App will be opened as if the user pressed the link.
     */
    public static function make(
        ?string $type = null,
        ?string $text = null,
        ?WebAppInfoInterface $webApp = null,
    ): MenuButtonWebAppInterface {
        return self::factory()->makeMenuButtonWebApp(
            type: $type ?? self::fake()->word(),
            text: $text ?? self::fake()->sentence(),
            webApp: $webApp ?? WebAppInfo::make(),
        );
    }
}
