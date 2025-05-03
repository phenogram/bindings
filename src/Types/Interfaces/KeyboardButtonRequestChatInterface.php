<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object defines the criteria used to request a suitable chat. Information about the selected chat will be shared with the bot when the corresponding button is pressed. The bot will be granted requested rights in the chat if appropriate. More about requesting chats ».
 */
interface KeyboardButtonRequestChatInterface extends TypeInterface
{
    /** @var int $requestId Signed 32-bit identifier of the request, which will be received back in the ChatShared object. Must be unique within the message */
    public int $requestId { set; get; }

    /** @var bool $chatIsChannel Pass True to request a channel chat, pass False to request a group or a supergroup chat. */
    public bool $chatIsChannel { set; get; }

    /** @var bool|null $chatIsForum Optional. Pass True to request a forum supergroup, pass False to request a non-forum chat. If not specified, no additional restrictions are applied. */
    public ?bool $chatIsForum { set; get; }

    /** @var bool|null $chatHasUsername Optional. Pass True to request a supergroup or a channel with a username, pass False to request a chat without a username. If not specified, no additional restrictions are applied. */
    public ?bool $chatHasUsername { set; get; }

    /** @var bool|null $chatIsCreated Optional. Pass True to request a chat owned by the user. Otherwise, no additional restrictions are applied. */
    public ?bool $chatIsCreated { set; get; }

    /** @var ChatAdministratorRightsInterface|null $userAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of bot_administrator_rights. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRightsInterface $userAdministratorRights { set; get; }

    /** @var ChatAdministratorRightsInterface|null $botAdministratorRights Optional. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of user_administrator_rights. If not specified, no additional restrictions are applied. */
    public ?ChatAdministratorRightsInterface $botAdministratorRights { set; get; }

    /** @var bool|null $botIsMember Optional. Pass True to request a chat with the bot as a member. Otherwise, no additional restrictions are applied. */
    public ?bool $botIsMember { set; get; }

    /** @var bool|null $requestTitle Optional. Pass True to request the chat's title */
    public ?bool $requestTitle { set; get; }

    /** @var bool|null $requestUsername Optional. Pass True to request the chat's username */
    public ?bool $requestUsername { set; get; }

    /** @var bool|null $requestPhoto Optional. Pass True to request the chat's photo */
    public ?bool $requestPhoto { set; get; }
}
