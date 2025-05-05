<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\MessageOriginUserInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\MessageOriginUser;

class MessageOriginUserFactory extends AbstractFactory
{
    /**
     * Creates a new MessageOriginUser instance with default fake data.
     *
     * @param string|null        $type       Optional. Type of the message origin, always “user”
     * @param int|null           $date       Optional. Date the message was sent originally in Unix time
     * @param UserInterface|null $senderUser Optional. User that sent the message originally
     */
    public static function make(
        ?string $type = null,
        ?int $date = null,
        ?UserInterface $senderUser = null,
    ): MessageOriginUserInterface {
        return self::factory()->makeMessageOriginUser(
            type: $type ?? self::fake()->word(),
            date: $date ?? self::fake()->unixTime(),
            senderUser: $senderUser ?? User::make(),
        );
    }
}
