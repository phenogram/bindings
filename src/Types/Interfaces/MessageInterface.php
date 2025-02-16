<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a message.
 */
interface MessageInterface extends TypeInterface
{
    /** @var int $messageId Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent */
    public int $messageId { set; }

    /** @var int|null $messageThreadId Optional. Unique identifier of a message thread to which the message belongs; for supergroups only */
    public ?int $messageThreadId { set; }

    /** @var UserInterface|null $from Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats */
    public ?UserInterface $from { set; }

    /** @var ChatInterface|null $senderChat Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats. */
    public ?ChatInterface $senderChat { set; }

    /** @var int|null $senderBoostCount Optional. If the sender of the message boosted the chat, the number of boosts added by the user */
    public ?int $senderBoostCount { set; }

    /** @var UserInterface|null $senderBusinessBot Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account. */
    public ?UserInterface $senderBusinessBot { set; }

    /** @var int $date Date the message was sent in Unix time. It is always a positive number, representing a valid date. */
    public int $date { set; }

    /** @var string|null $businessConnectionId Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier. */
    public ?string $businessConnectionId { set; }

    /** @var ChatInterface $chat Chat the message belongs to */
    public ChatInterface $chat { set; }

    /** @var MessageOriginInterface|null $forwardOrigin Optional. Information about the original message for forwarded messages */
    public ?MessageOriginInterface $forwardOrigin { set; }

    /** @var bool|null $isTopicMessage Optional. True, if the message is sent to a forum topic */
    public ?bool $isTopicMessage { set; }

    /** @var bool|null $isAutomaticForward Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group */
    public ?bool $isAutomaticForward { set; }

    /** @var MessageInterface|null $replyToMessage Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?MessageInterface $replyToMessage { set; }

    /** @var ExternalReplyInfoInterface|null $externalReply Optional. Information about the message that is being replied to, which may come from another chat or forum topic */
    public ?ExternalReplyInfoInterface $externalReply { set; }

    /** @var TextQuoteInterface|null $quote Optional. For replies that quote part of the original message, the quoted part of the message */
    public ?TextQuoteInterface $quote { set; }

    /** @var StoryInterface|null $replyToStory Optional. For replies to a story, the original story */
    public ?StoryInterface $replyToStory { set; }

    /** @var UserInterface|null $viaBot Optional. Bot through which the message was sent */
    public ?UserInterface $viaBot { set; }

    /** @var int|null $editDate Optional. Date the message was last edited in Unix time */
    public ?int $editDate { set; }

    /** @var bool|null $hasProtectedContent Optional. True, if the message can't be forwarded */
    public ?bool $hasProtectedContent { set; }

    /** @var bool|null $isFromOffline Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message */
    public ?bool $isFromOffline { set; }

    /** @var string|null $mediaGroupId Optional. The unique identifier of a media message group this message belongs to */
    public ?string $mediaGroupId { set; }

    /** @var string|null $authorSignature Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator */
    public ?string $authorSignature { set; }

    /** @var string|null $text Optional. For text messages, the actual UTF-8 text of the message */
    public ?string $text { set; }

    /** @var array<MessageEntityInterface>|null $entities Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text */
    public ?array $entities { set; }

    /** @var LinkPreviewOptionsInterface|null $linkPreviewOptions Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed */
    public ?LinkPreviewOptionsInterface $linkPreviewOptions { set; }

    /** @var string|null $effectId Optional. Unique identifier of the message effect added to the message */
    public ?string $effectId { set; }

    /** @var AnimationInterface|null $animation Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set */
    public ?AnimationInterface $animation { set; }

    /** @var AudioInterface|null $audio Optional. Message is an audio file, information about the file */
    public ?AudioInterface $audio { set; }

    /** @var DocumentInterface|null $document Optional. Message is a general file, information about the file */
    public ?DocumentInterface $document { set; }

    /** @var PaidMediaInfoInterface|null $paidMedia Optional. Message contains paid media; information about the paid media */
    public ?PaidMediaInfoInterface $paidMedia { set; }

    /** @var array<PhotoSizeInterface>|null $photo Optional. Message is a photo, available sizes of the photo */
    public ?array $photo { set; }

    /** @var StickerInterface|null $sticker Optional. Message is a sticker, information about the sticker */
    public ?StickerInterface $sticker { set; }

    /** @var StoryInterface|null $story Optional. Message is a forwarded story */
    public ?StoryInterface $story { set; }

    /** @var VideoInterface|null $video Optional. Message is a video, information about the video */
    public ?VideoInterface $video { set; }

    /** @var VideoNoteInterface|null $videoNote Optional. Message is a video note, information about the video message */
    public ?VideoNoteInterface $videoNote { set; }

    /** @var VoiceInterface|null $voice Optional. Message is a voice message, information about the file */
    public ?VoiceInterface $voice { set; }

    /** @var string|null $caption Optional. Caption for the animation, audio, document, paid media, photo, video or voice */
    public ?string $caption { set; }

    /** @var array<MessageEntityInterface>|null $captionEntities Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption */
    public ?array $captionEntities { set; }

    /** @var bool|null $showCaptionAboveMedia Optional. True, if the caption must be shown above the message media */
    public ?bool $showCaptionAboveMedia { set; }

    /** @var bool|null $hasMediaSpoiler Optional. True, if the message media is covered by a spoiler animation */
    public ?bool $hasMediaSpoiler { set; }

    /** @var ContactInterface|null $contact Optional. Message is a shared contact, information about the contact */
    public ?ContactInterface $contact { set; }

    /** @var DiceInterface|null $dice Optional. Message is a dice with random value */
    public ?DiceInterface $dice { set; }

    /** @var GameInterface|null $game Optional. Message is a game, information about the game. More about games » */
    public ?GameInterface $game { set; }

    /** @var PollInterface|null $poll Optional. Message is a native poll, information about the poll */
    public ?PollInterface $poll { set; }

    /** @var VenueInterface|null $venue Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set */
    public ?VenueInterface $venue { set; }

    /** @var LocationInterface|null $location Optional. Message is a shared location, information about the location */
    public ?LocationInterface $location { set; }

    /** @var array<UserInterface>|null $newChatMembers Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members) */
    public ?array $newChatMembers { set; }

    /** @var UserInterface|null $leftChatMember Optional. A member was removed from the group, information about them (this member may be the bot itself) */
    public ?UserInterface $leftChatMember { set; }

    /** @var string|null $newChatTitle Optional. A chat title was changed to this value */
    public ?string $newChatTitle { set; }

    /** @var array<PhotoSizeInterface>|null $newChatPhoto Optional. A chat photo was change to this value */
    public ?array $newChatPhoto { set; }

    /** @var bool|null $deleteChatPhoto Optional. Service message: the chat photo was deleted */
    public ?bool $deleteChatPhoto { set; }

    /** @var bool|null $groupChatCreated Optional. Service message: the group has been created */
    public ?bool $groupChatCreated { set; }

    /** @var bool|null $supergroupChatCreated Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup. */
    public ?bool $supergroupChatCreated { set; }

    /** @var bool|null $channelChatCreated Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel. */
    public ?bool $channelChatCreated { set; }

    /** @var MessageAutoDeleteTimerChangedInterface|null $messageAutoDeleteTimerChanged Optional. Service message: auto-delete timer settings changed in the chat */
    public ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged { set; }

    /** @var int|null $migrateToChatId Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrateToChatId { set; }

    /** @var int|null $migrateFromChatId Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $migrateFromChatId { set; }

    /** @var MaybeInaccessibleMessageInterface|null $pinnedMessage Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply. */
    public ?MaybeInaccessibleMessageInterface $pinnedMessage { set; }

    /** @var InvoiceInterface|null $invoice Optional. Message is an invoice for a payment, information about the invoice. More about payments » */
    public ?InvoiceInterface $invoice { set; }

    /** @var SuccessfulPaymentInterface|null $successfulPayment Optional. Message is a service message about a successful payment, information about the payment. More about payments » */
    public ?SuccessfulPaymentInterface $successfulPayment { set; }

    /** @var RefundedPaymentInterface|null $refundedPayment Optional. Message is a service message about a refunded payment, information about the payment. More about payments » */
    public ?RefundedPaymentInterface $refundedPayment { set; }

    /** @var UsersSharedInterface|null $usersShared Optional. Service message: users were shared with the bot */
    public ?UsersSharedInterface $usersShared { set; }

    /** @var ChatSharedInterface|null $chatShared Optional. Service message: a chat was shared with the bot */
    public ?ChatSharedInterface $chatShared { set; }

    /** @var string|null $connectedWebsite Optional. The domain name of the website on which the user has logged in. More about Telegram Login » */
    public ?string $connectedWebsite { set; }

    /** @var WriteAccessAllowedInterface|null $writeAccessAllowed Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess */
    public ?WriteAccessAllowedInterface $writeAccessAllowed { set; }

    /** @var PassportDataInterface|null $passportData Optional. Telegram Passport data */
    public ?PassportDataInterface $passportData { set; }

    /** @var ProximityAlertTriggeredInterface|null $proximityAlertTriggered Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location. */
    public ?ProximityAlertTriggeredInterface $proximityAlertTriggered { set; }

    /** @var ChatBoostAddedInterface|null $boostAdded Optional. Service message: user boosted the chat */
    public ?ChatBoostAddedInterface $boostAdded { set; }

    /** @var ChatBackgroundInterface|null $chatBackgroundSet Optional. Service message: chat background set */
    public ?ChatBackgroundInterface $chatBackgroundSet { set; }

    /** @var ForumTopicCreatedInterface|null $forumTopicCreated Optional. Service message: forum topic created */
    public ?ForumTopicCreatedInterface $forumTopicCreated { set; }

    /** @var ForumTopicEditedInterface|null $forumTopicEdited Optional. Service message: forum topic edited */
    public ?ForumTopicEditedInterface $forumTopicEdited { set; }

    /** @var ForumTopicClosedInterface|null $forumTopicClosed Optional. Service message: forum topic closed */
    public ?ForumTopicClosedInterface $forumTopicClosed { set; }

    /** @var ForumTopicReopenedInterface|null $forumTopicReopened Optional. Service message: forum topic reopened */
    public ?ForumTopicReopenedInterface $forumTopicReopened { set; }

    /** @var GeneralForumTopicHiddenInterface|null $generalForumTopicHidden Optional. Service message: the 'General' forum topic hidden */
    public ?GeneralForumTopicHiddenInterface $generalForumTopicHidden { set; }

    /** @var GeneralForumTopicUnhiddenInterface|null $generalForumTopicUnhidden Optional. Service message: the 'General' forum topic unhidden */
    public ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden { set; }

    /** @var GiveawayCreatedInterface|null $giveawayCreated Optional. Service message: a scheduled giveaway was created */
    public ?GiveawayCreatedInterface $giveawayCreated { set; }

    /** @var GiveawayInterface|null $giveaway Optional. The message is a scheduled giveaway message */
    public ?GiveawayInterface $giveaway { set; }

    /** @var GiveawayWinnersInterface|null $giveawayWinners Optional. A giveaway with public winners was completed */
    public ?GiveawayWinnersInterface $giveawayWinners { set; }

    /** @var GiveawayCompletedInterface|null $giveawayCompleted Optional. Service message: a giveaway without public winners was completed */
    public ?GiveawayCompletedInterface $giveawayCompleted { set; }

    /** @var VideoChatScheduledInterface|null $videoChatScheduled Optional. Service message: video chat scheduled */
    public ?VideoChatScheduledInterface $videoChatScheduled { set; }

    /** @var VideoChatStartedInterface|null $videoChatStarted Optional. Service message: video chat started */
    public ?VideoChatStartedInterface $videoChatStarted { set; }

    /** @var VideoChatEndedInterface|null $videoChatEnded Optional. Service message: video chat ended */
    public ?VideoChatEndedInterface $videoChatEnded { set; }

    /** @var VideoChatParticipantsInvitedInterface|null $videoChatParticipantsInvited Optional. Service message: new participants invited to a video chat */
    public ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited { set; }

    /** @var WebAppDataInterface|null $webAppData Optional. Service message: data sent by a Web App */
    public ?WebAppDataInterface $webAppData { set; }

    /** @var InlineKeyboardMarkupInterface|null $replyMarkup Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons. */
    public ?InlineKeyboardMarkupInterface $replyMarkup { set; }
}
