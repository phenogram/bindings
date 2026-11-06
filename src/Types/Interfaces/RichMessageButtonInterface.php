<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a button in a RichMessage. Exactly one of the fields other than text and style must be used to specify the type of the button.
 */
interface RichMessageButtonInterface extends TypeInterface
{
    /** @var RichTextInterface|string|array<mixed> $text Text of the button. May contain only plain text, RichTextCustomEmoji and RichTextDateTime entities. */
    public RichTextInterface|string|array $text { set; get; }

    /** @var string|null $style Optional. Style of the button. Must be one of “danger”, “success”, “primary”, or “link” (the button is shown as a regular link without borders). Apps may use theme-specific colors for the button background and text based on the style. The style “link” is allowed only for callback buttons. */
    public ?string $style { set; get; }

    /** @var string|null $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings. */
    public ?string $url { set; get; }

    /** @var string|null $callbackData Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes */
    public ?string $callbackData { set; get; }

    /** @var WebAppInfoInterface|null $webApp Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a business account. */
    public ?WebAppInfoInterface $webApp { set; get; }

    /** @var LoginUrlInterface|null $loginUrl Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget. Not supported for ephemeral messages. */
    public ?LoginUrlInterface $loginUrl { set; get; }

    /** @var string|null $switchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent in channel direct messages chats and on behalf of a business account. */
    public ?string $switchInlineQuery { set; get; }

    /** @var string|null $switchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted. Not supported in channels and for messages sent in channel direct messages chats and on behalf of a business account. */
    public ?string $switchInlineQueryCurrentChat { set; get; }

    /** @var SwitchInlineQueryChosenChatInterface|null $switchInlineQueryChosenChat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent in channel direct messages chats and on behalf of a business account. */
    public ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat { set; get; }

    /** @var CopyTextButtonInterface|null $copyText Optional. A button that copies the specified text to the clipboard */
    public ?CopyTextButtonInterface $copyText { set; get; }

    /** @var DisabledButtonInterface|null $disabled Optional. If set, then the button is disabled and does nothing */
    public ?DisabledButtonInterface $disabled { set; get; }
}
