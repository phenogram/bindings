<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBackgroundInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostAddedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatSharedInterface;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\ExternalReplyInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicClosedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicEditedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicReopenedInterface;
use Phenogram\Bindings\Types\Interfaces\GameInterface;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicHiddenInterface;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicUnhiddenInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCompletedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageAutoDeleteTimerChangedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PassportDataInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\ProximityAlertTriggeredInterface;
use Phenogram\Bindings\Types\Interfaces\RefundedPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\SuccessfulPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\UsersSharedInterface;
use Phenogram\Bindings\Types\Interfaces\VenueInterface;
use Phenogram\Bindings\Types\Interfaces\VideoChatEndedInterface;
use Phenogram\Bindings\Types\Interfaces\VideoChatParticipantsInvitedInterface;
use Phenogram\Bindings\Types\Interfaces\VideoChatScheduledInterface;
use Phenogram\Bindings\Types\Interfaces\VideoChatStartedInterface;
use Phenogram\Bindings\Types\Interfaces\VideoInterface;
use Phenogram\Bindings\Types\Interfaces\VideoNoteInterface;
use Phenogram\Bindings\Types\Interfaces\VoiceInterface;
use Phenogram\Bindings\Types\Interfaces\WebAppDataInterface;
use Phenogram\Bindings\Types\Interfaces\WriteAccessAllowedInterface;

/**
 * This object represents a message.
 */
class Message extends MaybeInaccessibleMessage implements MessageInterface
{
    /**
     * @param int                                         $messageId                     Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     * @param int                                         $date                          Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     * @param ChatInterface                               $chat                          Chat the message belongs to
     * @param int|null                                    $messageThreadId               Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @param UserInterface|null                          $from                          Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
     * @param ChatInterface|null                          $senderChat                    Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
     * @param int|null                                    $senderBoostCount              Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     * @param UserInterface|null                          $senderBusinessBot             Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     * @param string|null                                 $businessConnectionId          Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     * @param MessageOriginInterface|null                 $forwardOrigin                 Optional. Information about the original message for forwarded messages
     * @param bool|null                                   $isTopicMessage                Optional. True, if the message is sent to a forum topic
     * @param bool|null                                   $isAutomaticForward            Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param MessageInterface|null                       $replyToMessage                Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param ExternalReplyInfoInterface|null             $externalReply                 Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     * @param TextQuoteInterface|null                     $quote                         Optional. For replies that quote part of the original message, the quoted part of the message
     * @param StoryInterface|null                         $replyToStory                  Optional. For replies to a story, the original story
     * @param UserInterface|null                          $viaBot                        Optional. Bot through which the message was sent
     * @param int|null                                    $editDate                      Optional. Date the message was last edited in Unix time
     * @param bool|null                                   $hasProtectedContent           Optional. True, if the message can't be forwarded
     * @param bool|null                                   $isFromOffline                 Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     * @param string|null                                 $mediaGroupId                  Optional. The unique identifier of a media message group this message belongs to
     * @param string|null                                 $authorSignature               Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param string|null                                 $text                          Optional. For text messages, the actual UTF-8 text of the message
     * @param array<MessageEntityInterface>|null          $entities                      Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param LinkPreviewOptionsInterface|null            $linkPreviewOptions            Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     * @param string|null                                 $effectId                      Optional. Unique identifier of the message effect added to the message
     * @param AnimationInterface|null                     $animation                     Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     * @param AudioInterface|null                         $audio                         Optional. Message is an audio file, information about the file
     * @param DocumentInterface|null                      $document                      Optional. Message is a general file, information about the file
     * @param PaidMediaInfoInterface|null                 $paidMedia                     Optional. Message contains paid media; information about the paid media
     * @param array<PhotoSizeInterface>|null              $photo                         Optional. Message is a photo, available sizes of the photo
     * @param StickerInterface|null                       $sticker                       Optional. Message is a sticker, information about the sticker
     * @param StoryInterface|null                         $story                         Optional. Message is a forwarded story
     * @param VideoInterface|null                         $video                         Optional. Message is a video, information about the video
     * @param VideoNoteInterface|null                     $videoNote                     Optional. Message is a video note, information about the video message
     * @param VoiceInterface|null                         $voice                         Optional. Message is a voice message, information about the file
     * @param string|null                                 $caption                       Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     * @param array<MessageEntityInterface>|null          $captionEntities               Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param bool|null                                   $showCaptionAboveMedia         Optional. True, if the caption must be shown above the message media
     * @param bool|null                                   $hasMediaSpoiler               Optional. True, if the message media is covered by a spoiler animation
     * @param ContactInterface|null                       $contact                       Optional. Message is a shared contact, information about the contact
     * @param DiceInterface|null                          $dice                          Optional. Message is a dice with random value
     * @param GameInterface|null                          $game                          Optional. Message is a game, information about the game. More about games »
     * @param PollInterface|null                          $poll                          Optional. Message is a native poll, information about the poll
     * @param VenueInterface|null                         $venue                         Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
     * @param LocationInterface|null                      $location                      Optional. Message is a shared location, information about the location
     * @param array<UserInterface>|null                   $newChatMembers                Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param UserInterface|null                          $leftChatMember                Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @param string|null                                 $newChatTitle                  Optional. A chat title was changed to this value
     * @param array<PhotoSizeInterface>|null              $newChatPhoto                  Optional. A chat photo was change to this value
     * @param bool|null                                   $deleteChatPhoto               Optional. Service message: the chat photo was deleted
     * @param bool|null                                   $groupChatCreated              Optional. Service message: the group has been created
     * @param bool|null                                   $supergroupChatCreated         Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param bool|null                                   $channelChatCreated            Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param MessageAutoDeleteTimerChangedInterface|null $messageAutoDeleteTimerChanged Optional. Service message: auto-delete timer settings changed in the chat
     * @param int|null                                    $migrateToChatId               Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null                                    $migrateFromChatId             Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param MaybeInaccessibleMessageInterface|null      $pinnedMessage                 Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param InvoiceInterface|null                       $invoice                       Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @param SuccessfulPaymentInterface|null             $successfulPayment             Optional. Message is a service message about a successful payment, information about the payment. More about payments »
     * @param RefundedPaymentInterface|null               $refundedPayment               Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
     * @param UsersSharedInterface|null                   $usersShared                   Optional. Service message: users were shared with the bot
     * @param ChatSharedInterface|null                    $chatShared                    Optional. Service message: a chat was shared with the bot
     * @param string|null                                 $connectedWebsite              Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     * @param WriteAccessAllowedInterface|null            $writeAccessAllowed            Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     * @param PassportDataInterface|null                  $passportData                  Optional. Telegram Passport data
     * @param ProximityAlertTriggeredInterface|null       $proximityAlertTriggered       Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param ChatBoostAddedInterface|null                $boostAdded                    Optional. Service message: user boosted the chat
     * @param ChatBackgroundInterface|null                $chatBackgroundSet             Optional. Service message: chat background set
     * @param ForumTopicCreatedInterface|null             $forumTopicCreated             Optional. Service message: forum topic created
     * @param ForumTopicEditedInterface|null              $forumTopicEdited              Optional. Service message: forum topic edited
     * @param ForumTopicClosedInterface|null              $forumTopicClosed              Optional. Service message: forum topic closed
     * @param ForumTopicReopenedInterface|null            $forumTopicReopened            Optional. Service message: forum topic reopened
     * @param GeneralForumTopicHiddenInterface|null       $generalForumTopicHidden       Optional. Service message: the 'General' forum topic hidden
     * @param GeneralForumTopicUnhiddenInterface|null     $generalForumTopicUnhidden     Optional. Service message: the 'General' forum topic unhidden
     * @param GiveawayCreatedInterface|null               $giveawayCreated               Optional. Service message: a scheduled giveaway was created
     * @param GiveawayInterface|null                      $giveaway                      Optional. The message is a scheduled giveaway message
     * @param GiveawayWinnersInterface|null               $giveawayWinners               Optional. A giveaway with public winners was completed
     * @param GiveawayCompletedInterface|null             $giveawayCompleted             Optional. Service message: a giveaway without public winners was completed
     * @param VideoChatScheduledInterface|null            $videoChatScheduled            Optional. Service message: video chat scheduled
     * @param VideoChatStartedInterface|null              $videoChatStarted              Optional. Service message: video chat started
     * @param VideoChatEndedInterface|null                $videoChatEnded                Optional. Service message: video chat ended
     * @param VideoChatParticipantsInvitedInterface|null  $videoChatParticipantsInvited  Optional. Service message: new participants invited to a video chat
     * @param WebAppDataInterface|null                    $webAppData                    Optional. Service message: data sent by a Web App
     * @param InlineKeyboardMarkupInterface|null          $replyMarkup                   Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public function __construct(
        public int $messageId,
        public int $date,
        public ChatInterface $chat,
        public ?int $messageThreadId = null,
        public ?UserInterface $from = null,
        public ?ChatInterface $senderChat = null,
        public ?int $senderBoostCount = null,
        public ?UserInterface $senderBusinessBot = null,
        public ?string $businessConnectionId = null,
        public ?MessageOriginInterface $forwardOrigin = null,
        public ?bool $isTopicMessage = null,
        public ?bool $isAutomaticForward = null,
        public ?MessageInterface $replyToMessage = null,
        public ?ExternalReplyInfoInterface $externalReply = null,
        public ?TextQuoteInterface $quote = null,
        public ?StoryInterface $replyToStory = null,
        public ?UserInterface $viaBot = null,
        public ?int $editDate = null,
        public ?bool $hasProtectedContent = null,
        public ?bool $isFromOffline = null,
        public ?string $mediaGroupId = null,
        public ?string $authorSignature = null,
        public ?string $text = null,
        public ?array $entities = null,
        public ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        public ?string $effectId = null,
        public ?AnimationInterface $animation = null,
        public ?AudioInterface $audio = null,
        public ?DocumentInterface $document = null,
        public ?PaidMediaInfoInterface $paidMedia = null,
        public ?array $photo = null,
        public ?StickerInterface $sticker = null,
        public ?StoryInterface $story = null,
        public ?VideoInterface $video = null,
        public ?VideoNoteInterface $videoNote = null,
        public ?VoiceInterface $voice = null,
        public ?string $caption = null,
        public ?array $captionEntities = null,
        public ?bool $showCaptionAboveMedia = null,
        public ?bool $hasMediaSpoiler = null,
        public ?ContactInterface $contact = null,
        public ?DiceInterface $dice = null,
        public ?GameInterface $game = null,
        public ?PollInterface $poll = null,
        public ?VenueInterface $venue = null,
        public ?LocationInterface $location = null,
        public ?array $newChatMembers = null,
        public ?UserInterface $leftChatMember = null,
        public ?string $newChatTitle = null,
        public ?array $newChatPhoto = null,
        public ?bool $deleteChatPhoto = null,
        public ?bool $groupChatCreated = null,
        public ?bool $supergroupChatCreated = null,
        public ?bool $channelChatCreated = null,
        public ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged = null,
        public ?int $migrateToChatId = null,
        public ?int $migrateFromChatId = null,
        public ?MaybeInaccessibleMessageInterface $pinnedMessage = null,
        public ?InvoiceInterface $invoice = null,
        public ?SuccessfulPaymentInterface $successfulPayment = null,
        public ?RefundedPaymentInterface $refundedPayment = null,
        public ?UsersSharedInterface $usersShared = null,
        public ?ChatSharedInterface $chatShared = null,
        public ?string $connectedWebsite = null,
        public ?WriteAccessAllowedInterface $writeAccessAllowed = null,
        public ?PassportDataInterface $passportData = null,
        public ?ProximityAlertTriggeredInterface $proximityAlertTriggered = null,
        public ?ChatBoostAddedInterface $boostAdded = null,
        public ?ChatBackgroundInterface $chatBackgroundSet = null,
        public ?ForumTopicCreatedInterface $forumTopicCreated = null,
        public ?ForumTopicEditedInterface $forumTopicEdited = null,
        public ?ForumTopicClosedInterface $forumTopicClosed = null,
        public ?ForumTopicReopenedInterface $forumTopicReopened = null,
        public ?GeneralForumTopicHiddenInterface $generalForumTopicHidden = null,
        public ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden = null,
        public ?GiveawayCreatedInterface $giveawayCreated = null,
        public ?GiveawayInterface $giveaway = null,
        public ?GiveawayWinnersInterface $giveawayWinners = null,
        public ?GiveawayCompletedInterface $giveawayCompleted = null,
        public ?VideoChatScheduledInterface $videoChatScheduled = null,
        public ?VideoChatStartedInterface $videoChatStarted = null,
        public ?VideoChatEndedInterface $videoChatEnded = null,
        public ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited = null,
        public ?WebAppDataInterface $webAppData = null,
        public ?InlineKeyboardMarkupInterface $replyMarkup = null,
    ) {
    }
}
