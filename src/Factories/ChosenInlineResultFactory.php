<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChosenInlineResult;
use Phenogram\Bindings\Types\Interfaces\ChosenInlineResultInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChosenInlineResultFactory extends AbstractFactory
{
    /**
     * Creates a new ChosenInlineResult instance with default fake data.
     *
     * @param string|null            $resultId        Optional. The unique identifier for the result that was chosen
     * @param UserInterface|null     $from            Optional. The user that chose the result
     * @param LocationInterface|null $location        Optional. Optional. Sender location, only for bots that require user location
     * @param string|null            $inlineMessageId Optional. Optional. Identifier of the sent inline message. Available only if there is an inline keyboard attached to the message. Will be also received in callback queries and can be used to edit the message.
     * @param string|null            $query           Optional. The query that was used to obtain the result
     */
    public static function make(
        ?string $resultId = null,
        ?UserInterface $from = null,
        ?LocationInterface $location = null,
        ?string $inlineMessageId = null,
        ?string $query = null,
    ): ChosenInlineResultInterface {
        return self::factory()->makeChosenInlineResult(
            resultId: $resultId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            location: $location,
            inlineMessageId: $inlineMessageId,
            query: $query ?? self::fake()->sentence(),
        );
    }
}
