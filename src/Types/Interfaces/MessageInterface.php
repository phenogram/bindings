<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a message.
 */
interface MessageInterface extends TypeInterface
{
    /** @var int $messageId Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent */
    public int $messageId { set; get; }

    /** @var int|null $messageThreadId Optional. Unique identifier of a message thread or forum topic to which the message belongs; for supergroups and private chats only */
    public ?int $messageThreadId { set; get; }

    /** @var DirectMessagesTopicInterface|null $directMessagesTopic Optional. Information about the direct messages chat topic that contains the message */
    public ?DirectMessagesTopicInterface $directMessagesTopic { set; get; }

    /** @var UserInterface|null $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats */
    public ?UserInterface $from { set; get; }

    /** @var ChatInterface|null $senderChat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats. */
    public ?ChatInterface $senderChat { set; get; }

    /** @var int|null $senderBoostCount Optional. If the sender of the message boosted the chat, the number of boosts added by the user */
    public ?int $senderBoostCount { set; get; }

    /** @var UserInterface|null $senderBusinessBot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account. */
    public ?UserInterface $senderBusinessBot { set; get; }

    /** @var int $date Date the message was sent in Unix time. It is always a positive number, representing a valid date. */
    public int $date { set; get; }

    /** @var string|null $businessConnectionId Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier. */
    public ?string $businessConnectionId { set; get; }

    /** @var ChatInterface $chat Chat the message belongs to */
    public ChatInterface $chat { set; get; }

    /** @var MessageOriginInterface|null $forwardOrigin Optional. Information about the original message for forwarded messages */
    public ?MessageOriginInterface $forwardOrigin { set; get; }

    /** @var bool|null $isTopicMessage Optional. True, if the message is sent to a topic in a forum supergroup or a private chat with the bot */
    public ?bool $isTopicMessage { set; get; }

    /** @var bool|null $isAutomaticForward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group */
    public ?bool $isAutomaticForward { set; get; }

    /** @var MessageInterface|null $replyToMessage Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?MessageInterface $replyToMessage { set; get; }

    /** @var ExternalReplyInfoInterface|null $externalReply Optional. Information about the message that is being replied to, which may come from another chat or forum topic */
    public ?ExternalReplyInfoInterface $externalReply { set; get; }

    /** @var TextQuoteInterface|null $quote Optional. For replies that quote part of the original message, the quoted part of the message */
    public ?TextQuoteInterface $quote { set; get; }

    /** @var StoryInterface|null $replyToStory Optional. For replies to a story, the original story */
    public ?StoryInterface $replyToStory { set; get; }

    /** @var int|null $replyToChecklistTaskId Optional. Identifier of the specific checklist task that is being replied to */
    public ?int $replyToChecklistTaskId { set; get; }

    /** @var UserInterface|null $viaBot Optional. Bot through which the message was sent */
    public ?UserInterface $viaBot { set; get; }

    /** @var int|null $editDate Optional. Date the message was last edited in Unix time */
    public ?int $editDate { set; get; }

    /** @var bool|null $hasProtectedContent Optional. True, if the message can't be forwarded */
    public ?bool $hasProtectedContent { set; get; }

    /** @var bool|null $isFromOffline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message */
    public ?bool $isFromOffline { set; get; }

    /** @var bool|null $isPaidPost Optional. True, if the message is a paid post. Note that such posts must not be deleted for 24 hours to receive the payment and can't be edited. */
    public ?bool $isPaidPost { set; get; }

    /** @var string|null $mediaGroupId Optional. The unique identifier of a media message group this message belongs to */
    public ?string $mediaGroupId { set; get; }

    /** @var string|null $authorSignature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator */
    public ?string $authorSignature { set; get; }

    /** @var int|null $paidStarCount Optional. The number of Telegram Stars that were paid by the sender of the message to send it */
    public ?int $paidStarCount { set; get; }

    /** @var string|null $text Optional. For text messages, the actual UTF-8 text of the message */
    public ?string $text { set; get; }

    /** @var array<MessageEntityInterface>|null $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text */
    public ?array $entities { set; get; }

    /** @var LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed */
    public ?LinkPreviewOptionsInterface $linkPreviewOptions { set; get; }

    /** @var SuggestedPostInfoInterface|null $suggestedPostInfo Optional. Information about suggested post parameters if the message is a suggested post in a channel direct messages chat. If the message is an approved or declined suggested post, then it can't be edited. */
    public ?SuggestedPostInfoInterface $suggestedPostInfo { set; get; }

    /** @var string|null $effectId Optional. Unique identifier of the message effect added to the message */
    public ?string $effectId { set; get; }

    /** @var AnimationInterface|null $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set */
    public ?AnimationInterface $animation { set; get; }

    /** @var AudioInterface|null $audio Optional. Message is an audio file, information about the file */
    public ?AudioInterface $audio { set; get; }

    /** @var DocumentInterface|null $document Optional. Message is a general file, information about the file */
    public ?DocumentInterface $document { set; get; }

    /** @var PaidMediaInfoInterface|null $paidMedia Optional. Message contains paid media; information about the paid media */
    public ?PaidMediaInfoInterface $paidMedia { set; get; }

    /** @var array<PhotoSizeInterface>|null $photo Optional. Message is a photo, available sizes of the photo */
    public ?array $photo { set; get; }

    /** @var StickerInterface|null $sticker Optional. Message is a sticker, information about the sticker */
    public ?StickerInterface $sticker { set; get; }

    /** @var StoryInterface|null $story Optional. Message is a forwarded story */
    public ?StoryInterface $story { set; get; }

    /** @var VideoInterface|null $video Optional. Message is a video, information about the video */
    public ?VideoInterface $video { set; get; }

    /** @var VideoNoteInterface|null $videoNote Optional. Message is a video note, information about the video message */
    public ?VideoNoteInterface $videoNote { set; get; }

    /** @var VoiceInterface|null $voice Optional. Message is a voice message, information about the file */
    public ?VoiceInterface $voice { set; get; }

    /** @var string|null $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice */
    public ?string $caption { set; get; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption */
    public ?array $captionEntities { set; get; }

    /** @var bool|null $showCaptionAboveMedia Optional. True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; get; }

    /** @var bool|null $hasMediaSpoiler Optional. True, if the message media is covered by a spoiler animation */
    public ?bool $hasMediaSpoiler { set; get; }

    /** @var ChecklistInterface|null $checklist Optional. Message is a checklist */
    public ?ChecklistInterface $checklist { set; get; }

    /** @var ContactInterface|null $contact Optional. Message is a shared contact, information about the contact */
    public ?ContactInterface $contact { set; get; }

    /** @var DiceInterface|null $dice Optional. Message is a dice with random value */
    public ?DiceInterface $dice { set; get; }

    /** @var GameInterface|null $game Optional. Message is a game, information about the game. More about games » */
    public ?GameInterface $game { set; get; }

    /** @var PollInterface|null $poll Optional. Message is a native poll, information about the poll */
    public ?PollInterface $poll { set; get; }

    /** @var VenueInterface|null $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set */
    public ?VenueInterface $venue { set; get; }

    /** @var LocationInterface|null $location Optional. Message is a shared location, information about the location */
    public ?LocationInterface $location { set; get; }

    /** @var array<UserInterface>|null $newChatMembers Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members) */
    public ?array $newChatMembers { set; get; }

    /** @var UserInterface|null $leftChatMember Optional. A member was removed from the group, information about them (this member may be the bot itself) */
    public ?UserInterface $leftChatMember { set; get; }

    /** @var string|null $newChatTitle Optional. A chat title was changed to this value */
    public ?string $newChatTitle { set; get; }

    /** @var array<PhotoSizeInterface>|null $newChatPhoto Optional. A chat photo was change to this value */
    public ?array $newChatPhoto { set; get; }

    /** @var bool|null $deleteChatPhoto Optional. Service message: the chat photo was deleted */
    public ?bool $deleteChatPhoto { set; get; }

    /** @var bool|null $groupChatCreated Optional. Service message: the group has been created */
    public ?bool $groupChatCreated { set; get; }

    /** @var bool|null $supergroupChatCreated Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
    public ?bool $supergroupChatCreated { set; get; }

    /** @var bool|null $channelChatCreated Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
    public ?bool $channelChatCreated { set; get; }

    /** @var MessageAutoDeleteTimerChangedInterface|null $messageAutoDeleteTimerChanged Optional. Service message: auto-delete timer settings changed in the chat */
    public ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged { set; get; }

    /** @var int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrateToChatId { set; get; }

    /** @var int|null $migrateFromChatId Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrateFromChatId { set; get; }

    /** @var MaybeInaccessibleMessageInterface|null $pinnedMessage Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?MaybeInaccessibleMessageInterface $pinnedMessage { set; get; }

    /** @var InvoiceInterface|null $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments » */
    public ?InvoiceInterface $invoice { set; get; }

    /** @var SuccessfulPaymentInterface|null $successfulPayment Optional. Message is a service message about a successful payment, information about the payment. More about payments » */
    public ?SuccessfulPaymentInterface $successfulPayment { set; get; }

    /** @var RefundedPaymentInterface|null $refundedPayment Optional. Message is a service message about a refunded payment, information about the payment. More about payments » */
    public ?RefundedPaymentInterface $refundedPayment { set; get; }

    /** @var UsersSharedInterface|null $usersShared Optional. Service message: users were shared with the bot */
    public ?UsersSharedInterface $usersShared { set; get; }

    /** @var ChatSharedInterface|null $chatShared Optional. Service message: a chat was shared with the bot */
    public ?ChatSharedInterface $chatShared { set; get; }

    /** @var GiftInfoInterface|null $gift Optional. Service message: a regular gift was sent or received */
    public ?GiftInfoInterface $gift { set; get; }

    /** @var UniqueGiftInfoInterface|null $uniqueGift Optional. Service message: a unique gift was sent or received */
    public ?UniqueGiftInfoInterface $uniqueGift { set; get; }

    /** @var GiftInfoInterface|null $giftUpgradeSent Optional. Service message: upgrade of a gift was purchased after the gift was sent */
    public ?GiftInfoInterface $giftUpgradeSent { set; get; }

    /** @var string|null $connectedWebsite Optional. The domain name of the website on which the user has logged in. More about Telegram Login » */
    public ?string $connectedWebsite { set; get; }

    /** @var WriteAccessAllowedInterface|null $writeAccessAllowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess */
    public ?WriteAccessAllowedInterface $writeAccessAllowed { set; get; }

    /** @var PassportDataInterface|null $passportData Optional. Telegram Passport data */
    public ?PassportDataInterface $passportData { set; get; }

    /** @var ProximityAlertTriggeredInterface|null $proximityAlertTriggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location. */
    public ?ProximityAlertTriggeredInterface $proximityAlertTriggered { set; get; }

    /** @var ChatBoostAddedInterface|null $boostAdded Optional. Service message: user boosted the chat */
    public ?ChatBoostAddedInterface $boostAdded { set; get; }

    /** @var ChatBackgroundInterface|null $chatBackgroundSet Optional. Service message: chat background set */
    public ?ChatBackgroundInterface $chatBackgroundSet { set; get; }

    /** @var ChecklistTasksDoneInterface|null $checklistTasksDone Optional. Service message: some tasks in a checklist were marked as done or not done */
    public ?ChecklistTasksDoneInterface $checklistTasksDone { set; get; }

    /** @var ChecklistTasksAddedInterface|null $checklistTasksAdded Optional. Service message: tasks were added to a checklist */
    public ?ChecklistTasksAddedInterface $checklistTasksAdded { set; get; }

    /** @var DirectMessagePriceChangedInterface|null $directMessagePriceChanged Optional. Service message: the price for paid messages in the corresponding direct messages chat of a channel has changed */
    public ?DirectMessagePriceChangedInterface $directMessagePriceChanged { set; get; }

    /** @var ForumTopicCreatedInterface|null $forumTopicCreated Optional. Service message: forum topic created */
    public ?ForumTopicCreatedInterface $forumTopicCreated { set; get; }

    /** @var ForumTopicEditedInterface|null $forumTopicEdited Optional. Service message: forum topic edited */
    public ?ForumTopicEditedInterface $forumTopicEdited { set; get; }

    /** @var ForumTopicClosedInterface|null $forumTopicClosed Optional. Service message: forum topic closed */
    public ?ForumTopicClosedInterface $forumTopicClosed { set; get; }

    /** @var ForumTopicReopenedInterface|null $forumTopicReopened Optional. Service message: forum topic reopened */
    public ?ForumTopicReopenedInterface $forumTopicReopened { set; get; }

    /** @var GeneralForumTopicHiddenInterface|null $generalForumTopicHidden Optional. Service message: the 'General' forum topic hidden */
    public ?GeneralForumTopicHiddenInterface $generalForumTopicHidden { set; get; }

    /** @var GeneralForumTopicUnhiddenInterface|null $generalForumTopicUnhidden Optional. Service message: the 'General' forum topic unhidden */
    public ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden { set; get; }

    /** @var GiveawayCreatedInterface|null $giveawayCreated Optional. Service message: a scheduled giveaway was created */
    public ?GiveawayCreatedInterface $giveawayCreated { set; get; }

    /** @var GiveawayInterface|null $giveaway Optional. The message is a scheduled giveaway message */
    public ?GiveawayInterface $giveaway { set; get; }

    /** @var GiveawayWinnersInterface|null $giveawayWinners Optional. A giveaway with public winners was completed */
    public ?GiveawayWinnersInterface $giveawayWinners { set; get; }

    /** @var GiveawayCompletedInterface|null $giveawayCompleted Optional. Service message: a giveaway without public winners was completed */
    public ?GiveawayCompletedInterface $giveawayCompleted { set; get; }

    /** @var PaidMessagePriceChangedInterface|null $paidMessagePriceChanged Optional. Service message: the price for paid messages has changed in the chat */
    public ?PaidMessagePriceChangedInterface $paidMessagePriceChanged { set; get; }

    /** @var SuggestedPostApprovedInterface|null $suggestedPostApproved Optional. Service message: a suggested post was approved */
    public ?SuggestedPostApprovedInterface $suggestedPostApproved { set; get; }

    /** @var SuggestedPostApprovalFailedInterface|null $suggestedPostApprovalFailed Optional. Service message: approval of a suggested post has failed */
    public ?SuggestedPostApprovalFailedInterface $suggestedPostApprovalFailed { set; get; }

    /** @var SuggestedPostDeclinedInterface|null $suggestedPostDeclined Optional. Service message: a suggested post was declined */
    public ?SuggestedPostDeclinedInterface $suggestedPostDeclined { set; get; }

    /** @var SuggestedPostPaidInterface|null $suggestedPostPaid Optional. Service message: payment for a suggested post was received */
    public ?SuggestedPostPaidInterface $suggestedPostPaid { set; get; }

    /** @var SuggestedPostRefundedInterface|null $suggestedPostRefunded Optional. Service message: payment for a suggested post was refunded */
    public ?SuggestedPostRefundedInterface $suggestedPostRefunded { set; get; }

    /** @var VideoChatScheduledInterface|null $videoChatScheduled Optional. Service message: video chat scheduled */
    public ?VideoChatScheduledInterface $videoChatScheduled { set; get; }

    /** @var VideoChatStartedInterface|null $videoChatStarted Optional. Service message: video chat started */
    public ?VideoChatStartedInterface $videoChatStarted { set; get; }

    /** @var VideoChatEndedInterface|null $videoChatEnded Optional. Service message: video chat ended */
    public ?VideoChatEndedInterface $videoChatEnded { set; get; }

    /** @var VideoChatParticipantsInvitedInterface|null $videoChatParticipantsInvited Optional. Service message: new participants invited to a video chat */
    public ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited { set; get; }

    /** @var WebAppDataInterface|null $webAppData Optional. Service message: data sent by a Web App */
    public ?WebAppDataInterface $webAppData { set; get; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons. */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; get; }
}
