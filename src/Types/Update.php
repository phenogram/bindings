<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\BusinessConnectionInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessMessagesDeletedInterface;
use Phenogram\Bindings\Types\Interfaces\CallbackQueryInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostRemovedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatJoinRequestInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\ChosenInlineResultInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionCountUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPurchasedInterface;
use Phenogram\Bindings\Types\Interfaces\PollAnswerInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\PreCheckoutQueryInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingQueryInterface;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
class Update implements Interfaces\UpdateInterface
{
    /**
     * @param int                                       $updateId                The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @param MessageInterface|null                     $message                 Optional. New incoming message of any kind - text, photo, sticker, etc.
     * @param MessageInterface|null                     $editedMessage           Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param MessageInterface|null                     $channelPost             Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     * @param MessageInterface|null                     $editedChannelPost       Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param BusinessConnectionInterface|null          $businessConnection      Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     * @param MessageInterface|null                     $businessMessage         Optional. New message from a connected business account
     * @param MessageInterface|null                     $editedBusinessMessage   Optional. New version of a message from a connected business account
     * @param BusinessMessagesDeletedInterface|null     $deletedBusinessMessages Optional. Messages were deleted from a connected business account
     * @param MessageReactionUpdatedInterface|null      $messageReaction         Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
     * @param MessageReactionCountUpdatedInterface|null $messageReactionCount    Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @param InlineQueryInterface|null                 $inlineQuery             Optional. New incoming inline query
     * @param ChosenInlineResultInterface|null          $chosenInlineResult      Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @param CallbackQueryInterface|null               $callbackQuery           Optional. New incoming callback query
     * @param ShippingQueryInterface|null               $shippingQuery           Optional. New incoming shipping query. Only for invoices with flexible price
     * @param PreCheckoutQueryInterface|null            $preCheckoutQuery        Optional. New incoming pre-checkout query. Contains full information about checkout
     * @param PaidMediaPurchasedInterface|null          $purchasedPaidMedia      Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     * @param PollInterface|null                        $poll                    Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
     * @param PollAnswerInterface|null                  $pollAnswer              Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @param ChatMemberUpdatedInterface|null           $myChatMember            Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @param ChatMemberUpdatedInterface|null           $chatMember              Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
     * @param ChatJoinRequestInterface|null             $chatJoinRequest         Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     * @param ChatBoostUpdatedInterface|null            $chatBoost               Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     * @param ChatBoostRemovedInterface|null            $removedChatBoost        Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     */
    public function __construct(
        public int $updateId,
        public ?MessageInterface $message = null,
        public ?MessageInterface $editedMessage = null,
        public ?MessageInterface $channelPost = null,
        public ?MessageInterface $editedChannelPost = null,
        public ?BusinessConnectionInterface $businessConnection = null,
        public ?MessageInterface $businessMessage = null,
        public ?MessageInterface $editedBusinessMessage = null,
        public ?BusinessMessagesDeletedInterface $deletedBusinessMessages = null,
        public ?MessageReactionUpdatedInterface $messageReaction = null,
        public ?MessageReactionCountUpdatedInterface $messageReactionCount = null,
        public ?InlineQueryInterface $inlineQuery = null,
        public ?ChosenInlineResultInterface $chosenInlineResult = null,
        public ?CallbackQueryInterface $callbackQuery = null,
        public ?ShippingQueryInterface $shippingQuery = null,
        public ?PreCheckoutQueryInterface $preCheckoutQuery = null,
        public ?PaidMediaPurchasedInterface $purchasedPaidMedia = null,
        public ?PollInterface $poll = null,
        public ?PollAnswerInterface $pollAnswer = null,
        public ?ChatMemberUpdatedInterface $myChatMember = null,
        public ?ChatMemberUpdatedInterface $chatMember = null,
        public ?ChatJoinRequestInterface $chatJoinRequest = null,
        public ?ChatBoostUpdatedInterface $chatBoost = null,
        public ?ChatBoostRemovedInterface $removedChatBoost = null,
    ) {
    }
}
