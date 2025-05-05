<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\MessageOriginHiddenUserInterface;
use Phenogram\Bindings\Types\MessageOriginHiddenUser;

class MessageOriginHiddenUserFactory extends AbstractFactory
{
    /**
     * Creates a new MessageOriginHiddenUser instance with default fake data.
     *
     * @param string|null $type           Optional. Type of the message origin, always “hidden_user”
     * @param int|null    $date           Optional. Date the message was sent originally in Unix time
     * @param string|null $senderUserName Optional. Name of the user that sent the message originally
     */
    public static function make(
        ?string $type = null,
        ?int $date = null,
        ?string $senderUserName = null,
    ): MessageOriginHiddenUserInterface {
        return self::factory()->makeMessageOriginHiddenUser(
            type: $type ?? self::fake()->word(),
            date: $date ?? self::fake()->unixTime(),
            senderUserName: $senderUserName ?? self::fake()->text(50),
        );
    }
}
