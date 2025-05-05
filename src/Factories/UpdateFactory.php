<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Factories\PollFactory as Poll;
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
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;
use Phenogram\Bindings\Types\Update;

class UpdateFactory extends AbstractFactory
{
    /**
     * Creates a new Update instance with default fake data.
     *
     * @param int|null                                  $updateId                Optional. The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     * @param MessageInterface|null                     $message                 Optional. Optional. New incoming message of any kind - text, photo, sticker, etc.
     * @param MessageInterface|null                     $editedMessage           Optional. Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param MessageInterface|null                     $channelPost             Optional. Optional. New incoming channel post of any kind - text, photo, sticker, etc.
     * @param MessageInterface|null                     $editedChannelPost       Optional. Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot.
     * @param BusinessConnectionInterface|null          $businessConnection      Optional. Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot
     * @param MessageInterface|null                     $businessMessage         Optional. Optional. New message from a connected business account
     * @param MessageInterface|null                     $editedBusinessMessage   Optional. Optional. New version of a message from a connected business account
     * @param BusinessMessagesDeletedInterface|null     $deletedBusinessMessages Optional. Optional. Messages were deleted from a connected business account
     * @param MessageReactionUpdatedInterface|null      $messageReaction         Optional. Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots.
     * @param MessageReactionCountUpdatedInterface|null $messageReactionCount    Optional. Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes.
     * @param InlineQueryInterface|null                 $inlineQuery             Optional. Optional. New incoming inline query
     * @param ChosenInlineResultInterface|null          $chosenInlineResult      Optional. Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     * @param CallbackQueryInterface|null               $callbackQuery           Optional. Optional. New incoming callback query
     * @param ShippingQueryInterface|null               $shippingQuery           Optional. Optional. New incoming shipping query. Only for invoices with flexible price
     * @param PreCheckoutQueryInterface|null            $preCheckoutQuery        Optional. Optional. New incoming pre-checkout query. Contains full information about checkout
     * @param PaidMediaPurchasedInterface|null          $purchasedPaidMedia      Optional. Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat
     * @param PollInterface|null                        $poll                    Optional. Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot
     * @param PollAnswerInterface|null                  $pollAnswer              Optional. Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself.
     * @param ChatMemberUpdatedInterface|null           $myChatMember            Optional. Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user.
     * @param ChatMemberUpdatedInterface|null           $chatMember              Optional. Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates.
     * @param ChatJoinRequestInterface|null             $chatJoinRequest         Optional. Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates.
     * @param ChatBoostUpdatedInterface|null            $chatBoost               Optional. Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates.
     * @param ChatBoostRemovedInterface|null            $removedChatBoost        Optional. Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates.
     */
    public static function make(
        ?int $updateId = null,
        ?MessageInterface $message = null,
        ?MessageInterface $editedMessage = null,
        ?MessageInterface $channelPost = null,
        ?MessageInterface $editedChannelPost = null,
        ?BusinessConnectionInterface $businessConnection = null,
        ?MessageInterface $businessMessage = null,
        ?MessageInterface $editedBusinessMessage = null,
        ?BusinessMessagesDeletedInterface $deletedBusinessMessages = null,
        ?MessageReactionUpdatedInterface $messageReaction = null,
        ?MessageReactionCountUpdatedInterface $messageReactionCount = null,
        ?InlineQueryInterface $inlineQuery = null,
        ?ChosenInlineResultInterface $chosenInlineResult = null,
        ?CallbackQueryInterface $callbackQuery = null,
        ?ShippingQueryInterface $shippingQuery = null,
        ?PreCheckoutQueryInterface $preCheckoutQuery = null,
        ?PaidMediaPurchasedInterface $purchasedPaidMedia = null,
        ?PollInterface $poll = null,
        ?PollAnswerInterface $pollAnswer = null,
        ?ChatMemberUpdatedInterface $myChatMember = null,
        ?ChatMemberUpdatedInterface $chatMember = null,
        ?ChatJoinRequestInterface $chatJoinRequest = null,
        ?ChatBoostUpdatedInterface $chatBoost = null,
        ?ChatBoostRemovedInterface $removedChatBoost = null,
    ): UpdateInterface {
        return self::factory()->makeUpdate(
            updateId: $updateId ?? self::fake()->numberBetween(100000, 999999999),
            message: $message,
            editedMessage: $editedMessage,
            channelPost: $channelPost,
            editedChannelPost: $editedChannelPost,
            businessConnection: $businessConnection,
            businessMessage: $businessMessage,
            editedBusinessMessage: $editedBusinessMessage,
            deletedBusinessMessages: $deletedBusinessMessages,
            messageReaction: $messageReaction,
            messageReactionCount: $messageReactionCount,
            inlineQuery: $inlineQuery,
            chosenInlineResult: $chosenInlineResult,
            callbackQuery: $callbackQuery,
            shippingQuery: $shippingQuery,
            preCheckoutQuery: $preCheckoutQuery,
            purchasedPaidMedia: $purchasedPaidMedia,
            poll: $poll,
            pollAnswer: $pollAnswer,
            myChatMember: $myChatMember,
            chatMember: $chatMember,
            chatJoinRequest: $chatJoinRequest,
            chatBoost: $chatBoost,
            removedChatBoost: $removedChatBoost,
        );
    }
}
