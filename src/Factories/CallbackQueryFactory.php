<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\CallbackQuery;
use Phenogram\Bindings\Types\Interfaces\CallbackQueryInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class CallbackQueryFactory extends AbstractFactory
{
    /**
     * Creates a new CallbackQuery instance with default fake data.
     *
     * @param string|null                                                                 $id              Optional. Unique identifier for this query
     * @param UserInterface|null                                                          $from            Optional. Sender
     * @param \Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface|null $message         Optional. Optional. Message sent by the bot with the callback button that originated the query
     * @param string|null                                                                 $inlineMessageId Optional. Optional. Identifier of the message sent via the bot in inline mode, that originated the query.
     * @param string|null                                                                 $chatInstance    Optional. Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in games.
     * @param string|null                                                                 $data            Optional. Optional. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
     * @param string|null                                                                 $gameShortName   Optional. Optional. Short name of a Game to be returned, serves as the unique identifier for the game
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?\Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface $message = null,
        ?string $inlineMessageId = null,
        ?string $chatInstance = null,
        ?string $data = null,
        ?string $gameShortName = null,
    ): CallbackQueryInterface {
        return self::factory()->makeCallbackQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            message: $message,
            inlineMessageId: $inlineMessageId,
            chatInstance: $chatInstance ?? self::fake()->text(50),
            data: $data,
            gameShortName: $gameShortName,
        );
    }
}
