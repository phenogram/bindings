<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\Interfaces\CallbackGameInterface;
use Phenogram\Bindings\Types\Interfaces\CopyTextButtonInterface;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardButtonInterface;
use Phenogram\Bindings\Types\Interfaces\LoginUrlInterface;
use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;

class InlineKeyboardButtonFactory extends AbstractFactory
{
    /**
     * Creates a new InlineKeyboardButton instance with default fake data.
     *
     * @param string|null                               $text                         Optional. Label text on the button
     * @param string|null                               $url                          Optional. Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id= can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     * @param string|null                               $callbackData                 Optional. Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
     * @param WebAppInfoInterface|null                  $webApp                       Optional. Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account.
     * @param LoginUrlInterface|null                    $loginUrl                     Optional. Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget.
     * @param string|null                               $switchInlineQuery            Optional. Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param string|null                               $switchInlineQueryCurrentChat Optional. Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param SwitchInlineQueryChosenChatInterface|null $switchInlineQueryChosenChat  Optional. Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a Telegram Business account.
     * @param CopyTextButtonInterface|null              $copyText                     Optional. Optional. Description of the button that copies the specified text to the clipboard.
     * @param CallbackGameInterface|null                $callbackGame                 Optional. Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row.
     * @param bool|null                                 $pay                          Optional. Optional. Specify True, to send a Pay button. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages.
     */
    public static function make(
        ?string $text = null,
        ?string $url = null,
        ?string $callbackData = null,
        ?WebAppInfoInterface $webApp = null,
        ?LoginUrlInterface $loginUrl = null,
        ?string $switchInlineQuery = null,
        ?string $switchInlineQueryCurrentChat = null,
        ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat = null,
        ?CopyTextButtonInterface $copyText = null,
        ?CallbackGameInterface $callbackGame = null,
        ?bool $pay = null,
    ): InlineKeyboardButtonInterface {
        return self::factory()->makeInlineKeyboardButton(
            text: $text ?? self::fake()->sentence(),
            url: $url,
            callbackData: $callbackData,
            webApp: $webApp,
            loginUrl: $loginUrl,
            switchInlineQuery: $switchInlineQuery,
            switchInlineQueryCurrentChat: $switchInlineQueryCurrentChat,
            switchInlineQueryChosenChat: $switchInlineQueryChosenChat,
            copyText: $copyText,
            callbackGame: $callbackGame,
            pay: $pay,
        );
    }
}
