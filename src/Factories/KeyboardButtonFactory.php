<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\KeyboardButtonInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonPollTypeInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestChatInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestUsersInterface;
use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;
use Phenogram\Bindings\Types\KeyboardButton;

class KeyboardButtonFactory extends AbstractFactory
{
    /**
     * Creates a new KeyboardButton instance with default fake data.
     *
     * @param string|null                              $text              Optional. Text of the button. If none of the fields other than text, icon_custom_emoji_id, and style are used, it will be sent as a message when the button is pressed
     * @param string|null                              $iconCustomEmojiId Optional. Optional. Unique identifier of the custom emoji shown before the text of the button. Can only be used by bots that purchased additional usernames on Fragment or in the messages directly sent by the bot to private, group and supergroup chats if the owner of the bot has a Telegram Premium subscription.
     * @param string|null                              $style             Optional. Optional. Style of the button. Must be one of “danger” (red), “success” (green) or “primary” (blue). If omitted, then an app-specific style is used.
     * @param KeyboardButtonRequestUsersInterface|null $requestUsers      Optional. Optional. If specified, pressing the button will open a list of suitable users. Identifiers of selected users will be sent to the bot in a “users_shared” service message. Available in private chats only.
     * @param KeyboardButtonRequestChatInterface|null  $requestChat       Optional. Optional. If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat_shared” service message. Available in private chats only.
     * @param bool|null                                $requestContact    Optional. Optional. If True, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.
     * @param bool|null                                $requestLocation   Optional. Optional. If True, the user's current location will be sent when the button is pressed. Available in private chats only.
     * @param KeyboardButtonPollTypeInterface|null     $requestPoll       Optional. Optional. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.
     * @param WebAppInfoInterface|null                 $webApp            Optional. Optional. If specified, the described Web App will be launched when the button is pressed. The Web App will be able to send a “web_app_data” service message. Available in private chats only.
     */
    public static function make(
        ?string $text = null,
        ?string $iconCustomEmojiId = null,
        ?string $style = null,
        ?KeyboardButtonRequestUsersInterface $requestUsers = null,
        ?KeyboardButtonRequestChatInterface $requestChat = null,
        ?bool $requestContact = null,
        ?bool $requestLocation = null,
        ?KeyboardButtonPollTypeInterface $requestPoll = null,
        ?WebAppInfoInterface $webApp = null,
    ): KeyboardButtonInterface {
        return self::factory()->makeKeyboardButton(
            text: $text ?? self::fake()->sentence(),
            iconCustomEmojiId: $iconCustomEmojiId,
            style: $style,
            requestUsers: $requestUsers,
            requestChat: $requestChat,
            requestContact: $requestContact,
            requestLocation: $requestLocation,
            requestPoll: $requestPoll,
            webApp: $webApp,
        );
    }
}
