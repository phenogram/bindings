<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\KeyboardButtonFactory as KeyboardButton;
use Phenogram\Bindings\Types\Interfaces\ReplyKeyboardMarkupInterface;
use Phenogram\Bindings\Types\ReplyKeyboardMarkup;

class ReplyKeyboardMarkupFactory extends AbstractFactory
{
    /**
     * Creates a new ReplyKeyboardMarkup instance with default fake data.
     *
     * @param array|null  $keyboard              Optional. Array of button rows, each represented by an Array of KeyboardButton objects
     * @param bool|null   $isPersistent          Optional. Optional. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to false, in which case the custom keyboard can be hidden and opened with a keyboard icon.
     * @param bool|null   $resizeKeyboard        Optional. Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to false, in which case the custom keyboard is always of the same height as the app's standard keyboard.
     * @param bool|null   $oneTimeKeyboard       Optional. Optional. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     * @param string|null $inputFieldPlaceholder Optional. Optional. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
     * @param bool|null   $selective             Optional. Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.Example: A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
     */
    public static function make(
        ?array $keyboard = null,
        ?bool $isPersistent = null,
        ?bool $resizeKeyboard = null,
        ?bool $oneTimeKeyboard = null,
        ?string $inputFieldPlaceholder = null,
        ?bool $selective = null,
    ): ReplyKeyboardMarkupInterface {
        return self::factory()->makeReplyKeyboardMarkup(
            keyboard: $keyboard ?? array_map(fn () => array_map(fn () => KeyboardButton::make(), range(0, self::fake()->numberBetween(0, 1))), range(0, self::fake()->numberBetween(0, 2))),
            isPersistent: $isPersistent,
            resizeKeyboard: $resizeKeyboard,
            oneTimeKeyboard: $oneTimeKeyboard,
            inputFieldPlaceholder: $inputFieldPlaceholder,
            selective: $selective,
        );
    }
}
