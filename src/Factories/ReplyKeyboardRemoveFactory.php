<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\ReplyKeyboardRemoveInterface;
use Phenogram\Bindings\Types\ReplyKeyboardRemove;

class ReplyKeyboardRemoveFactory extends AbstractFactory
{
    /**
     * Creates a new ReplyKeyboardRemove instance with default fake data.
     *
     * @param bool|null $removeKeyboard Optional. Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use one_time_keyboard in ReplyKeyboardMarkup)
     * @param bool|null $selective      Optional. Optional. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.Example: A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
     */
    public static function make(?bool $removeKeyboard = null, ?bool $selective = null): ReplyKeyboardRemoveInterface
    {
        return self::factory()->makeReplyKeyboardRemove(
            removeKeyboard: $removeKeyboard ?? self::fake()->boolean(),
            selective: $selective,
        );
    }
}
