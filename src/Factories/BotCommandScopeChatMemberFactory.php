<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BotCommandScopeChatMember;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatMemberInterface;

class BotCommandScopeChatMemberFactory extends AbstractFactory
{
    /**
     * Creates a new BotCommandScopeChatMember instance with default fake data.
     *
     * @param string|null     $type   Optional. Scope type, must be chat_member
     * @param int|string|null $chatId Optional. Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param int|null        $userId Optional. Unique identifier of the target user
     */
    public static function make(
        ?string $type = null,
        int|string|null $chatId = null,
        ?int $userId = null,
    ): BotCommandScopeChatMemberInterface {
        return self::factory()->makeBotCommandScopeChatMember(
            type: $type ?? self::fake()->word(),
            chatId: $chatId ?? self::fake()->numberBetween(100000, 999999999),
            userId: $userId ?? self::fake()->numberBetween(100000, 999999999),
        );
    }
}
