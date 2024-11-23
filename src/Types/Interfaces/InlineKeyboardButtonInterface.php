<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents one button of an inline keyboard. Exactly one of the optional fields must be used to specify type of the button.
 */
interface InlineKeyboardButtonInterface extends TypeInterface
{
	/** @var string $text Label text on the button */
	public string $text { set; get; }

	/** @var string|null $url Optional. HTTP or tg:// URL to be opened when the button is pressed. Links tg://user?id=<user_id> can be used to mention a user by their identifier without using a username, if this is allowed by their privacy settings. */
	public ?string $url { set; get; }

	/** @var string|null $callbackData Optional. Data to be sent in a callback query to the bot when the button is pressed, 1-64 bytes */
	public ?string $callbackData { set; get; }

	/** @var WebAppInfoInterface|null $webApp Optional. Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method answerWebAppQuery. Available only in private chats between a user and the bot. Not supported for messages sent on behalf of a Telegram Business account. */
	public ?WebAppInfoInterface $webApp { set; get; }

	/** @var LoginUrlInterface|null $loginUrl Optional. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the Telegram Login Widget. */
	public ?LoginUrlInterface $loginUrl { set; get; }

	/** @var string|null $switchInlineQuery Optional. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted. Not supported for messages sent on behalf of a Telegram Business account. */
	public ?string $switchInlineQuery { set; get; }

	/** @var string|null $switchInlineQueryCurrentChat Optional. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options. Not supported in channels and for messages sent on behalf of a Telegram Business account. */
	public ?string $switchInlineQueryCurrentChat { set; get; }

	/** @var SwitchInlineQueryChosenChatInterface|null $switchInlineQueryChosenChat Optional. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field. Not supported for messages sent on behalf of a Telegram Business account. */
	public ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat { set; get; }

	/** @var CopyTextButtonInterface|null $copyText Optional. Description of the button that copies the specified text to the clipboard. */
	public ?CopyTextButtonInterface $copyText { set; get; }

	/** @var CallbackGameInterface|null $callbackGame Optional. Description of the game that will be launched when the user presses the button.NOTE: This type of button must always be the first button in the first row. */
	public ?CallbackGameInterface $callbackGame { set; get; }

	/** @var bool|null $pay Optional. Specify True, to send a Pay button. Substrings “⭐” and “XTR” in the buttons's text will be replaced with a Telegram Star icon.NOTE: This type of button must always be the first button in the first row and can only be used in invoice messages. */
	public ?bool $pay { set; get; }
}
