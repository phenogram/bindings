<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\CopyTextButtonInterface;
use Phenogram\Bindings\Types\Interfaces\DisabledButtonInterface;
use Phenogram\Bindings\Types\Interfaces\LoginUrlInterface;
use Phenogram\Bindings\Types\Interfaces\RichMessageButtonInterface;
use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;
use Phenogram\Bindings\Types\RichMessageButton;

class RichMessageButtonFactory extends AbstractFactory
{
    /**
     * Creates a new RichMessageButton instance with default fake data.
     *
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text                         Optional. Text of the button. May contain only plain text, RichTextCustomEmoji and RichTextDateTime entities.
     * @param string|null                                                              $style                        Optional. Optional. Style of the button. Must be one of “danger”, “success”, “primary”, or “link” (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style “link” is allowed only for callback buttons.
     * @param string|null                                                              $url                          Optional. Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id= can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings.
     * @param string|null                                                              $callbackData                 Optional. Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes
     * @param WebAppInfoInterface|null                                                 $webApp                       Optional. Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account.
     * @param LoginUrlInterface|null                                                   $loginUrl                     Optional. Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget. Not supported for ephemeral messages.
     * @param string|null                                                              $switchInlineQuery            Optional. Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     * @param string|null                                                              $switchInlineQueryCurrentChat Optional. Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account.
     * @param SwitchInlineQueryChosenChatInterface|null                                $switchInlineQueryChosenChat  Optional. Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account.
     * @param CopyTextButtonInterface|null                                             $copyText                     Optional. Optional. A button that copies the specified text to the clipboard
     * @param DisabledButtonInterface|null                                             $disabled                     Optional. Optional. If set, then the button is disabled and does nothing
     */
    public static function make(
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $style = null,
        ?string $url = null,
        ?string $callbackData = null,
        ?WebAppInfoInterface $webApp = null,
        ?LoginUrlInterface $loginUrl = null,
        ?string $switchInlineQuery = null,
        ?string $switchInlineQueryCurrentChat = null,
        ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat = null,
        ?CopyTextButtonInterface $copyText = null,
        ?DisabledButtonInterface $disabled = null,
    ): RichMessageButtonInterface {
        return self::factory()->makeRichMessageButton(
            text: $text ?? self::fake()->sentence(),
            style: $style,
            url: $url,
            callbackData: $callbackData,
            webApp: $webApp,
            loginUrl: $loginUrl,
            switchInlineQuery: $switchInlineQuery,
            switchInlineQueryCurrentChat: $switchInlineQueryCurrentChat,
            switchInlineQueryChosenChat: $switchInlineQueryChosenChat,
            copyText: $copyText,
            disabled: $disabled,
        );
    }
}
