<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an incoming update.At most one of the optional parameters can be present in any given update.
 */
interface UpdateInterface extends TypeInterface
{
	/** @var int $updateId The update's unique identifier. Update identifiers start from a certain positive number and increase sequentially. This identifier becomes especially handy if you're using webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence, should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially. */
	public int $updateId { set; get; }

	/** @var MessageInterface|null $message Optional. New incoming message of any kind - text, photo, sticker, etc. */
	public ?MessageInterface $message { set; get; }

	/** @var MessageInterface|null $editedMessage Optional. New version of a message that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot. */
	public ?MessageInterface $editedMessage { set; get; }

	/** @var MessageInterface|null $channelPost Optional. New incoming channel post of any kind - text, photo, sticker, etc. */
	public ?MessageInterface $channelPost { set; get; }

	/** @var MessageInterface|null $editedChannelPost Optional. New version of a channel post that is known to the bot and was edited. This update may at times be triggered by changes to message fields that are either unavailable or not actively used by your bot. */
	public ?MessageInterface $editedChannelPost { set; get; }

	/** @var BusinessConnectionInterface|null $businessConnection Optional. The bot was connected to or disconnected from a business account, or a user edited an existing connection with the bot */
	public ?BusinessConnectionInterface $businessConnection { set; get; }

	/** @var MessageInterface|null $businessMessage Optional. New message from a connected business account */
	public ?MessageInterface $businessMessage { set; get; }

	/** @var MessageInterface|null $editedBusinessMessage Optional. New version of a message from a connected business account */
	public ?MessageInterface $editedBusinessMessage { set; get; }

	/** @var BusinessMessagesDeletedInterface|null $deletedBusinessMessages Optional. Messages were deleted from a connected business account */
	public ?BusinessMessagesDeletedInterface $deletedBusinessMessages { set; get; }

	/** @var MessageReactionUpdatedInterface|null $messageReaction Optional. A reaction to a message was changed by a user. The bot must be an administrator in the chat and must explicitly specify "message_reaction" in the list of allowed_updates to receive these updates. The update isn't received for reactions set by bots. */
	public ?MessageReactionUpdatedInterface $messageReaction { set; get; }

	/** @var MessageReactionCountUpdatedInterface|null $messageReactionCount Optional. Reactions to a message with anonymous reactions were changed. The bot must be an administrator in the chat and must explicitly specify "message_reaction_count" in the list of allowed_updates to receive these updates. The updates are grouped and can be sent with delay up to a few minutes. */
	public ?MessageReactionCountUpdatedInterface $messageReactionCount { set; get; }

	/** @var InlineQueryInterface|null $inlineQuery Optional. New incoming inline query */
	public ?InlineQueryInterface $inlineQuery { set; get; }

	/** @var ChosenInlineResultInterface|null $chosenInlineResult Optional. The result of an inline query that was chosen by a user and sent to their chat partner. Please see our documentation on the feedback collecting for details on how to enable these updates for your bot. */
	public ?ChosenInlineResultInterface $chosenInlineResult { set; get; }

	/** @var CallbackQueryInterface|null $callbackQuery Optional. New incoming callback query */
	public ?CallbackQueryInterface $callbackQuery { set; get; }

	/** @var ShippingQueryInterface|null $shippingQuery Optional. New incoming shipping query. Only for invoices with flexible price */
	public ?ShippingQueryInterface $shippingQuery { set; get; }

	/** @var PreCheckoutQueryInterface|null $preCheckoutQuery Optional. New incoming pre-checkout query. Contains full information about checkout */
	public ?PreCheckoutQueryInterface $preCheckoutQuery { set; get; }

	/** @var PaidMediaPurchasedInterface|null $purchasedPaidMedia Optional. A user purchased paid media with a non-empty payload sent by the bot in a non-channel chat */
	public ?PaidMediaPurchasedInterface $purchasedPaidMedia { set; get; }

	/** @var PollInterface|null $poll Optional. New poll state. Bots receive only updates about manually stopped polls and polls, which are sent by the bot */
	public ?PollInterface $poll { set; get; }

	/** @var PollAnswerInterface|null $pollAnswer Optional. A user changed their answer in a non-anonymous poll. Bots receive new votes only in polls that were sent by the bot itself. */
	public ?PollAnswerInterface $pollAnswer { set; get; }

	/** @var ChatMemberUpdatedInterface|null $myChatMember Optional. The bot's chat member status was updated in a chat. For private chats, this update is received only when the bot is blocked or unblocked by the user. */
	public ?ChatMemberUpdatedInterface $myChatMember { set; get; }

	/** @var ChatMemberUpdatedInterface|null $chatMember Optional. A chat member's status was updated in a chat. The bot must be an administrator in the chat and must explicitly specify "chat_member" in the list of allowed_updates to receive these updates. */
	public ?ChatMemberUpdatedInterface $chatMember { set; get; }

	/** @var ChatJoinRequestInterface|null $chatJoinRequest Optional. A request to join the chat has been sent. The bot must have the can_invite_users administrator right in the chat to receive these updates. */
	public ?ChatJoinRequestInterface $chatJoinRequest { set; get; }

	/** @var ChatBoostUpdatedInterface|null $chatBoost Optional. A chat boost was added or changed. The bot must be an administrator in the chat to receive these updates. */
	public ?ChatBoostUpdatedInterface $chatBoost { set; get; }

	/** @var ChatBoostRemovedInterface|null $removedChatBoost Optional. A boost was removed from a chat. The bot must be an administrator in the chat to receive these updates. */
	public ?ChatBoostRemovedInterface $removedChatBoost { set; get; }
}
