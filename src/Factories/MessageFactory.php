<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AnimationFactory as Animation;
use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\ContactFactory as Contact;
use Phenogram\Bindings\Factories\DiceFactory as Dice;
use Phenogram\Bindings\Factories\DocumentFactory as Document;
use Phenogram\Bindings\Factories\GameFactory as Game;
use Phenogram\Bindings\Factories\GiveawayFactory as Giveaway;
use Phenogram\Bindings\Factories\InvoiceFactory as Invoice;
use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Factories\PollFactory as Poll;
use Phenogram\Bindings\Factories\StickerFactory as Sticker;
use Phenogram\Bindings\Factories\StoryFactory as Story;
use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Factories\VenueFactory as Venue;
use Phenogram\Bindings\Factories\VideoFactory as Video;
use Phenogram\Bindings\Factories\VoiceFactory as Voice;
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
use Phenogram\Bindings\Types\Interfaces\GiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCompletedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\MessageAutoDeleteTimerChangedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMessagePriceChangedInterface;
use Phenogram\Bindings\Types\Interfaces\PassportDataInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\ProximityAlertTriggeredInterface;
use Phenogram\Bindings\Types\Interfaces\RefundedPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\SuccessfulPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInfoInterface;
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
use Phenogram\Bindings\Types\Message;

class MessageFactory extends AbstractFactory
{
    /**
     * Creates a new Message instance with default fake data.
     *
     * @param int|null                                                                    $messageId                     Optional. Unique message identifier inside this chat. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent
     * @param int|null                                                                    $messageThreadId               Optional. Optional. Unique identifier of a message thread to which the message belongs; for supergroups only
     * @param UserInterface|null                                                          $from                          Optional. Optional. Sender of the message; may be empty for messages sent to channels. For backward compatibility, if the message was sent on behalf of a chat, the field contains a fake sender user in non-channel chats
     * @param ChatInterface|null                                                          $senderChat                    Optional. Optional. Sender of the message when sent on behalf of a chat. For example, the supergroup itself for messages sent by its anonymous administrators or a linked channel for messages automatically forwarded to the channel's discussion group. For backward compatibility, if the message was sent on behalf of a chat, the field from contains a fake sender user in non-channel chats.
     * @param int|null                                                                    $senderBoostCount              Optional. Optional. If the sender of the message boosted the chat, the number of boosts added by the user
     * @param UserInterface|null                                                          $senderBusinessBot             Optional. Optional. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.
     * @param int|null                                                                    $date                          Optional. Date the message was sent in Unix time. It is always a positive number, representing a valid date.
     * @param string|null                                                                 $businessConnectionId          Optional. Optional. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.
     * @param ChatInterface|null                                                          $chat                          Optional. Chat the message belongs to
     * @param \Phenogram\Bindings\Types\Interfaces\MessageOriginInterface|null            $forwardOrigin                 Optional. Optional. Information about the original message for forwarded messages
     * @param bool|null                                                                   $isTopicMessage                Optional. Optional. True, if the message is sent to a forum topic
     * @param bool|null                                                                   $isAutomaticForward            Optional. Optional. True, if the message is a channel post that was automatically forwarded to the connected discussion group
     * @param MessageInterface|null                                                       $replyToMessage                Optional. Optional. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param ExternalReplyInfoInterface|null                                             $externalReply                 Optional. Optional. Information about the message that is being replied to, which may come from another chat or forum topic
     * @param TextQuoteInterface|null                                                     $quote                         Optional. Optional. For replies that quote part of the original message, the quoted part of the message
     * @param StoryInterface|null                                                         $replyToStory                  Optional. Optional. For replies to a story, the original story
     * @param UserInterface|null                                                          $viaBot                        Optional. Optional. Bot through which the message was sent
     * @param int|null                                                                    $editDate                      Optional. Optional. Date the message was last edited in Unix time
     * @param bool|null                                                                   $hasProtectedContent           Optional. Optional. True, if the message can't be forwarded
     * @param bool|null                                                                   $isFromOffline                 Optional. Optional. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message
     * @param string|null                                                                 $mediaGroupId                  Optional. Optional. The unique identifier of a media message group this message belongs to
     * @param string|null                                                                 $authorSignature               Optional. Optional. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
     * @param int|null                                                                    $paidStarCount                 Optional. Optional. The number of Telegram Stars that were paid by the sender of the message to send it
     * @param string|null                                                                 $text                          Optional. Optional. For text messages, the actual UTF-8 text of the message
     * @param array|null                                                                  $entities                      Optional. Optional. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
     * @param LinkPreviewOptionsInterface|null                                            $linkPreviewOptions            Optional. Optional. Options used for link preview generation for the message, if it is a text message and link preview options were changed
     * @param string|null                                                                 $effectId                      Optional. Optional. Unique identifier of the message effect added to the message
     * @param AnimationInterface|null                                                     $animation                     Optional. Optional. Message is an animation, information about the animation. For backward compatibility, when this field is set, the document field will also be set
     * @param AudioInterface|null                                                         $audio                         Optional. Optional. Message is an audio file, information about the file
     * @param DocumentInterface|null                                                      $document                      Optional. Optional. Message is a general file, information about the file
     * @param PaidMediaInfoInterface|null                                                 $paidMedia                     Optional. Optional. Message contains paid media; information about the paid media
     * @param array|null                                                                  $photo                         Optional. Optional. Message is a photo, available sizes of the photo
     * @param StickerInterface|null                                                       $sticker                       Optional. Optional. Message is a sticker, information about the sticker
     * @param StoryInterface|null                                                         $story                         Optional. Optional. Message is a forwarded story
     * @param VideoInterface|null                                                         $video                         Optional. Optional. Message is a video, information about the video
     * @param VideoNoteInterface|null                                                     $videoNote                     Optional. Optional. Message is a video note, information about the video message
     * @param VoiceInterface|null                                                         $voice                         Optional. Optional. Message is a voice message, information about the file
     * @param string|null                                                                 $caption                       Optional. Optional. Caption for the animation, audio, document, paid media, photo, video or voice
     * @param array|null                                                                  $captionEntities               Optional. Optional. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
     * @param bool|null                                                                   $showCaptionAboveMedia         Optional. Optional. True, if the caption must be shown above the message media
     * @param bool|null                                                                   $hasMediaSpoiler               Optional. Optional. True, if the message media is covered by a spoiler animation
     * @param ContactInterface|null                                                       $contact                       Optional. Optional. Message is a shared contact, information about the contact
     * @param DiceInterface|null                                                          $dice                          Optional. Optional. Message is a dice with random value
     * @param GameInterface|null                                                          $game                          Optional. Optional. Message is a game, information about the game. More about games »
     * @param PollInterface|null                                                          $poll                          Optional. Optional. Message is a native poll, information about the poll
     * @param VenueInterface|null                                                         $venue                         Optional. Optional. Message is a venue, information about the venue. For backward compatibility, when this field is set, the location field will also be set
     * @param LocationInterface|null                                                      $location                      Optional. Optional. Message is a shared location, information about the location
     * @param array|null                                                                  $newChatMembers                Optional. Optional. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
     * @param UserInterface|null                                                          $leftChatMember                Optional. Optional. A member was removed from the group, information about them (this member may be the bot itself)
     * @param string|null                                                                 $newChatTitle                  Optional. Optional. A chat title was changed to this value
     * @param array|null                                                                  $newChatPhoto                  Optional. Optional. A chat photo was change to this value
     * @param bool|null                                                                   $deleteChatPhoto               Optional. Optional. Service message: the chat photo was deleted
     * @param bool|null                                                                   $groupChatCreated              Optional. Optional. Service message: the group has been created
     * @param bool|null                                                                   $supergroupChatCreated         Optional. Optional. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply_to_message if someone replies to a very first message in a directly created supergroup.
     * @param bool|null                                                                   $channelChatCreated            Optional. Optional. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply_to_message if someone replies to a very first message in a channel.
     * @param MessageAutoDeleteTimerChangedInterface|null                                 $messageAutoDeleteTimerChanged Optional. Optional. Service message: auto-delete timer settings changed in the chat
     * @param int|null                                                                    $migrateToChatId               Optional. Optional. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param int|null                                                                    $migrateFromChatId             Optional. Optional. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param \Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface|null $pinnedMessage                 Optional. Optional. Specified message was pinned. Note that the Message object in this field will not contain further reply_to_message fields even if it itself is a reply.
     * @param InvoiceInterface|null                                                       $invoice                       Optional. Optional. Message is an invoice for a payment, information about the invoice. More about payments »
     * @param SuccessfulPaymentInterface|null                                             $successfulPayment             Optional. Optional. Message is a service message about a successful payment, information about the payment. More about payments »
     * @param RefundedPaymentInterface|null                                               $refundedPayment               Optional. Optional. Message is a service message about a refunded payment, information about the payment. More about payments »
     * @param UsersSharedInterface|null                                                   $usersShared                   Optional. Optional. Service message: users were shared with the bot
     * @param ChatSharedInterface|null                                                    $chatShared                    Optional. Optional. Service message: a chat was shared with the bot
     * @param GiftInfoInterface|null                                                      $gift                          Optional. Optional. Service message: a regular gift was sent or received
     * @param UniqueGiftInfoInterface|null                                                $uniqueGift                    Optional. Optional. Service message: a unique gift was sent or received
     * @param string|null                                                                 $connectedWebsite              Optional. Optional. The domain name of the website on which the user has logged in. More about Telegram Login »
     * @param WriteAccessAllowedInterface|null                                            $writeAccessAllowed            Optional. Optional. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method requestWriteAccess
     * @param PassportDataInterface|null                                                  $passportData                  Optional. Optional. Telegram Passport data
     * @param ProximityAlertTriggeredInterface|null                                       $proximityAlertTriggered       Optional. Optional. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
     * @param ChatBoostAddedInterface|null                                                $boostAdded                    Optional. Optional. Service message: user boosted the chat
     * @param ChatBackgroundInterface|null                                                $chatBackgroundSet             Optional. Optional. Service message: chat background set
     * @param ForumTopicCreatedInterface|null                                             $forumTopicCreated             Optional. Optional. Service message: forum topic created
     * @param ForumTopicEditedInterface|null                                              $forumTopicEdited              Optional. Optional. Service message: forum topic edited
     * @param ForumTopicClosedInterface|null                                              $forumTopicClosed              Optional. Optional. Service message: forum topic closed
     * @param ForumTopicReopenedInterface|null                                            $forumTopicReopened            Optional. Optional. Service message: forum topic reopened
     * @param GeneralForumTopicHiddenInterface|null                                       $generalForumTopicHidden       Optional. Optional. Service message: the 'General' forum topic hidden
     * @param GeneralForumTopicUnhiddenInterface|null                                     $generalForumTopicUnhidden     Optional. Optional. Service message: the 'General' forum topic unhidden
     * @param GiveawayCreatedInterface|null                                               $giveawayCreated               Optional. Optional. Service message: a scheduled giveaway was created
     * @param GiveawayInterface|null                                                      $giveaway                      Optional. Optional. The message is a scheduled giveaway message
     * @param GiveawayWinnersInterface|null                                               $giveawayWinners               Optional. Optional. A giveaway with public winners was completed
     * @param GiveawayCompletedInterface|null                                             $giveawayCompleted             Optional. Optional. Service message: a giveaway without public winners was completed
     * @param PaidMessagePriceChangedInterface|null                                       $paidMessagePriceChanged       Optional. Optional. Service message: the price for paid messages has changed in the chat
     * @param VideoChatScheduledInterface|null                                            $videoChatScheduled            Optional. Optional. Service message: video chat scheduled
     * @param VideoChatStartedInterface|null                                              $videoChatStarted              Optional. Optional. Service message: video chat started
     * @param VideoChatEndedInterface|null                                                $videoChatEnded                Optional. Optional. Service message: video chat ended
     * @param VideoChatParticipantsInvitedInterface|null                                  $videoChatParticipantsInvited  Optional. Optional. Service message: new participants invited to a video chat
     * @param WebAppDataInterface|null                                                    $webAppData                    Optional. Optional. Service message: data sent by a Web App
     * @param InlineKeyboardMarkupInterface|null                                          $replyMarkup                   Optional. Optional. Inline keyboard attached to the message. login_url buttons are represented as ordinary url buttons.
     */
    public static function make(
        ?int $messageId = null,
        ?int $messageThreadId = null,
        ?UserInterface $from = null,
        ?ChatInterface $senderChat = null,
        ?int $senderBoostCount = null,
        ?UserInterface $senderBusinessBot = null,
        ?int $date = null,
        ?string $businessConnectionId = null,
        ?ChatInterface $chat = null,
        ?\Phenogram\Bindings\Types\Interfaces\MessageOriginInterface $forwardOrigin = null,
        ?bool $isTopicMessage = null,
        ?bool $isAutomaticForward = null,
        ?MessageInterface $replyToMessage = null,
        ?ExternalReplyInfoInterface $externalReply = null,
        ?TextQuoteInterface $quote = null,
        ?StoryInterface $replyToStory = null,
        ?UserInterface $viaBot = null,
        ?int $editDate = null,
        ?bool $hasProtectedContent = null,
        ?bool $isFromOffline = null,
        ?string $mediaGroupId = null,
        ?string $authorSignature = null,
        ?int $paidStarCount = null,
        ?string $text = null,
        ?array $entities = null,
        ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        ?string $effectId = null,
        ?AnimationInterface $animation = null,
        ?AudioInterface $audio = null,
        ?DocumentInterface $document = null,
        ?PaidMediaInfoInterface $paidMedia = null,
        ?array $photo = null,
        ?StickerInterface $sticker = null,
        ?StoryInterface $story = null,
        ?VideoInterface $video = null,
        ?VideoNoteInterface $videoNote = null,
        ?VoiceInterface $voice = null,
        ?string $caption = null,
        ?array $captionEntities = null,
        ?bool $showCaptionAboveMedia = null,
        ?bool $hasMediaSpoiler = null,
        ?ContactInterface $contact = null,
        ?DiceInterface $dice = null,
        ?GameInterface $game = null,
        ?PollInterface $poll = null,
        ?VenueInterface $venue = null,
        ?LocationInterface $location = null,
        ?array $newChatMembers = null,
        ?UserInterface $leftChatMember = null,
        ?string $newChatTitle = null,
        ?array $newChatPhoto = null,
        ?bool $deleteChatPhoto = null,
        ?bool $groupChatCreated = null,
        ?bool $supergroupChatCreated = null,
        ?bool $channelChatCreated = null,
        ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged = null,
        ?int $migrateToChatId = null,
        ?int $migrateFromChatId = null,
        ?\Phenogram\Bindings\Types\Interfaces\MaybeInaccessibleMessageInterface $pinnedMessage = null,
        ?InvoiceInterface $invoice = null,
        ?SuccessfulPaymentInterface $successfulPayment = null,
        ?RefundedPaymentInterface $refundedPayment = null,
        ?UsersSharedInterface $usersShared = null,
        ?ChatSharedInterface $chatShared = null,
        ?GiftInfoInterface $gift = null,
        ?UniqueGiftInfoInterface $uniqueGift = null,
        ?string $connectedWebsite = null,
        ?WriteAccessAllowedInterface $writeAccessAllowed = null,
        ?PassportDataInterface $passportData = null,
        ?ProximityAlertTriggeredInterface $proximityAlertTriggered = null,
        ?ChatBoostAddedInterface $boostAdded = null,
        ?ChatBackgroundInterface $chatBackgroundSet = null,
        ?ForumTopicCreatedInterface $forumTopicCreated = null,
        ?ForumTopicEditedInterface $forumTopicEdited = null,
        ?ForumTopicClosedInterface $forumTopicClosed = null,
        ?ForumTopicReopenedInterface $forumTopicReopened = null,
        ?GeneralForumTopicHiddenInterface $generalForumTopicHidden = null,
        ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden = null,
        ?GiveawayCreatedInterface $giveawayCreated = null,
        ?GiveawayInterface $giveaway = null,
        ?GiveawayWinnersInterface $giveawayWinners = null,
        ?GiveawayCompletedInterface $giveawayCompleted = null,
        ?PaidMessagePriceChangedInterface $paidMessagePriceChanged = null,
        ?VideoChatScheduledInterface $videoChatScheduled = null,
        ?VideoChatStartedInterface $videoChatStarted = null,
        ?VideoChatEndedInterface $videoChatEnded = null,
        ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited = null,
        ?WebAppDataInterface $webAppData = null,
        ?InlineKeyboardMarkupInterface $replyMarkup = null,
    ): MessageInterface {
        return self::factory()->makeMessage(
            messageId: $messageId ?? self::fake()->numberBetween(100000, 999999999),
            messageThreadId: $messageThreadId,
            from: $from,
            senderChat: $senderChat,
            senderBoostCount: $senderBoostCount,
            senderBusinessBot: $senderBusinessBot,
            date: $date ?? self::fake()->unixTime(),
            businessConnectionId: $businessConnectionId,
            chat: $chat ?? Chat::make(),
            forwardOrigin: $forwardOrigin,
            isTopicMessage: $isTopicMessage,
            isAutomaticForward: $isAutomaticForward,
            replyToMessage: $replyToMessage,
            externalReply: $externalReply,
            quote: $quote,
            replyToStory: $replyToStory,
            viaBot: $viaBot,
            editDate: $editDate,
            hasProtectedContent: $hasProtectedContent,
            isFromOffline: $isFromOffline,
            mediaGroupId: $mediaGroupId,
            authorSignature: $authorSignature,
            paidStarCount: $paidStarCount,
            text: $text,
            entities: $entities,
            linkPreviewOptions: $linkPreviewOptions,
            effectId: $effectId,
            animation: $animation,
            audio: $audio,
            document: $document,
            paidMedia: $paidMedia,
            photo: $photo,
            sticker: $sticker,
            story: $story,
            video: $video,
            videoNote: $videoNote,
            voice: $voice,
            caption: $caption,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            hasMediaSpoiler: $hasMediaSpoiler,
            contact: $contact,
            dice: $dice,
            game: $game,
            poll: $poll,
            venue: $venue,
            location: $location,
            newChatMembers: $newChatMembers,
            leftChatMember: $leftChatMember,
            newChatTitle: $newChatTitle,
            newChatPhoto: $newChatPhoto,
            deleteChatPhoto: $deleteChatPhoto,
            groupChatCreated: $groupChatCreated,
            supergroupChatCreated: $supergroupChatCreated,
            channelChatCreated: $channelChatCreated,
            messageAutoDeleteTimerChanged: $messageAutoDeleteTimerChanged,
            migrateToChatId: $migrateToChatId,
            migrateFromChatId: $migrateFromChatId,
            pinnedMessage: $pinnedMessage,
            invoice: $invoice,
            successfulPayment: $successfulPayment,
            refundedPayment: $refundedPayment,
            usersShared: $usersShared,
            chatShared: $chatShared,
            gift: $gift,
            uniqueGift: $uniqueGift,
            connectedWebsite: $connectedWebsite,
            writeAccessAllowed: $writeAccessAllowed,
            passportData: $passportData,
            proximityAlertTriggered: $proximityAlertTriggered,
            boostAdded: $boostAdded,
            chatBackgroundSet: $chatBackgroundSet,
            forumTopicCreated: $forumTopicCreated,
            forumTopicEdited: $forumTopicEdited,
            forumTopicClosed: $forumTopicClosed,
            forumTopicReopened: $forumTopicReopened,
            generalForumTopicHidden: $generalForumTopicHidden,
            generalForumTopicUnhidden: $generalForumTopicUnhidden,
            giveawayCreated: $giveawayCreated,
            giveaway: $giveaway,
            giveawayWinners: $giveawayWinners,
            giveawayCompleted: $giveawayCompleted,
            paidMessagePriceChanged: $paidMessagePriceChanged,
            videoChatScheduled: $videoChatScheduled,
            videoChatStarted: $videoChatStarted,
            videoChatEnded: $videoChatEnded,
            videoChatParticipantsInvited: $videoChatParticipantsInvited,
            webAppData: $webAppData,
            replyMarkup: $replyMarkup,
        );
    }
}
