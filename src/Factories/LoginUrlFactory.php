<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LoginUrlInterface;
use Phenogram\Bindings\Types\LoginUrl;

class LoginUrlFactory extends AbstractFactory
{
    /**
     * Creates a new LoginUrl instance with default fake data.
     *
     * @param string|null $url                Optional. An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in Receiving authorization data.NOTE: You must always check the hash of the received data to verify the authentication and the integrity of the data as described in Checking authorization.
     * @param string|null $forwardText        Optional. Optional. New text of the button in forwarded messages.
     * @param string|null $botUsername        Optional. Optional. Username of a bot, which will be used for user authorization. See Setting up a bot for more details. If not specified, the current bot's username will be assumed. The url's domain must be the same as the domain linked with the bot. See Linking your domain to the bot for more details.
     * @param bool|null   $requestWriteAccess Optional. Optional. Pass True to request the permission for your bot to send messages to the user.
     */
    public static function make(
        ?string $url = null,
        ?string $forwardText = null,
        ?string $botUsername = null,
        ?bool $requestWriteAccess = null,
    ): LoginUrlInterface {
        return self::factory()->makeLoginUrl(
            url: $url ?? self::fake()->url(),
            forwardText: $forwardText,
            botUsername: $botUsername,
            requestWriteAccess: $requestWriteAccess,
        );
    }
}
