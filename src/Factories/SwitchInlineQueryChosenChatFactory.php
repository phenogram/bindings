<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\SwitchInlineQueryChosenChat;

class SwitchInlineQueryChosenChatFactory extends AbstractFactory
{
    /**
     * Creates a new SwitchInlineQueryChosenChat instance with default fake data.
     *
     * @param string|null $query             Optional. Optional. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted
     * @param bool|null   $allowUserChats    Optional. Optional. True, if private chats with users can be chosen
     * @param bool|null   $allowBotChats     Optional. Optional. True, if private chats with bots can be chosen
     * @param bool|null   $allowGroupChats   Optional. Optional. True, if group and supergroup chats can be chosen
     * @param bool|null   $allowChannelChats Optional. Optional. True, if channel chats can be chosen
     */
    public static function make(
        ?string $query = null,
        ?bool $allowUserChats = null,
        ?bool $allowBotChats = null,
        ?bool $allowGroupChats = null,
        ?bool $allowChannelChats = null,
    ): SwitchInlineQueryChosenChatInterface {
        return self::factory()->makeSwitchInlineQueryChosenChat(
            query: $query,
            allowUserChats: $allowUserChats,
            allowBotChats: $allowBotChats,
            allowGroupChats: $allowGroupChats,
            allowChannelChats: $allowChannelChats,
        );
    }
}
