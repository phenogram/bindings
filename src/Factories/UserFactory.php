<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\User;

class UserFactory extends AbstractFactory
{
    /**
     * Creates a new User instance with default fake data.
     *
     * @param int|null    $id                      Optional. Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param bool|null   $isBot                   Optional. True, if this user is a bot
     * @param string|null $firstName               Optional. User's or bot's first name
     * @param string|null $lastName                Optional. Optional. User's or bot's last name
     * @param string|null $username                Optional. Optional. User's or bot's username
     * @param string|null $languageCode            Optional. Optional. IETF language tag of the user's language
     * @param bool|null   $isPremium               Optional. Optional. True, if this user is a Telegram Premium user
     * @param bool|null   $addedToAttachmentMenu   Optional. Optional. True, if this user added the bot to the attachment menu
     * @param bool|null   $canJoinGroups           Optional. Optional. True, if the bot can be invited to groups. Returned only in getMe.
     * @param bool|null   $canReadAllGroupMessages Optional. Optional. True, if privacy mode is disabled for the bot. Returned only in getMe.
     * @param bool|null   $supportsInlineQueries   Optional. Optional. True, if the bot supports inline queries. Returned only in getMe.
     * @param bool|null   $canConnectToBusiness    Optional. Optional. True, if the bot can be connected to a Telegram Business account to receive its messages. Returned only in getMe.
     * @param bool|null   $hasMainWebApp           Optional. Optional. True, if the bot has a main Web App. Returned only in getMe.
     */
    public static function make(
        ?int $id = null,
        ?bool $isBot = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?string $username = null,
        ?string $languageCode = null,
        ?bool $isPremium = null,
        ?bool $addedToAttachmentMenu = null,
        ?bool $canJoinGroups = null,
        ?bool $canReadAllGroupMessages = null,
        ?bool $supportsInlineQueries = null,
        ?bool $canConnectToBusiness = null,
        ?bool $hasMainWebApp = null,
    ): UserInterface {
        return self::factory()->makeUser(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            isBot: $isBot ?? self::fake()->boolean(),
            firstName: $firstName ?? self::fake()->firstName(),
            lastName: $lastName,
            username: $username,
            languageCode: $languageCode,
            isPremium: $isPremium,
            addedToAttachmentMenu: $addedToAttachmentMenu,
            canJoinGroups: $canJoinGroups,
            canReadAllGroupMessages: $canReadAllGroupMessages,
            supportsInlineQueries: $supportsInlineQueries,
            canConnectToBusiness: $canConnectToBusiness,
            hasMainWebApp: $hasMainWebApp,
        );
    }
}
