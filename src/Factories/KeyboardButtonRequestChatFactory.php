<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ChatAdministratorRightsInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestChatInterface;
use Phenogram\Bindings\Types\KeyboardButtonRequestChat;

class KeyboardButtonRequestChatFactory extends AbstractFactory
{
    /**
     * Creates a new KeyboardButtonRequestChat instance with default fake data.
     *
     * @param int|null                              $requestId               Optional. Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message
     * @param bool|null                             $chatIsChannel           Optional. Pass True to request a channel chat, pass False to request a group or a supergroup chat.
     * @param bool|null                             $chatIsForum             Optional. Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied.
     * @param bool|null                             $chatHasUsername         Optional. Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied.
     * @param bool|null                             $chatIsCreated           Optional. Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied.
     * @param ChatAdministratorRightsInterface|null $userAdministratorRights Optional. Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied.
     * @param ChatAdministratorRightsInterface|null $botAdministratorRights  Optional. Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied.
     * @param bool|null                             $botIsMember             Optional. Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
     * @param bool|null                             $requestTitle            Optional. Optional. Pass True to request the chat's title
     * @param bool|null                             $requestUsername         Optional. Optional. Pass True to request the chat's username
     * @param bool|null                             $requestPhoto            Optional. Optional. Pass True to request the chat's photo
     */
    public static function make(
        ?int $requestId = null,
        ?bool $chatIsChannel = null,
        ?bool $chatIsForum = null,
        ?bool $chatHasUsername = null,
        ?bool $chatIsCreated = null,
        ?ChatAdministratorRightsInterface $userAdministratorRights = null,
        ?ChatAdministratorRightsInterface $botAdministratorRights = null,
        ?bool $botIsMember = null,
        ?bool $requestTitle = null,
        ?bool $requestUsername = null,
        ?bool $requestPhoto = null,
    ): KeyboardButtonRequestChatInterface {
        return self::factory()->makeKeyboardButtonRequestChat(
            requestId: $requestId ?? self::fake()->numberBetween(100000, 999999999),
            chatIsChannel: $chatIsChannel ?? self::fake()->boolean(),
            chatIsForum: $chatIsForum,
            chatHasUsername: $chatHasUsername,
            chatIsCreated: $chatIsCreated,
            userAdministratorRights: $userAdministratorRights,
            botAdministratorRights: $botAdministratorRights,
            botIsMember: $botIsMember,
            requestTitle: $requestTitle,
            requestUsername: $requestUsername,
            requestPhoto: $requestPhoto,
        );
    }
}
