<?php

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\Animation;
use Phenogram\Bindings\Types\Audio;
use Phenogram\Bindings\Types\BackgroundFillFreeformGradient;
use Phenogram\Bindings\Types\BackgroundFillGradient;
use Phenogram\Bindings\Types\BackgroundFillSolid;
use Phenogram\Bindings\Types\BackgroundTypeChatTheme;
use Phenogram\Bindings\Types\BackgroundTypeFill;
use Phenogram\Bindings\Types\BackgroundTypePattern;
use Phenogram\Bindings\Types\BackgroundTypeWallpaper;
use Phenogram\Bindings\Types\Birthdate;
use Phenogram\Bindings\Types\BotCommand;
use Phenogram\Bindings\Types\BotCommandScopeAllChatAdministrators;
use Phenogram\Bindings\Types\BotCommandScopeAllGroupChats;
use Phenogram\Bindings\Types\BotCommandScopeAllPrivateChats;
use Phenogram\Bindings\Types\BotCommandScopeChat;
use Phenogram\Bindings\Types\BotCommandScopeChatAdministrators;
use Phenogram\Bindings\Types\BotCommandScopeChatMember;
use Phenogram\Bindings\Types\BotCommandScopeDefault;
use Phenogram\Bindings\Types\BotDescription;
use Phenogram\Bindings\Types\BotName;
use Phenogram\Bindings\Types\BotShortDescription;
use Phenogram\Bindings\Types\BusinessConnection;
use Phenogram\Bindings\Types\BusinessIntro;
use Phenogram\Bindings\Types\BusinessLocation;
use Phenogram\Bindings\Types\BusinessMessagesDeleted;
use Phenogram\Bindings\Types\BusinessOpeningHours;
use Phenogram\Bindings\Types\BusinessOpeningHoursInterval;
use Phenogram\Bindings\Types\CallbackGame;
use Phenogram\Bindings\Types\CallbackQuery;
use Phenogram\Bindings\Types\Chat;
use Phenogram\Bindings\Types\ChatAdministratorRights;
use Phenogram\Bindings\Types\ChatBackground;
use Phenogram\Bindings\Types\ChatBoost;
use Phenogram\Bindings\Types\ChatBoostAdded;
use Phenogram\Bindings\Types\ChatBoostRemoved;
use Phenogram\Bindings\Types\ChatBoostSourceGiftCode;
use Phenogram\Bindings\Types\ChatBoostSourceGiveaway;
use Phenogram\Bindings\Types\ChatBoostSourcePremium;
use Phenogram\Bindings\Types\ChatBoostUpdated;
use Phenogram\Bindings\Types\ChatFullInfo;
use Phenogram\Bindings\Types\ChatInviteLink;
use Phenogram\Bindings\Types\ChatJoinRequest;
use Phenogram\Bindings\Types\ChatLocation;
use Phenogram\Bindings\Types\ChatMemberAdministrator;
use Phenogram\Bindings\Types\ChatMemberBanned;
use Phenogram\Bindings\Types\ChatMemberLeft;
use Phenogram\Bindings\Types\ChatMemberMember;
use Phenogram\Bindings\Types\ChatMemberOwner;
use Phenogram\Bindings\Types\ChatMemberRestricted;
use Phenogram\Bindings\Types\ChatMemberUpdated;
use Phenogram\Bindings\Types\ChatPermissions;
use Phenogram\Bindings\Types\ChatPhoto;
use Phenogram\Bindings\Types\ChatShared;
use Phenogram\Bindings\Types\ChosenInlineResult;
use Phenogram\Bindings\Types\Contact;
use Phenogram\Bindings\Types\CopyTextButton;
use Phenogram\Bindings\Types\Dice;
use Phenogram\Bindings\Types\Document;
use Phenogram\Bindings\Types\EncryptedCredentials;
use Phenogram\Bindings\Types\EncryptedPassportElement;
use Phenogram\Bindings\Types\ExternalReplyInfo;
use Phenogram\Bindings\Types\File;
use Phenogram\Bindings\Types\ForceReply;
use Phenogram\Bindings\Types\ForumTopic;
use Phenogram\Bindings\Types\ForumTopicClosed;
use Phenogram\Bindings\Types\ForumTopicCreated;
use Phenogram\Bindings\Types\ForumTopicEdited;
use Phenogram\Bindings\Types\ForumTopicReopened;
use Phenogram\Bindings\Types\Game;
use Phenogram\Bindings\Types\GameHighScore;
use Phenogram\Bindings\Types\GeneralForumTopicHidden;
use Phenogram\Bindings\Types\GeneralForumTopicUnhidden;
use Phenogram\Bindings\Types\Gift;
use Phenogram\Bindings\Types\Gifts;
use Phenogram\Bindings\Types\Giveaway;
use Phenogram\Bindings\Types\GiveawayCompleted;
use Phenogram\Bindings\Types\GiveawayCreated;
use Phenogram\Bindings\Types\GiveawayWinners;
use Phenogram\Bindings\Types\InaccessibleMessage;
use Phenogram\Bindings\Types\InlineKeyboardButton;
use Phenogram\Bindings\Types\InlineKeyboardMarkup;
use Phenogram\Bindings\Types\InlineQuery;
use Phenogram\Bindings\Types\InlineQueryResultArticle;
use Phenogram\Bindings\Types\InlineQueryResultAudio;
use Phenogram\Bindings\Types\InlineQueryResultCachedAudio;
use Phenogram\Bindings\Types\InlineQueryResultCachedDocument;
use Phenogram\Bindings\Types\InlineQueryResultCachedGif;
use Phenogram\Bindings\Types\InlineQueryResultCachedMpeg4Gif;
use Phenogram\Bindings\Types\InlineQueryResultCachedPhoto;
use Phenogram\Bindings\Types\InlineQueryResultCachedSticker;
use Phenogram\Bindings\Types\InlineQueryResultCachedVideo;
use Phenogram\Bindings\Types\InlineQueryResultCachedVoice;
use Phenogram\Bindings\Types\InlineQueryResultContact;
use Phenogram\Bindings\Types\InlineQueryResultDocument;
use Phenogram\Bindings\Types\InlineQueryResultGame;
use Phenogram\Bindings\Types\InlineQueryResultGif;
use Phenogram\Bindings\Types\InlineQueryResultLocation;
use Phenogram\Bindings\Types\InlineQueryResultMpeg4Gif;
use Phenogram\Bindings\Types\InlineQueryResultPhoto;
use Phenogram\Bindings\Types\InlineQueryResultsButton;
use Phenogram\Bindings\Types\InlineQueryResultVenue;
use Phenogram\Bindings\Types\InlineQueryResultVideo;
use Phenogram\Bindings\Types\InlineQueryResultVoice;
use Phenogram\Bindings\Types\InputContactMessageContent;
use Phenogram\Bindings\Types\InputFile;
use Phenogram\Bindings\Types\InputInvoiceMessageContent;
use Phenogram\Bindings\Types\InputLocationMessageContent;
use Phenogram\Bindings\Types\InputMediaAnimation;
use Phenogram\Bindings\Types\InputMediaAudio;
use Phenogram\Bindings\Types\InputMediaDocument;
use Phenogram\Bindings\Types\InputMediaPhoto;
use Phenogram\Bindings\Types\InputMediaVideo;
use Phenogram\Bindings\Types\InputPaidMediaPhoto;
use Phenogram\Bindings\Types\InputPaidMediaVideo;
use Phenogram\Bindings\Types\InputPollOption;
use Phenogram\Bindings\Types\InputSticker;
use Phenogram\Bindings\Types\InputTextMessageContent;
use Phenogram\Bindings\Types\InputVenueMessageContent;
use Phenogram\Bindings\Types\Interfaces\TypeInterface;
use Phenogram\Bindings\Types\Invoice;
use Phenogram\Bindings\Types\KeyboardButton;
use Phenogram\Bindings\Types\KeyboardButtonPollType;
use Phenogram\Bindings\Types\KeyboardButtonRequestChat;
use Phenogram\Bindings\Types\KeyboardButtonRequestUsers;
use Phenogram\Bindings\Types\LabeledPrice;
use Phenogram\Bindings\Types\LinkPreviewOptions;
use Phenogram\Bindings\Types\Location;
use Phenogram\Bindings\Types\LoginUrl;
use Phenogram\Bindings\Types\MaskPosition;
use Phenogram\Bindings\Types\MenuButtonCommands;
use Phenogram\Bindings\Types\MenuButtonDefault;
use Phenogram\Bindings\Types\MenuButtonWebApp;
use Phenogram\Bindings\Types\Message;
use Phenogram\Bindings\Types\MessageAutoDeleteTimerChanged;
use Phenogram\Bindings\Types\MessageEntity;
use Phenogram\Bindings\Types\MessageId;
use Phenogram\Bindings\Types\MessageOriginChannel;
use Phenogram\Bindings\Types\MessageOriginChat;
use Phenogram\Bindings\Types\MessageOriginHiddenUser;
use Phenogram\Bindings\Types\MessageOriginUser;
use Phenogram\Bindings\Types\MessageReactionCountUpdated;
use Phenogram\Bindings\Types\MessageReactionUpdated;
use Phenogram\Bindings\Types\OrderInfo;
use Phenogram\Bindings\Types\PaidMediaInfo;
use Phenogram\Bindings\Types\PaidMediaPhoto;
use Phenogram\Bindings\Types\PaidMediaPreview;
use Phenogram\Bindings\Types\PaidMediaPurchased;
use Phenogram\Bindings\Types\PaidMediaVideo;
use Phenogram\Bindings\Types\PassportData;
use Phenogram\Bindings\Types\PassportElementErrorDataField;
use Phenogram\Bindings\Types\PassportElementErrorFile;
use Phenogram\Bindings\Types\PassportElementErrorFiles;
use Phenogram\Bindings\Types\PassportElementErrorFrontSide;
use Phenogram\Bindings\Types\PassportElementErrorReverseSide;
use Phenogram\Bindings\Types\PassportElementErrorSelfie;
use Phenogram\Bindings\Types\PassportElementErrorTranslationFile;
use Phenogram\Bindings\Types\PassportElementErrorTranslationFiles;
use Phenogram\Bindings\Types\PassportElementErrorUnspecified;
use Phenogram\Bindings\Types\PassportFile;
use Phenogram\Bindings\Types\PhotoSize;
use Phenogram\Bindings\Types\Poll;
use Phenogram\Bindings\Types\PollAnswer;
use Phenogram\Bindings\Types\PollOption;
use Phenogram\Bindings\Types\PreCheckoutQuery;
use Phenogram\Bindings\Types\PreparedInlineMessage;
use Phenogram\Bindings\Types\ProximityAlertTriggered;
use Phenogram\Bindings\Types\ReactionCount;
use Phenogram\Bindings\Types\ReactionTypeCustomEmoji;
use Phenogram\Bindings\Types\ReactionTypeEmoji;
use Phenogram\Bindings\Types\ReactionTypePaid;
use Phenogram\Bindings\Types\RefundedPayment;
use Phenogram\Bindings\Types\ReplyKeyboardMarkup;
use Phenogram\Bindings\Types\ReplyKeyboardRemove;
use Phenogram\Bindings\Types\ReplyParameters;
use Phenogram\Bindings\Types\ResponseParameters;
use Phenogram\Bindings\Types\RevenueWithdrawalStateFailed;
use Phenogram\Bindings\Types\RevenueWithdrawalStatePending;
use Phenogram\Bindings\Types\RevenueWithdrawalStateSucceeded;
use Phenogram\Bindings\Types\SentWebAppMessage;
use Phenogram\Bindings\Types\SharedUser;
use Phenogram\Bindings\Types\ShippingAddress;
use Phenogram\Bindings\Types\ShippingOption;
use Phenogram\Bindings\Types\ShippingQuery;
use Phenogram\Bindings\Types\StarTransaction;
use Phenogram\Bindings\Types\StarTransactions;
use Phenogram\Bindings\Types\Sticker;
use Phenogram\Bindings\Types\StickerSet;
use Phenogram\Bindings\Types\Story;
use Phenogram\Bindings\Types\SuccessfulPayment;
use Phenogram\Bindings\Types\SwitchInlineQueryChosenChat;
use Phenogram\Bindings\Types\TextQuote;
use Phenogram\Bindings\Types\TransactionPartnerFragment;
use Phenogram\Bindings\Types\TransactionPartnerOther;
use Phenogram\Bindings\Types\TransactionPartnerTelegramAds;
use Phenogram\Bindings\Types\TransactionPartnerTelegramApi;
use Phenogram\Bindings\Types\TransactionPartnerUser;
use Phenogram\Bindings\Types\Update;
use Phenogram\Bindings\Types\User;
use Phenogram\Bindings\Types\UserChatBoosts;
use Phenogram\Bindings\Types\UserProfilePhotos;
use Phenogram\Bindings\Types\UsersShared;
use Phenogram\Bindings\Types\Venue;
use Phenogram\Bindings\Types\Video;
use Phenogram\Bindings\Types\VideoChatEnded;
use Phenogram\Bindings\Types\VideoChatParticipantsInvited;
use Phenogram\Bindings\Types\VideoChatScheduled;
use Phenogram\Bindings\Types\VideoChatStarted;
use Phenogram\Bindings\Types\VideoNote;
use Phenogram\Bindings\Types\Voice;
use Phenogram\Bindings\Types\WebAppData;
use Phenogram\Bindings\Types\WebAppInfo;
use Phenogram\Bindings\Types\WebhookInfo;
use Phenogram\Bindings\Types\WriteAccessAllowed;

class Serializer implements SerializerInterface
{
    public function __construct(
        private readonly FactoryInterface $factory = new Factory(),
    ) {
    }

    public function denormalizeUpdate(array $data): Types\Interfaces\UpdateInterface
    {
        $requiredFields = [
            'update_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Update missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUpdate(
            updateId: $data['update_id'],
            message: isset($data['message'])
                ? $this->denormalizeMessage($data['message'])
                : null,
            editedMessage: isset($data['edited_message'])
                ? $this->denormalizeMessage($data['edited_message'])
                : null,
            channelPost: isset($data['channel_post'])
                ? $this->denormalizeMessage($data['channel_post'])
                : null,
            editedChannelPost: isset($data['edited_channel_post'])
                ? $this->denormalizeMessage($data['edited_channel_post'])
                : null,
            businessConnection: isset($data['business_connection'])
                ? $this->denormalizeBusinessConnection($data['business_connection'])
                : null,
            businessMessage: isset($data['business_message'])
                ? $this->denormalizeMessage($data['business_message'])
                : null,
            editedBusinessMessage: isset($data['edited_business_message'])
                ? $this->denormalizeMessage($data['edited_business_message'])
                : null,
            deletedBusinessMessages: isset($data['deleted_business_messages'])
                ? $this->denormalizeBusinessMessagesDeleted($data['deleted_business_messages'])
                : null,
            messageReaction: isset($data['message_reaction'])
                ? $this->denormalizeMessageReactionUpdated($data['message_reaction'])
                : null,
            messageReactionCount: isset($data['message_reaction_count'])
                ? $this->denormalizeMessageReactionCountUpdated($data['message_reaction_count'])
                : null,
            inlineQuery: isset($data['inline_query'])
                ? $this->denormalizeInlineQuery($data['inline_query'])
                : null,
            chosenInlineResult: isset($data['chosen_inline_result'])
                ? $this->denormalizeChosenInlineResult($data['chosen_inline_result'])
                : null,
            callbackQuery: isset($data['callback_query'])
                ? $this->denormalizeCallbackQuery($data['callback_query'])
                : null,
            shippingQuery: isset($data['shipping_query'])
                ? $this->denormalizeShippingQuery($data['shipping_query'])
                : null,
            preCheckoutQuery: isset($data['pre_checkout_query'])
                ? $this->denormalizePreCheckoutQuery($data['pre_checkout_query'])
                : null,
            purchasedPaidMedia: isset($data['purchased_paid_media'])
                ? $this->denormalizePaidMediaPurchased($data['purchased_paid_media'])
                : null,
            poll: isset($data['poll'])
                ? $this->denormalizePoll($data['poll'])
                : null,
            pollAnswer: isset($data['poll_answer'])
                ? $this->denormalizePollAnswer($data['poll_answer'])
                : null,
            myChatMember: isset($data['my_chat_member'])
                ? $this->denormalizeChatMemberUpdated($data['my_chat_member'])
                : null,
            chatMember: isset($data['chat_member'])
                ? $this->denormalizeChatMemberUpdated($data['chat_member'])
                : null,
            chatJoinRequest: isset($data['chat_join_request'])
                ? $this->denormalizeChatJoinRequest($data['chat_join_request'])
                : null,
            chatBoost: isset($data['chat_boost'])
                ? $this->denormalizeChatBoostUpdated($data['chat_boost'])
                : null,
            removedChatBoost: isset($data['removed_chat_boost'])
                ? $this->denormalizeChatBoostRemoved($data['removed_chat_boost'])
                : null,
        );
    }

    public function denormalizeWebhookInfo(array $data): Types\Interfaces\WebhookInfoInterface
    {
        $requiredFields = [
            'url',
            'has_custom_certificate',
            'pending_update_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class WebhookInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeWebhookInfo(
            url: $data['url'],
            hasCustomCertificate: $data['has_custom_certificate'],
            pendingUpdateCount: $data['pending_update_count'],
            ipAddress: $data['ip_address'] ?? null,
            lastErrorDate: $data['last_error_date'] ?? null,
            lastErrorMessage: $data['last_error_message'] ?? null,
            lastSynchronizationErrorDate: $data['last_synchronization_error_date'] ?? null,
            maxConnections: $data['max_connections'] ?? null,
            allowedUpdates: $data['allowed_updates'] ?? null,
        );
    }

    public function denormalizeUser(array $data): Types\Interfaces\UserInterface
    {
        $requiredFields = [
            'id',
            'is_bot',
            'first_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class User missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUser(
            id: $data['id'],
            isBot: $data['is_bot'],
            firstName: $data['first_name'],
            lastName: $data['last_name'] ?? null,
            username: $data['username'] ?? null,
            languageCode: $data['language_code'] ?? null,
            isPremium: $data['is_premium'] ?? null,
            addedToAttachmentMenu: $data['added_to_attachment_menu'] ?? null,
            canJoinGroups: $data['can_join_groups'] ?? null,
            canReadAllGroupMessages: $data['can_read_all_group_messages'] ?? null,
            supportsInlineQueries: $data['supports_inline_queries'] ?? null,
            canConnectToBusiness: $data['can_connect_to_business'] ?? null,
            hasMainWebApp: $data['has_main_web_app'] ?? null,
        );
    }

    public function denormalizeChat(array $data): Types\Interfaces\ChatInterface
    {
        $requiredFields = [
            'id',
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Chat missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChat(
            id: $data['id'],
            type: $data['type'],
            title: $data['title'] ?? null,
            username: $data['username'] ?? null,
            firstName: $data['first_name'] ?? null,
            lastName: $data['last_name'] ?? null,
            isForum: $data['is_forum'] ?? null,
        );
    }

    public function denormalizeChatFullInfo(array $data): Types\Interfaces\ChatFullInfoInterface
    {
        $requiredFields = [
            'id',
            'type',
            'accent_color_id',
            'max_reaction_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatFullInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatFullInfo(
            id: $data['id'],
            type: $data['type'],
            accentColorId: $data['accent_color_id'],
            maxReactionCount: $data['max_reaction_count'],
            title: $data['title'] ?? null,
            username: $data['username'] ?? null,
            firstName: $data['first_name'] ?? null,
            lastName: $data['last_name'] ?? null,
            isForum: $data['is_forum'] ?? null,
            photo: isset($data['photo'])
                ? $this->denormalizeChatPhoto($data['photo'])
                : null,
            activeUsernames: $data['active_usernames'] ?? null,
            birthdate: isset($data['birthdate'])
                ? $this->denormalizeBirthdate($data['birthdate'])
                : null,
            businessIntro: isset($data['business_intro'])
                ? $this->denormalizeBusinessIntro($data['business_intro'])
                : null,
            businessLocation: isset($data['business_location'])
                ? $this->denormalizeBusinessLocation($data['business_location'])
                : null,
            businessOpeningHours: isset($data['business_opening_hours'])
                ? $this->denormalizeBusinessOpeningHours($data['business_opening_hours'])
                : null,
            personalChat: isset($data['personal_chat'])
                ? $this->denormalizeChat($data['personal_chat'])
                : null,
            availableReactions: isset($data['available_reactions'])
                ? array_map(fn (array $item) => $this->denormalizeReactionType($item), $data['available_reactions'])
                : null,
            backgroundCustomEmojiId: $data['background_custom_emoji_id'] ?? null,
            profileAccentColorId: $data['profile_accent_color_id'] ?? null,
            profileBackgroundCustomEmojiId: $data['profile_background_custom_emoji_id'] ?? null,
            emojiStatusCustomEmojiId: $data['emoji_status_custom_emoji_id'] ?? null,
            emojiStatusExpirationDate: $data['emoji_status_expiration_date'] ?? null,
            bio: $data['bio'] ?? null,
            hasPrivateForwards: $data['has_private_forwards'] ?? null,
            hasRestrictedVoiceAndVideoMessages: $data['has_restricted_voice_and_video_messages'] ?? null,
            joinToSendMessages: $data['join_to_send_messages'] ?? null,
            joinByRequest: $data['join_by_request'] ?? null,
            description: $data['description'] ?? null,
            inviteLink: $data['invite_link'] ?? null,
            pinnedMessage: isset($data['pinned_message'])
                ? $this->denormalizeMessage($data['pinned_message'])
                : null,
            permissions: isset($data['permissions'])
                ? $this->denormalizeChatPermissions($data['permissions'])
                : null,
            canSendPaidMedia: $data['can_send_paid_media'] ?? null,
            slowModeDelay: $data['slow_mode_delay'] ?? null,
            unrestrictBoostCount: $data['unrestrict_boost_count'] ?? null,
            messageAutoDeleteTime: $data['message_auto_delete_time'] ?? null,
            hasAggressiveAntiSpamEnabled: $data['has_aggressive_anti_spam_enabled'] ?? null,
            hasHiddenMembers: $data['has_hidden_members'] ?? null,
            hasProtectedContent: $data['has_protected_content'] ?? null,
            hasVisibleHistory: $data['has_visible_history'] ?? null,
            stickerSetName: $data['sticker_set_name'] ?? null,
            canSetStickerSet: $data['can_set_sticker_set'] ?? null,
            customEmojiStickerSetName: $data['custom_emoji_sticker_set_name'] ?? null,
            linkedChatId: $data['linked_chat_id'] ?? null,
            location: isset($data['location'])
                ? $this->denormalizeChatLocation($data['location'])
                : null,
        );
    }

    public function denormalizeMessage(array $data): Types\Interfaces\MessageInterface
    {
        $requiredFields = [
            'message_id',
            'date',
            'chat',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Message missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessage(
            messageId: $data['message_id'],
            date: $data['date'],
            chat: $this->denormalizeChat($data['chat']),
            messageThreadId: $data['message_thread_id'] ?? null,
            from: isset($data['from'])
                ? $this->denormalizeUser($data['from'])
                : null,
            senderChat: isset($data['sender_chat'])
                ? $this->denormalizeChat($data['sender_chat'])
                : null,
            senderBoostCount: $data['sender_boost_count'] ?? null,
            senderBusinessBot: isset($data['sender_business_bot'])
                ? $this->denormalizeUser($data['sender_business_bot'])
                : null,
            businessConnectionId: $data['business_connection_id'] ?? null,
            forwardOrigin: isset($data['forward_origin'])
                ? $this->denormalizeMessageOrigin($data['forward_origin'])
                : null,
            isTopicMessage: $data['is_topic_message'] ?? null,
            isAutomaticForward: $data['is_automatic_forward'] ?? null,
            replyToMessage: isset($data['reply_to_message'])
                ? $this->denormalizeMessage($data['reply_to_message'])
                : null,
            externalReply: isset($data['external_reply'])
                ? $this->denormalizeExternalReplyInfo($data['external_reply'])
                : null,
            quote: isset($data['quote'])
                ? $this->denormalizeTextQuote($data['quote'])
                : null,
            replyToStory: isset($data['reply_to_story'])
                ? $this->denormalizeStory($data['reply_to_story'])
                : null,
            viaBot: isset($data['via_bot'])
                ? $this->denormalizeUser($data['via_bot'])
                : null,
            editDate: $data['edit_date'] ?? null,
            hasProtectedContent: $data['has_protected_content'] ?? null,
            isFromOffline: $data['is_from_offline'] ?? null,
            mediaGroupId: $data['media_group_id'] ?? null,
            authorSignature: $data['author_signature'] ?? null,
            text: $data['text'] ?? null,
            entities: isset($data['entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['entities'])
                : null,
            linkPreviewOptions: isset($data['link_preview_options'])
                ? $this->denormalizeLinkPreviewOptions($data['link_preview_options'])
                : null,
            effectId: $data['effect_id'] ?? null,
            animation: isset($data['animation'])
                ? $this->denormalizeAnimation($data['animation'])
                : null,
            audio: isset($data['audio'])
                ? $this->denormalizeAudio($data['audio'])
                : null,
            document: isset($data['document'])
                ? $this->denormalizeDocument($data['document'])
                : null,
            paidMedia: isset($data['paid_media'])
                ? $this->denormalizePaidMediaInfo($data['paid_media'])
                : null,
            photo: isset($data['photo'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo'])
                : null,
            sticker: isset($data['sticker'])
                ? $this->denormalizeSticker($data['sticker'])
                : null,
            story: isset($data['story'])
                ? $this->denormalizeStory($data['story'])
                : null,
            video: isset($data['video'])
                ? $this->denormalizeVideo($data['video'])
                : null,
            videoNote: isset($data['video_note'])
                ? $this->denormalizeVideoNote($data['video_note'])
                : null,
            voice: isset($data['voice'])
                ? $this->denormalizeVoice($data['voice'])
                : null,
            caption: $data['caption'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            hasMediaSpoiler: $data['has_media_spoiler'] ?? null,
            contact: isset($data['contact'])
                ? $this->denormalizeContact($data['contact'])
                : null,
            dice: isset($data['dice'])
                ? $this->denormalizeDice($data['dice'])
                : null,
            game: isset($data['game'])
                ? $this->denormalizeGame($data['game'])
                : null,
            poll: isset($data['poll'])
                ? $this->denormalizePoll($data['poll'])
                : null,
            venue: isset($data['venue'])
                ? $this->denormalizeVenue($data['venue'])
                : null,
            location: isset($data['location'])
                ? $this->denormalizeLocation($data['location'])
                : null,
            newChatMembers: isset($data['new_chat_members'])
                ? array_map(fn (array $item) => $this->denormalizeUser($item), $data['new_chat_members'])
                : null,
            leftChatMember: isset($data['left_chat_member'])
                ? $this->denormalizeUser($data['left_chat_member'])
                : null,
            newChatTitle: $data['new_chat_title'] ?? null,
            newChatPhoto: isset($data['new_chat_photo'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['new_chat_photo'])
                : null,
            deleteChatPhoto: $data['delete_chat_photo'] ?? null,
            groupChatCreated: $data['group_chat_created'] ?? null,
            supergroupChatCreated: $data['supergroup_chat_created'] ?? null,
            channelChatCreated: $data['channel_chat_created'] ?? null,
            messageAutoDeleteTimerChanged: isset($data['message_auto_delete_timer_changed'])
                ? $this->denormalizeMessageAutoDeleteTimerChanged($data['message_auto_delete_timer_changed'])
                : null,
            migrateToChatId: $data['migrate_to_chat_id'] ?? null,
            migrateFromChatId: $data['migrate_from_chat_id'] ?? null,
            pinnedMessage: isset($data['pinned_message'])
                ? $this->denormalizeMaybeInaccessibleMessage($data['pinned_message'])
                : null,
            invoice: isset($data['invoice'])
                ? $this->denormalizeInvoice($data['invoice'])
                : null,
            successfulPayment: isset($data['successful_payment'])
                ? $this->denormalizeSuccessfulPayment($data['successful_payment'])
                : null,
            refundedPayment: isset($data['refunded_payment'])
                ? $this->denormalizeRefundedPayment($data['refunded_payment'])
                : null,
            usersShared: isset($data['users_shared'])
                ? $this->denormalizeUsersShared($data['users_shared'])
                : null,
            chatShared: isset($data['chat_shared'])
                ? $this->denormalizeChatShared($data['chat_shared'])
                : null,
            connectedWebsite: $data['connected_website'] ?? null,
            writeAccessAllowed: isset($data['write_access_allowed'])
                ? $this->denormalizeWriteAccessAllowed($data['write_access_allowed'])
                : null,
            passportData: isset($data['passport_data'])
                ? $this->denormalizePassportData($data['passport_data'])
                : null,
            proximityAlertTriggered: isset($data['proximity_alert_triggered'])
                ? $this->denormalizeProximityAlertTriggered($data['proximity_alert_triggered'])
                : null,
            boostAdded: isset($data['boost_added'])
                ? $this->denormalizeChatBoostAdded($data['boost_added'])
                : null,
            chatBackgroundSet: isset($data['chat_background_set'])
                ? $this->denormalizeChatBackground($data['chat_background_set'])
                : null,
            forumTopicCreated: isset($data['forum_topic_created'])
                ? $this->denormalizeForumTopicCreated($data['forum_topic_created'])
                : null,
            forumTopicEdited: isset($data['forum_topic_edited'])
                ? $this->denormalizeForumTopicEdited($data['forum_topic_edited'])
                : null,
            forumTopicClosed: isset($data['forum_topic_closed'])
                ? $this->denormalizeForumTopicClosed($data['forum_topic_closed'])
                : null,
            forumTopicReopened: isset($data['forum_topic_reopened'])
                ? $this->denormalizeForumTopicReopened($data['forum_topic_reopened'])
                : null,
            generalForumTopicHidden: isset($data['general_forum_topic_hidden'])
                ? $this->denormalizeGeneralForumTopicHidden($data['general_forum_topic_hidden'])
                : null,
            generalForumTopicUnhidden: isset($data['general_forum_topic_unhidden'])
                ? $this->denormalizeGeneralForumTopicUnhidden($data['general_forum_topic_unhidden'])
                : null,
            giveawayCreated: isset($data['giveaway_created'])
                ? $this->denormalizeGiveawayCreated($data['giveaway_created'])
                : null,
            giveaway: isset($data['giveaway'])
                ? $this->denormalizeGiveaway($data['giveaway'])
                : null,
            giveawayWinners: isset($data['giveaway_winners'])
                ? $this->denormalizeGiveawayWinners($data['giveaway_winners'])
                : null,
            giveawayCompleted: isset($data['giveaway_completed'])
                ? $this->denormalizeGiveawayCompleted($data['giveaway_completed'])
                : null,
            videoChatScheduled: isset($data['video_chat_scheduled'])
                ? $this->denormalizeVideoChatScheduled($data['video_chat_scheduled'])
                : null,
            videoChatStarted: isset($data['video_chat_started'])
                ? $this->denormalizeVideoChatStarted($data['video_chat_started'])
                : null,
            videoChatEnded: isset($data['video_chat_ended'])
                ? $this->denormalizeVideoChatEnded($data['video_chat_ended'])
                : null,
            videoChatParticipantsInvited: isset($data['video_chat_participants_invited'])
                ? $this->denormalizeVideoChatParticipantsInvited($data['video_chat_participants_invited'])
                : null,
            webAppData: isset($data['web_app_data'])
                ? $this->denormalizeWebAppData($data['web_app_data'])
                : null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
        );
    }

    public function denormalizeMessageId(array $data): Types\Interfaces\MessageIdInterface
    {
        $requiredFields = [
            'message_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageId missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageId(
            messageId: $data['message_id'],
        );
    }

    public function denormalizeInaccessibleMessage(array $data): Types\Interfaces\InaccessibleMessageInterface
    {
        $requiredFields = [
            'chat',
            'message_id',
            'date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InaccessibleMessage missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInaccessibleMessage(
            chat: $this->denormalizeChat($data['chat']),
            messageId: $data['message_id'],
            date: $data['date'],
        );
    }

    public function denormalizeMaybeInaccessibleMessage(array $data): Types\Interfaces\MaybeInaccessibleMessageInterface
    {
        if ($data['date'] === 0) {
            return $this->denormalizeInaccessibleMessage($data);
        } else {
            return $this->denormalizeMessage($data);
        }
    }

    public function denormalizeMessageEntity(array $data): Types\Interfaces\MessageEntityInterface
    {
        $requiredFields = [
            'type',
            'offset',
            'length',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageEntity missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageEntity(
            type: $data['type'],
            offset: $data['offset'],
            length: $data['length'],
            url: $data['url'] ?? null,
            user: isset($data['user'])
                ? $this->denormalizeUser($data['user'])
                : null,
            language: $data['language'] ?? null,
            customEmojiId: $data['custom_emoji_id'] ?? null,
        );
    }

    public function denormalizeTextQuote(array $data): Types\Interfaces\TextQuoteInterface
    {
        $requiredFields = [
            'text',
            'position',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TextQuote missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTextQuote(
            text: $data['text'],
            position: $data['position'],
            entities: isset($data['entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['entities'])
                : null,
            isManual: $data['is_manual'] ?? null,
        );
    }

    public function denormalizeExternalReplyInfo(array $data): Types\Interfaces\ExternalReplyInfoInterface
    {
        $requiredFields = [
            'origin',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ExternalReplyInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeExternalReplyInfo(
            origin: $this->denormalizeMessageOrigin($data['origin']),
            chat: isset($data['chat'])
                ? $this->denormalizeChat($data['chat'])
                : null,
            messageId: $data['message_id'] ?? null,
            linkPreviewOptions: isset($data['link_preview_options'])
                ? $this->denormalizeLinkPreviewOptions($data['link_preview_options'])
                : null,
            animation: isset($data['animation'])
                ? $this->denormalizeAnimation($data['animation'])
                : null,
            audio: isset($data['audio'])
                ? $this->denormalizeAudio($data['audio'])
                : null,
            document: isset($data['document'])
                ? $this->denormalizeDocument($data['document'])
                : null,
            paidMedia: isset($data['paid_media'])
                ? $this->denormalizePaidMediaInfo($data['paid_media'])
                : null,
            photo: isset($data['photo'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo'])
                : null,
            sticker: isset($data['sticker'])
                ? $this->denormalizeSticker($data['sticker'])
                : null,
            story: isset($data['story'])
                ? $this->denormalizeStory($data['story'])
                : null,
            video: isset($data['video'])
                ? $this->denormalizeVideo($data['video'])
                : null,
            videoNote: isset($data['video_note'])
                ? $this->denormalizeVideoNote($data['video_note'])
                : null,
            voice: isset($data['voice'])
                ? $this->denormalizeVoice($data['voice'])
                : null,
            hasMediaSpoiler: $data['has_media_spoiler'] ?? null,
            contact: isset($data['contact'])
                ? $this->denormalizeContact($data['contact'])
                : null,
            dice: isset($data['dice'])
                ? $this->denormalizeDice($data['dice'])
                : null,
            game: isset($data['game'])
                ? $this->denormalizeGame($data['game'])
                : null,
            giveaway: isset($data['giveaway'])
                ? $this->denormalizeGiveaway($data['giveaway'])
                : null,
            giveawayWinners: isset($data['giveaway_winners'])
                ? $this->denormalizeGiveawayWinners($data['giveaway_winners'])
                : null,
            invoice: isset($data['invoice'])
                ? $this->denormalizeInvoice($data['invoice'])
                : null,
            location: isset($data['location'])
                ? $this->denormalizeLocation($data['location'])
                : null,
            poll: isset($data['poll'])
                ? $this->denormalizePoll($data['poll'])
                : null,
            venue: isset($data['venue'])
                ? $this->denormalizeVenue($data['venue'])
                : null,
        );
    }

    public function denormalizeReplyParameters(array $data): Types\Interfaces\ReplyParametersInterface
    {
        $requiredFields = [
            'message_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReplyParameters missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReplyParameters(
            messageId: $data['message_id'],
            chatId: $data['chat_id'] ?? null,
            allowSendingWithoutReply: $data['allow_sending_without_reply'] ?? null,
            quote: $data['quote'] ?? null,
            quoteParseMode: $data['quote_parse_mode'] ?? null,
            quoteEntities: isset($data['quote_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['quote_entities'])
                : null,
            quotePosition: $data['quote_position'] ?? null,
        );
    }

    public function denormalizeMessageOrigin(array $data): Types\Interfaces\MessageOriginInterface
    {
        return match ($data['type']) {
            'user' => $this->denormalizeMessageOriginUser($data),
            'hidden_user' => $this->denormalizeMessageOriginHiddenUser($data),
            'chat' => $this->denormalizeMessageOriginChat($data),
            'channel' => $this->denormalizeMessageOriginChannel($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type "%s" given. Supported types are: "user", "hidden_user", "chat", "channel"', $data['type'])),
        };
    }

    public function denormalizeMessageOriginUser(array $data): Types\Interfaces\MessageOriginUserInterface
    {
        $requiredFields = [
            'type',
            'date',
            'sender_user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageOriginUser missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageOriginUser(
            type: $data['type'],
            date: $data['date'],
            senderUser: $this->denormalizeUser($data['sender_user']),
        );
    }

    public function denormalizeMessageOriginHiddenUser(array $data): Types\Interfaces\MessageOriginHiddenUserInterface
    {
        $requiredFields = [
            'type',
            'date',
            'sender_user_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageOriginHiddenUser missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageOriginHiddenUser(
            type: $data['type'],
            date: $data['date'],
            senderUserName: $data['sender_user_name'],
        );
    }

    public function denormalizeMessageOriginChat(array $data): Types\Interfaces\MessageOriginChatInterface
    {
        $requiredFields = [
            'type',
            'date',
            'sender_chat',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageOriginChat missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageOriginChat(
            type: $data['type'],
            date: $data['date'],
            senderChat: $this->denormalizeChat($data['sender_chat']),
            authorSignature: $data['author_signature'] ?? null,
        );
    }

    public function denormalizeMessageOriginChannel(array $data): Types\Interfaces\MessageOriginChannelInterface
    {
        $requiredFields = [
            'type',
            'date',
            'chat',
            'message_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageOriginChannel missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageOriginChannel(
            type: $data['type'],
            date: $data['date'],
            chat: $this->denormalizeChat($data['chat']),
            messageId: $data['message_id'],
            authorSignature: $data['author_signature'] ?? null,
        );
    }

    public function denormalizePhotoSize(array $data): Types\Interfaces\PhotoSizeInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'width',
            'height',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PhotoSize missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePhotoSize(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            width: $data['width'],
            height: $data['height'],
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeAnimation(array $data): Types\Interfaces\AnimationInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'width',
            'height',
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Animation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeAnimation(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            width: $data['width'],
            height: $data['height'],
            duration: $data['duration'],
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
            fileName: $data['file_name'] ?? null,
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeAudio(array $data): Types\Interfaces\AudioInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Audio missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeAudio(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            duration: $data['duration'],
            performer: $data['performer'] ?? null,
            title: $data['title'] ?? null,
            fileName: $data['file_name'] ?? null,
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
        );
    }

    public function denormalizeDocument(array $data): Types\Interfaces\DocumentInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Document missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeDocument(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
            fileName: $data['file_name'] ?? null,
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeStory(array $data): Types\Interfaces\StoryInterface
    {
        $requiredFields = [
            'chat',
            'id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Story missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStory(
            chat: $this->denormalizeChat($data['chat']),
            id: $data['id'],
        );
    }

    public function denormalizeVideo(array $data): Types\Interfaces\VideoInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'width',
            'height',
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Video missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVideo(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            width: $data['width'],
            height: $data['height'],
            duration: $data['duration'],
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
            fileName: $data['file_name'] ?? null,
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeVideoNote(array $data): Types\Interfaces\VideoNoteInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'length',
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class VideoNote missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVideoNote(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            length: $data['length'],
            duration: $data['duration'],
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeVoice(array $data): Types\Interfaces\VoiceInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Voice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVoice(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            duration: $data['duration'],
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizePaidMediaInfo(array $data): Types\Interfaces\PaidMediaInfoInterface
    {
        $requiredFields = [
            'star_count',
            'paid_media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMediaInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMediaInfo(
            starCount: $data['star_count'],
            paidMedia: array_map(fn (array $item) => $this->denormalizePaidMedia($item), $data['paid_media']),
        );
    }

    public function denormalizePaidMedia(array $data): Types\Interfaces\PaidMediaInterface
    {
        throw new \RuntimeException('class PaidMedia is abstract and not yet implemented');
    }

    public function denormalizePaidMediaPreview(array $data): Types\Interfaces\PaidMediaPreviewInterface
    {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMediaPreview missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMediaPreview(
            type: $data['type'],
            width: $data['width'] ?? null,
            height: $data['height'] ?? null,
            duration: $data['duration'] ?? null,
        );
    }

    public function denormalizePaidMediaPhoto(array $data): Types\Interfaces\PaidMediaPhotoInterface
    {
        $requiredFields = [
            'type',
            'photo',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMediaPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMediaPhoto(
            type: $data['type'],
            photo: array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo']),
        );
    }

    public function denormalizePaidMediaVideo(array $data): Types\Interfaces\PaidMediaVideoInterface
    {
        $requiredFields = [
            'type',
            'video',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMediaVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMediaVideo(
            type: $data['type'],
            video: $this->denormalizeVideo($data['video']),
        );
    }

    public function denormalizeContact(array $data): Types\Interfaces\ContactInterface
    {
        $requiredFields = [
            'phone_number',
            'first_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Contact missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeContact(
            phoneNumber: $data['phone_number'],
            firstName: $data['first_name'],
            lastName: $data['last_name'] ?? null,
            userId: $data['user_id'] ?? null,
            vcard: $data['vcard'] ?? null,
        );
    }

    public function denormalizeDice(array $data): Types\Interfaces\DiceInterface
    {
        $requiredFields = [
            'emoji',
            'value',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Dice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeDice(
            emoji: $data['emoji'],
            value: $data['value'],
        );
    }

    public function denormalizePollOption(array $data): Types\Interfaces\PollOptionInterface
    {
        $requiredFields = [
            'text',
            'voter_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PollOption missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePollOption(
            text: $data['text'],
            voterCount: $data['voter_count'],
            textEntities: isset($data['text_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['text_entities'])
                : null,
        );
    }

    public function denormalizeInputPollOption(array $data): Types\Interfaces\InputPollOptionInterface
    {
        $requiredFields = [
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputPollOption missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputPollOption(
            text: $data['text'],
            textParseMode: $data['text_parse_mode'] ?? null,
            textEntities: isset($data['text_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['text_entities'])
                : null,
        );
    }

    public function denormalizePollAnswer(array $data): Types\Interfaces\PollAnswerInterface
    {
        $requiredFields = [
            'poll_id',
            'option_ids',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PollAnswer missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePollAnswer(
            pollId: $data['poll_id'],
            optionIds: $data['option_ids'],
            voterChat: isset($data['voter_chat'])
                ? $this->denormalizeChat($data['voter_chat'])
                : null,
            user: isset($data['user'])
                ? $this->denormalizeUser($data['user'])
                : null,
        );
    }

    public function denormalizePoll(array $data): Types\Interfaces\PollInterface
    {
        $requiredFields = [
            'id',
            'question',
            'options',
            'total_voter_count',
            'is_closed',
            'is_anonymous',
            'type',
            'allows_multiple_answers',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Poll missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePoll(
            id: $data['id'],
            question: $data['question'],
            options: array_map(fn (array $item) => $this->denormalizePollOption($item), $data['options']),
            totalVoterCount: $data['total_voter_count'],
            isClosed: $data['is_closed'],
            isAnonymous: $data['is_anonymous'],
            type: $data['type'],
            allowsMultipleAnswers: $data['allows_multiple_answers'],
            questionEntities: isset($data['question_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['question_entities'])
                : null,
            correctOptionId: $data['correct_option_id'] ?? null,
            explanation: $data['explanation'] ?? null,
            explanationEntities: isset($data['explanation_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['explanation_entities'])
                : null,
            openPeriod: $data['open_period'] ?? null,
            closeDate: $data['close_date'] ?? null,
        );
    }

    public function denormalizeLocation(array $data): Types\Interfaces\LocationInterface
    {
        $requiredFields = [
            'latitude',
            'longitude',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Location missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeLocation(
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            horizontalAccuracy: $data['horizontal_accuracy'] ?? null,
            livePeriod: $data['live_period'] ?? null,
            heading: $data['heading'] ?? null,
            proximityAlertRadius: $data['proximity_alert_radius'] ?? null,
        );
    }

    public function denormalizeVenue(array $data): Types\Interfaces\VenueInterface
    {
        $requiredFields = [
            'location',
            'title',
            'address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Venue missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVenue(
            location: $this->denormalizeLocation($data['location']),
            title: $data['title'],
            address: $data['address'],
            foursquareId: $data['foursquare_id'] ?? null,
            foursquareType: $data['foursquare_type'] ?? null,
            googlePlaceId: $data['google_place_id'] ?? null,
            googlePlaceType: $data['google_place_type'] ?? null,
        );
    }

    public function denormalizeWebAppData(array $data): Types\Interfaces\WebAppDataInterface
    {
        $requiredFields = [
            'data',
            'button_text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class WebAppData missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeWebAppData(
            data: $data['data'],
            buttonText: $data['button_text'],
        );
    }

    public function denormalizeProximityAlertTriggered(array $data): Types\Interfaces\ProximityAlertTriggeredInterface
    {
        $requiredFields = [
            'traveler',
            'watcher',
            'distance',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ProximityAlertTriggered missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeProximityAlertTriggered(
            traveler: $this->denormalizeUser($data['traveler']),
            watcher: $this->denormalizeUser($data['watcher']),
            distance: $data['distance'],
        );
    }

    public function denormalizeMessageAutoDeleteTimerChanged(
        array $data,
    ): Types\Interfaces\MessageAutoDeleteTimerChangedInterface {
        $requiredFields = [
            'message_auto_delete_time',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageAutoDeleteTimerChanged missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageAutoDeleteTimerChanged(
            messageAutoDeleteTime: $data['message_auto_delete_time'],
        );
    }

    public function denormalizeChatBoostAdded(array $data): Types\Interfaces\ChatBoostAddedInterface
    {
        $requiredFields = [
            'boost_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostAdded missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostAdded(
            boostCount: $data['boost_count'],
        );
    }

    public function denormalizeBackgroundFill(array $data): Types\Interfaces\BackgroundFillInterface
    {
        throw new \RuntimeException('class BackgroundFill is abstract and not yet implemented');
    }

    public function denormalizeBackgroundFillSolid(array $data): Types\Interfaces\BackgroundFillSolidInterface
    {
        $requiredFields = [
            'type',
            'color',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundFillSolid missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundFillSolid(
            type: $data['type'],
            color: $data['color'],
        );
    }

    public function denormalizeBackgroundFillGradient(array $data): Types\Interfaces\BackgroundFillGradientInterface
    {
        $requiredFields = [
            'type',
            'top_color',
            'bottom_color',
            'rotation_angle',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundFillGradient missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundFillGradient(
            type: $data['type'],
            topColor: $data['top_color'],
            bottomColor: $data['bottom_color'],
            rotationAngle: $data['rotation_angle'],
        );
    }

    public function denormalizeBackgroundFillFreeformGradient(
        array $data,
    ): Types\Interfaces\BackgroundFillFreeformGradientInterface {
        $requiredFields = [
            'type',
            'colors',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundFillFreeformGradient missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundFillFreeformGradient(
            type: $data['type'],
            colors: $data['colors'],
        );
    }

    public function denormalizeBackgroundType(array $data): Types\Interfaces\BackgroundTypeInterface
    {
        throw new \RuntimeException('class BackgroundType is abstract and not yet implemented');
    }

    public function denormalizeBackgroundTypeFill(array $data): Types\Interfaces\BackgroundTypeFillInterface
    {
        $requiredFields = [
            'type',
            'fill',
            'dark_theme_dimming',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundTypeFill missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundTypeFill(
            type: $data['type'],
            fill: $this->denormalizeBackgroundFill($data['fill']),
            darkThemeDimming: $data['dark_theme_dimming'],
        );
    }

    public function denormalizeBackgroundTypeWallpaper(array $data): Types\Interfaces\BackgroundTypeWallpaperInterface
    {
        $requiredFields = [
            'type',
            'document',
            'dark_theme_dimming',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundTypeWallpaper missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundTypeWallpaper(
            type: $data['type'],
            document: $this->denormalizeDocument($data['document']),
            darkThemeDimming: $data['dark_theme_dimming'],
            isBlurred: $data['is_blurred'] ?? null,
            isMoving: $data['is_moving'] ?? null,
        );
    }

    public function denormalizeBackgroundTypePattern(array $data): Types\Interfaces\BackgroundTypePatternInterface
    {
        $requiredFields = [
            'type',
            'document',
            'fill',
            'intensity',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundTypePattern missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundTypePattern(
            type: $data['type'],
            document: $this->denormalizeDocument($data['document']),
            fill: $this->denormalizeBackgroundFill($data['fill']),
            intensity: $data['intensity'],
            isInverted: $data['is_inverted'] ?? null,
            isMoving: $data['is_moving'] ?? null,
        );
    }

    public function denormalizeBackgroundTypeChatTheme(array $data): Types\Interfaces\BackgroundTypeChatThemeInterface
    {
        $requiredFields = [
            'type',
            'theme_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BackgroundTypeChatTheme missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBackgroundTypeChatTheme(
            type: $data['type'],
            themeName: $data['theme_name'],
        );
    }

    public function denormalizeChatBackground(array $data): Types\Interfaces\ChatBackgroundInterface
    {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBackground missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBackground(
            type: $this->denormalizeBackgroundType($data['type']),
        );
    }

    public function denormalizeForumTopicCreated(array $data): Types\Interfaces\ForumTopicCreatedInterface
    {
        $requiredFields = [
            'name',
            'icon_color',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ForumTopicCreated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeForumTopicCreated(
            name: $data['name'],
            iconColor: $data['icon_color'],
            iconCustomEmojiId: $data['icon_custom_emoji_id'] ?? null,
        );
    }

    public function denormalizeForumTopicClosed(array $data): Types\Interfaces\ForumTopicClosedInterface
    {
        return $this->factory->makeForumTopicClosed();
    }

    public function denormalizeForumTopicEdited(array $data): Types\Interfaces\ForumTopicEditedInterface
    {
        return $this->factory->makeForumTopicEdited(
            name: $data['name'] ?? null,
            iconCustomEmojiId: $data['icon_custom_emoji_id'] ?? null,
        );
    }

    public function denormalizeForumTopicReopened(array $data): Types\Interfaces\ForumTopicReopenedInterface
    {
        return $this->factory->makeForumTopicReopened();
    }

    public function denormalizeGeneralForumTopicHidden(array $data): Types\Interfaces\GeneralForumTopicHiddenInterface
    {
        return $this->factory->makeGeneralForumTopicHidden();
    }

    public function denormalizeGeneralForumTopicUnhidden(
        array $data,
    ): Types\Interfaces\GeneralForumTopicUnhiddenInterface {
        return $this->factory->makeGeneralForumTopicUnhidden();
    }

    public function denormalizeSharedUser(array $data): Types\Interfaces\SharedUserInterface
    {
        $requiredFields = [
            'user_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class SharedUser missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeSharedUser(
            userId: $data['user_id'],
            firstName: $data['first_name'] ?? null,
            lastName: $data['last_name'] ?? null,
            username: $data['username'] ?? null,
            photo: isset($data['photo'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo'])
                : null,
        );
    }

    public function denormalizeUsersShared(array $data): Types\Interfaces\UsersSharedInterface
    {
        $requiredFields = [
            'request_id',
            'users',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UsersShared missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUsersShared(
            requestId: $data['request_id'],
            users: array_map(fn (array $item) => $this->denormalizeSharedUser($item), $data['users']),
        );
    }

    public function denormalizeChatShared(array $data): Types\Interfaces\ChatSharedInterface
    {
        $requiredFields = [
            'request_id',
            'chat_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatShared missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatShared(
            requestId: $data['request_id'],
            chatId: $data['chat_id'],
            title: $data['title'] ?? null,
            username: $data['username'] ?? null,
            photo: isset($data['photo'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo'])
                : null,
        );
    }

    public function denormalizeWriteAccessAllowed(array $data): Types\Interfaces\WriteAccessAllowedInterface
    {
        return $this->factory->makeWriteAccessAllowed(
            fromRequest: $data['from_request'] ?? null,
            webAppName: $data['web_app_name'] ?? null,
            fromAttachmentMenu: $data['from_attachment_menu'] ?? null,
        );
    }

    public function denormalizeVideoChatScheduled(array $data): Types\Interfaces\VideoChatScheduledInterface
    {
        $requiredFields = [
            'start_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class VideoChatScheduled missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVideoChatScheduled(
            startDate: $data['start_date'],
        );
    }

    public function denormalizeVideoChatStarted(array $data): Types\Interfaces\VideoChatStartedInterface
    {
        return $this->factory->makeVideoChatStarted();
    }

    public function denormalizeVideoChatEnded(array $data): Types\Interfaces\VideoChatEndedInterface
    {
        $requiredFields = [
            'duration',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class VideoChatEnded missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVideoChatEnded(
            duration: $data['duration'],
        );
    }

    public function denormalizeVideoChatParticipantsInvited(
        array $data,
    ): Types\Interfaces\VideoChatParticipantsInvitedInterface {
        $requiredFields = [
            'users',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class VideoChatParticipantsInvited missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeVideoChatParticipantsInvited(
            users: array_map(fn (array $item) => $this->denormalizeUser($item), $data['users']),
        );
    }

    public function denormalizeGiveawayCreated(array $data): Types\Interfaces\GiveawayCreatedInterface
    {
        return $this->factory->makeGiveawayCreated(
            prizeStarCount: $data['prize_star_count'] ?? null,
        );
    }

    public function denormalizeGiveaway(array $data): Types\Interfaces\GiveawayInterface
    {
        $requiredFields = [
            'chats',
            'winners_selection_date',
            'winner_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Giveaway missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGiveaway(
            chats: array_map(fn (array $item) => $this->denormalizeChat($item), $data['chats']),
            winnersSelectionDate: $data['winners_selection_date'],
            winnerCount: $data['winner_count'],
            onlyNewMembers: $data['only_new_members'] ?? null,
            hasPublicWinners: $data['has_public_winners'] ?? null,
            prizeDescription: $data['prize_description'] ?? null,
            countryCodes: $data['country_codes'] ?? null,
            prizeStarCount: $data['prize_star_count'] ?? null,
            premiumSubscriptionMonthCount: $data['premium_subscription_month_count'] ?? null,
        );
    }

    public function denormalizeGiveawayWinners(array $data): Types\Interfaces\GiveawayWinnersInterface
    {
        $requiredFields = [
            'chat',
            'giveaway_message_id',
            'winners_selection_date',
            'winner_count',
            'winners',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class GiveawayWinners missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGiveawayWinners(
            chat: $this->denormalizeChat($data['chat']),
            giveawayMessageId: $data['giveaway_message_id'],
            winnersSelectionDate: $data['winners_selection_date'],
            winnerCount: $data['winner_count'],
            winners: array_map(fn (array $item) => $this->denormalizeUser($item), $data['winners']),
            additionalChatCount: $data['additional_chat_count'] ?? null,
            prizeStarCount: $data['prize_star_count'] ?? null,
            premiumSubscriptionMonthCount: $data['premium_subscription_month_count'] ?? null,
            unclaimedPrizeCount: $data['unclaimed_prize_count'] ?? null,
            onlyNewMembers: $data['only_new_members'] ?? null,
            wasRefunded: $data['was_refunded'] ?? null,
            prizeDescription: $data['prize_description'] ?? null,
        );
    }

    public function denormalizeGiveawayCompleted(array $data): Types\Interfaces\GiveawayCompletedInterface
    {
        $requiredFields = [
            'winner_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class GiveawayCompleted missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGiveawayCompleted(
            winnerCount: $data['winner_count'],
            unclaimedPrizeCount: $data['unclaimed_prize_count'] ?? null,
            giveawayMessage: isset($data['giveaway_message'])
                ? $this->denormalizeMessage($data['giveaway_message'])
                : null,
            isStarGiveaway: $data['is_star_giveaway'] ?? null,
        );
    }

    public function denormalizeLinkPreviewOptions(array $data): Types\Interfaces\LinkPreviewOptionsInterface
    {
        return $this->factory->makeLinkPreviewOptions(
            isDisabled: $data['is_disabled'] ?? null,
            url: $data['url'] ?? null,
            preferSmallMedia: $data['prefer_small_media'] ?? null,
            preferLargeMedia: $data['prefer_large_media'] ?? null,
            showAboveText: $data['show_above_text'] ?? null,
        );
    }

    public function denormalizeUserProfilePhotos(array $data): Types\Interfaces\UserProfilePhotosInterface
    {
        $requiredFields = [
            'total_count',
            'photos',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UserProfilePhotos missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUserProfilePhotos(
            totalCount: $data['total_count'],
            photos: array_map(
                fn (array $item0) => array_map(
                    fn (array $item1) => $this->denormalizePhotoSize($item1),
                    $item0
                ),
                $data['photos']
            ),
        );
    }

    public function denormalizeFile(array $data): Types\Interfaces\FileInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class File missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeFile(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            fileSize: $data['file_size'] ?? null,
            filePath: $data['file_path'] ?? null,
        );
    }

    public function denormalizeWebAppInfo(array $data): Types\Interfaces\WebAppInfoInterface
    {
        $requiredFields = [
            'url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class WebAppInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeWebAppInfo(
            url: $data['url'],
        );
    }

    public function denormalizeReplyKeyboardMarkup(array $data): Types\Interfaces\ReplyKeyboardMarkupInterface
    {
        $requiredFields = [
            'keyboard',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReplyKeyboardMarkup missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReplyKeyboardMarkup(
            keyboard: array_map(
                fn (array $item0) => array_map(
                    fn (array $item1) => $this->denormalizeKeyboardButton($item1),
                    $item0
                ),
                $data['keyboard']
            ),
            isPersistent: $data['is_persistent'] ?? null,
            resizeKeyboard: $data['resize_keyboard'] ?? null,
            oneTimeKeyboard: $data['one_time_keyboard'] ?? null,
            inputFieldPlaceholder: $data['input_field_placeholder'] ?? null,
            selective: $data['selective'] ?? null,
        );
    }

    public function denormalizeKeyboardButton(array $data): Types\Interfaces\KeyboardButtonInterface
    {
        $requiredFields = [
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class KeyboardButton missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeKeyboardButton(
            text: $data['text'],
            requestUsers: isset($data['request_users'])
                ? $this->denormalizeKeyboardButtonRequestUsers($data['request_users'])
                : null,
            requestChat: isset($data['request_chat'])
                ? $this->denormalizeKeyboardButtonRequestChat($data['request_chat'])
                : null,
            requestContact: $data['request_contact'] ?? null,
            requestLocation: $data['request_location'] ?? null,
            requestPoll: isset($data['request_poll'])
                ? $this->denormalizeKeyboardButtonPollType($data['request_poll'])
                : null,
            webApp: isset($data['web_app'])
                ? $this->denormalizeWebAppInfo($data['web_app'])
                : null,
        );
    }

    public function denormalizeKeyboardButtonRequestUsers(
        array $data,
    ): Types\Interfaces\KeyboardButtonRequestUsersInterface {
        $requiredFields = [
            'request_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class KeyboardButtonRequestUsers missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeKeyboardButtonRequestUsers(
            requestId: $data['request_id'],
            userIsBot: $data['user_is_bot'] ?? null,
            userIsPremium: $data['user_is_premium'] ?? null,
            maxQuantity: $data['max_quantity'] ?? null,
            requestName: $data['request_name'] ?? null,
            requestUsername: $data['request_username'] ?? null,
            requestPhoto: $data['request_photo'] ?? null,
        );
    }

    public function denormalizeKeyboardButtonRequestChat(
        array $data,
    ): Types\Interfaces\KeyboardButtonRequestChatInterface {
        $requiredFields = [
            'request_id',
            'chat_is_channel',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class KeyboardButtonRequestChat missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeKeyboardButtonRequestChat(
            requestId: $data['request_id'],
            chatIsChannel: $data['chat_is_channel'],
            chatIsForum: $data['chat_is_forum'] ?? null,
            chatHasUsername: $data['chat_has_username'] ?? null,
            chatIsCreated: $data['chat_is_created'] ?? null,
            userAdministratorRights: isset($data['user_administrator_rights'])
                ? $this->denormalizeChatAdministratorRights($data['user_administrator_rights'])
                : null,
            botAdministratorRights: isset($data['bot_administrator_rights'])
                ? $this->denormalizeChatAdministratorRights($data['bot_administrator_rights'])
                : null,
            botIsMember: $data['bot_is_member'] ?? null,
            requestTitle: $data['request_title'] ?? null,
            requestUsername: $data['request_username'] ?? null,
            requestPhoto: $data['request_photo'] ?? null,
        );
    }

    public function denormalizeKeyboardButtonPollType(array $data): Types\Interfaces\KeyboardButtonPollTypeInterface
    {
        return $this->factory->makeKeyboardButtonPollType(
            type: $data['type'] ?? null,
        );
    }

    public function denormalizeReplyKeyboardRemove(array $data): Types\Interfaces\ReplyKeyboardRemoveInterface
    {
        return $this->factory->makeReplyKeyboardRemove(
            removeKeyboard: $data['remove_keyboard'] ?? true,
            selective: $data['selective'] ?? null,
        );
    }

    public function denormalizeInlineKeyboardMarkup(array $data): Types\Interfaces\InlineKeyboardMarkupInterface
    {
        $requiredFields = [
            'inline_keyboard',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineKeyboardMarkup missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineKeyboardMarkup(
            inlineKeyboard: array_map(
                fn (array $item0) => array_map(
                    fn (array $item1) => $this->denormalizeInlineKeyboardButton($item1),
                    $item0
                ),
                $data['inline_keyboard']
            ),
        );
    }

    public function denormalizeInlineKeyboardButton(array $data): Types\Interfaces\InlineKeyboardButtonInterface
    {
        $requiredFields = [
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineKeyboardButton missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineKeyboardButton(
            text: $data['text'],
            url: $data['url'] ?? null,
            callbackData: $data['callback_data'] ?? null,
            webApp: isset($data['web_app'])
                ? $this->denormalizeWebAppInfo($data['web_app'])
                : null,
            loginUrl: isset($data['login_url'])
                ? $this->denormalizeLoginUrl($data['login_url'])
                : null,
            switchInlineQuery: $data['switch_inline_query'] ?? null,
            switchInlineQueryCurrentChat: $data['switch_inline_query_current_chat'] ?? null,
            switchInlineQueryChosenChat: isset($data['switch_inline_query_chosen_chat'])
                ? $this->denormalizeSwitchInlineQueryChosenChat($data['switch_inline_query_chosen_chat'])
                : null,
            copyText: isset($data['copy_text'])
                ? $this->denormalizeCopyTextButton($data['copy_text'])
                : null,
            callbackGame: isset($data['callback_game'])
                ? $this->denormalizeCallbackGame($data['callback_game'])
                : null,
            pay: $data['pay'] ?? null,
        );
    }

    public function denormalizeLoginUrl(array $data): Types\Interfaces\LoginUrlInterface
    {
        $requiredFields = [
            'url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class LoginUrl missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeLoginUrl(
            url: $data['url'],
            forwardText: $data['forward_text'] ?? null,
            botUsername: $data['bot_username'] ?? null,
            requestWriteAccess: $data['request_write_access'] ?? null,
        );
    }

    public function denormalizeSwitchInlineQueryChosenChat(
        array $data,
    ): Types\Interfaces\SwitchInlineQueryChosenChatInterface {
        return $this->factory->makeSwitchInlineQueryChosenChat(
            query: $data['query'] ?? null,
            allowUserChats: $data['allow_user_chats'] ?? null,
            allowBotChats: $data['allow_bot_chats'] ?? null,
            allowGroupChats: $data['allow_group_chats'] ?? null,
            allowChannelChats: $data['allow_channel_chats'] ?? null,
        );
    }

    public function denormalizeCopyTextButton(array $data): Types\Interfaces\CopyTextButtonInterface
    {
        $requiredFields = [
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class CopyTextButton missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeCopyTextButton(
            text: $data['text'],
        );
    }

    public function denormalizeCallbackQuery(array $data): Types\Interfaces\CallbackQueryInterface
    {
        $requiredFields = [
            'id',
            'from',
            'chat_instance',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class CallbackQuery missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeCallbackQuery(
            id: $data['id'],
            from: $this->denormalizeUser($data['from']),
            chatInstance: $data['chat_instance'],
            message: isset($data['message'])
                ? $this->denormalizeMaybeInaccessibleMessage($data['message'])
                : null,
            inlineMessageId: $data['inline_message_id'] ?? null,
            data: $data['data'] ?? null,
            gameShortName: $data['game_short_name'] ?? null,
        );
    }

    public function denormalizeForceReply(array $data): Types\Interfaces\ForceReplyInterface
    {
        return $this->factory->makeForceReply(
            forceReply: $data['force_reply'] ?? true,
            inputFieldPlaceholder: $data['input_field_placeholder'] ?? null,
            selective: $data['selective'] ?? null,
        );
    }

    public function denormalizeChatPhoto(array $data): Types\Interfaces\ChatPhotoInterface
    {
        $requiredFields = [
            'small_file_id',
            'small_file_unique_id',
            'big_file_id',
            'big_file_unique_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatPhoto(
            smallFileId: $data['small_file_id'],
            smallFileUniqueId: $data['small_file_unique_id'],
            bigFileId: $data['big_file_id'],
            bigFileUniqueId: $data['big_file_unique_id'],
        );
    }

    public function denormalizeChatInviteLink(array $data): Types\Interfaces\ChatInviteLinkInterface
    {
        $requiredFields = [
            'invite_link',
            'creator',
            'creates_join_request',
            'is_primary',
            'is_revoked',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatInviteLink missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatInviteLink(
            inviteLink: $data['invite_link'],
            creator: $this->denormalizeUser($data['creator']),
            createsJoinRequest: $data['creates_join_request'],
            isPrimary: $data['is_primary'],
            isRevoked: $data['is_revoked'],
            name: $data['name'] ?? null,
            expireDate: $data['expire_date'] ?? null,
            memberLimit: $data['member_limit'] ?? null,
            pendingJoinRequestCount: $data['pending_join_request_count'] ?? null,
            subscriptionPeriod: $data['subscription_period'] ?? null,
            subscriptionPrice: $data['subscription_price'] ?? null,
        );
    }

    public function denormalizeChatAdministratorRights(array $data): Types\Interfaces\ChatAdministratorRightsInterface
    {
        $requiredFields = [
            'is_anonymous',
            'can_manage_chat',
            'can_delete_messages',
            'can_manage_video_chats',
            'can_restrict_members',
            'can_promote_members',
            'can_change_info',
            'can_invite_users',
            'can_post_stories',
            'can_edit_stories',
            'can_delete_stories',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatAdministratorRights missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatAdministratorRights(
            isAnonymous: $data['is_anonymous'],
            canManageChat: $data['can_manage_chat'],
            canDeleteMessages: $data['can_delete_messages'],
            canManageVideoChats: $data['can_manage_video_chats'],
            canRestrictMembers: $data['can_restrict_members'],
            canPromoteMembers: $data['can_promote_members'],
            canChangeInfo: $data['can_change_info'],
            canInviteUsers: $data['can_invite_users'],
            canPostStories: $data['can_post_stories'],
            canEditStories: $data['can_edit_stories'],
            canDeleteStories: $data['can_delete_stories'],
            canPostMessages: $data['can_post_messages'] ?? null,
            canEditMessages: $data['can_edit_messages'] ?? null,
            canPinMessages: $data['can_pin_messages'] ?? null,
            canManageTopics: $data['can_manage_topics'] ?? null,
        );
    }

    public function denormalizeChatMemberUpdated(array $data): Types\Interfaces\ChatMemberUpdatedInterface
    {
        $requiredFields = [
            'chat',
            'from',
            'date',
            'old_chat_member',
            'new_chat_member',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberUpdated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberUpdated(
            chat: $this->denormalizeChat($data['chat']),
            from: $this->denormalizeUser($data['from']),
            date: $data['date'],
            oldChatMember: $this->denormalizeChatMember($data['old_chat_member']),
            newChatMember: $this->denormalizeChatMember($data['new_chat_member']),
            inviteLink: isset($data['invite_link'])
                ? $this->denormalizeChatInviteLink($data['invite_link'])
                : null,
            viaJoinRequest: $data['via_join_request'] ?? null,
            viaChatFolderInviteLink: $data['via_chat_folder_invite_link'] ?? null,
        );
    }

    public function denormalizeChatMember(array $data): Types\Interfaces\ChatMemberInterface
    {
        return match ($data['status']) {
            'creator' => $this->denormalizeChatMemberOwner($data),
            'administrator' => $this->denormalizeChatMemberAdministrator($data),
            'member' => $this->denormalizeChatMemberMember($data),
            'restricted' => $this->denormalizeChatMemberRestricted($data),
            'left' => $this->denormalizeChatMemberLeft($data),
            'kicked' => $this->denormalizeChatMemberBanned($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid status value: %s', $data['status'])),
        };
    }

    public function denormalizeChatMemberOwner(array $data): Types\Interfaces\ChatMemberOwnerInterface
    {
        $requiredFields = [
            'status',
            'user',
            'is_anonymous',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberOwner missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberOwner(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
            isAnonymous: $data['is_anonymous'],
            customTitle: $data['custom_title'] ?? null,
        );
    }

    public function denormalizeChatMemberAdministrator(array $data): Types\Interfaces\ChatMemberAdministratorInterface
    {
        $requiredFields = [
            'status',
            'user',
            'can_be_edited',
            'is_anonymous',
            'can_manage_chat',
            'can_delete_messages',
            'can_manage_video_chats',
            'can_restrict_members',
            'can_promote_members',
            'can_change_info',
            'can_invite_users',
            'can_post_stories',
            'can_edit_stories',
            'can_delete_stories',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberAdministrator missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberAdministrator(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
            canBeEdited: $data['can_be_edited'],
            isAnonymous: $data['is_anonymous'],
            canManageChat: $data['can_manage_chat'],
            canDeleteMessages: $data['can_delete_messages'],
            canManageVideoChats: $data['can_manage_video_chats'],
            canRestrictMembers: $data['can_restrict_members'],
            canPromoteMembers: $data['can_promote_members'],
            canChangeInfo: $data['can_change_info'],
            canInviteUsers: $data['can_invite_users'],
            canPostStories: $data['can_post_stories'],
            canEditStories: $data['can_edit_stories'],
            canDeleteStories: $data['can_delete_stories'],
            canPostMessages: $data['can_post_messages'] ?? null,
            canEditMessages: $data['can_edit_messages'] ?? null,
            canPinMessages: $data['can_pin_messages'] ?? null,
            canManageTopics: $data['can_manage_topics'] ?? null,
            customTitle: $data['custom_title'] ?? null,
        );
    }

    public function denormalizeChatMemberMember(array $data): Types\Interfaces\ChatMemberMemberInterface
    {
        $requiredFields = [
            'status',
            'user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberMember missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberMember(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
            untilDate: $data['until_date'] ?? null,
        );
    }

    public function denormalizeChatMemberRestricted(array $data): Types\Interfaces\ChatMemberRestrictedInterface
    {
        $requiredFields = [
            'status',
            'user',
            'is_member',
            'can_send_messages',
            'can_send_audios',
            'can_send_documents',
            'can_send_photos',
            'can_send_videos',
            'can_send_video_notes',
            'can_send_voice_notes',
            'can_send_polls',
            'can_send_other_messages',
            'can_add_web_page_previews',
            'can_change_info',
            'can_invite_users',
            'can_pin_messages',
            'can_manage_topics',
            'until_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberRestricted missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberRestricted(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
            isMember: $data['is_member'],
            canSendMessages: $data['can_send_messages'],
            canSendAudios: $data['can_send_audios'],
            canSendDocuments: $data['can_send_documents'],
            canSendPhotos: $data['can_send_photos'],
            canSendVideos: $data['can_send_videos'],
            canSendVideoNotes: $data['can_send_video_notes'],
            canSendVoiceNotes: $data['can_send_voice_notes'],
            canSendPolls: $data['can_send_polls'],
            canSendOtherMessages: $data['can_send_other_messages'],
            canAddWebPagePreviews: $data['can_add_web_page_previews'],
            canChangeInfo: $data['can_change_info'],
            canInviteUsers: $data['can_invite_users'],
            canPinMessages: $data['can_pin_messages'],
            canManageTopics: $data['can_manage_topics'],
            untilDate: $data['until_date'],
        );
    }

    public function denormalizeChatMemberLeft(array $data): Types\Interfaces\ChatMemberLeftInterface
    {
        $requiredFields = [
            'status',
            'user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberLeft missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberLeft(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
        );
    }

    public function denormalizeChatMemberBanned(array $data): Types\Interfaces\ChatMemberBannedInterface
    {
        $requiredFields = [
            'status',
            'user',
            'until_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatMemberBanned missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatMemberBanned(
            status: $data['status'],
            user: $this->denormalizeUser($data['user']),
            untilDate: $data['until_date'],
        );
    }

    public function denormalizeChatJoinRequest(array $data): Types\Interfaces\ChatJoinRequestInterface
    {
        $requiredFields = [
            'chat',
            'from',
            'user_chat_id',
            'date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatJoinRequest missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatJoinRequest(
            chat: $this->denormalizeChat($data['chat']),
            from: $this->denormalizeUser($data['from']),
            userChatId: $data['user_chat_id'],
            date: $data['date'],
            bio: $data['bio'] ?? null,
            inviteLink: isset($data['invite_link'])
                ? $this->denormalizeChatInviteLink($data['invite_link'])
                : null,
        );
    }

    public function denormalizeChatPermissions(array $data): Types\Interfaces\ChatPermissionsInterface
    {
        return $this->factory->makeChatPermissions(
            canSendMessages: $data['can_send_messages'] ?? null,
            canSendAudios: $data['can_send_audios'] ?? null,
            canSendDocuments: $data['can_send_documents'] ?? null,
            canSendPhotos: $data['can_send_photos'] ?? null,
            canSendVideos: $data['can_send_videos'] ?? null,
            canSendVideoNotes: $data['can_send_video_notes'] ?? null,
            canSendVoiceNotes: $data['can_send_voice_notes'] ?? null,
            canSendPolls: $data['can_send_polls'] ?? null,
            canSendOtherMessages: $data['can_send_other_messages'] ?? null,
            canAddWebPagePreviews: $data['can_add_web_page_previews'] ?? null,
            canChangeInfo: $data['can_change_info'] ?? null,
            canInviteUsers: $data['can_invite_users'] ?? null,
            canPinMessages: $data['can_pin_messages'] ?? null,
            canManageTopics: $data['can_manage_topics'] ?? null,
        );
    }

    public function denormalizeBirthdate(array $data): Types\Interfaces\BirthdateInterface
    {
        $requiredFields = [
            'day',
            'month',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Birthdate missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBirthdate(
            day: $data['day'],
            month: $data['month'],
            year: $data['year'] ?? null,
        );
    }

    public function denormalizeBusinessIntro(array $data): Types\Interfaces\BusinessIntroInterface
    {
        return $this->factory->makeBusinessIntro(
            title: $data['title'] ?? null,
            message: $data['message'] ?? null,
            sticker: isset($data['sticker'])
                ? $this->denormalizeSticker($data['sticker'])
                : null,
        );
    }

    public function denormalizeBusinessLocation(array $data): Types\Interfaces\BusinessLocationInterface
    {
        $requiredFields = [
            'address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BusinessLocation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBusinessLocation(
            address: $data['address'],
            location: isset($data['location'])
                ? $this->denormalizeLocation($data['location'])
                : null,
        );
    }

    public function denormalizeBusinessOpeningHoursInterval(
        array $data,
    ): Types\Interfaces\BusinessOpeningHoursIntervalInterface {
        $requiredFields = [
            'opening_minute',
            'closing_minute',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BusinessOpeningHoursInterval missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBusinessOpeningHoursInterval(
            openingMinute: $data['opening_minute'],
            closingMinute: $data['closing_minute'],
        );
    }

    public function denormalizeBusinessOpeningHours(array $data): Types\Interfaces\BusinessOpeningHoursInterface
    {
        $requiredFields = [
            'time_zone_name',
            'opening_hours',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BusinessOpeningHours missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBusinessOpeningHours(
            timeZoneName: $data['time_zone_name'],
            openingHours: array_map(fn (array $item) => $this->denormalizeBusinessOpeningHoursInterval($item), $data['opening_hours']),
        );
    }

    public function denormalizeChatLocation(array $data): Types\Interfaces\ChatLocationInterface
    {
        $requiredFields = [
            'location',
            'address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatLocation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatLocation(
            location: $this->denormalizeLocation($data['location']),
            address: $data['address'],
        );
    }

    public function denormalizeReactionType(array $data): Types\Interfaces\ReactionTypeInterface
    {
        return match ($data['type']) {
            'emoji' => $this->denormalizeReactionTypeEmoji($data),
            'custom_emoji' => $this->denormalizeReactionTypeCustomEmoji($data),
            'paid' => $this->denormalizeReactionTypePaid($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for ReactionType: %s', $data['type'])),
        };
    }

    public function denormalizeReactionTypeEmoji(array $data): Types\Interfaces\ReactionTypeEmojiInterface
    {
        $requiredFields = [
            'type',
            'emoji',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReactionTypeEmoji missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReactionTypeEmoji(
            type: $data['type'],
            emoji: $data['emoji'],
        );
    }

    public function denormalizeReactionTypeCustomEmoji(array $data): Types\Interfaces\ReactionTypeCustomEmojiInterface
    {
        $requiredFields = [
            'type',
            'custom_emoji_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReactionTypeCustomEmoji missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReactionTypeCustomEmoji(
            type: $data['type'],
            customEmojiId: $data['custom_emoji_id'],
        );
    }

    public function denormalizeReactionTypePaid(array $data): Types\Interfaces\ReactionTypePaidInterface
    {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReactionTypePaid missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReactionTypePaid(
            type: $data['type'],
        );
    }

    public function denormalizeReactionCount(array $data): Types\Interfaces\ReactionCountInterface
    {
        $requiredFields = [
            'type',
            'total_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ReactionCount missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeReactionCount(
            type: $this->denormalizeReactionType($data['type']),
            totalCount: $data['total_count'],
        );
    }

    public function denormalizeMessageReactionUpdated(array $data): Types\Interfaces\MessageReactionUpdatedInterface
    {
        $requiredFields = [
            'chat',
            'message_id',
            'date',
            'old_reaction',
            'new_reaction',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageReactionUpdated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageReactionUpdated(
            chat: $this->denormalizeChat($data['chat']),
            messageId: $data['message_id'],
            date: $data['date'],
            oldReaction: array_map(fn (array $item) => $this->denormalizeReactionType($item), $data['old_reaction']),
            newReaction: array_map(fn (array $item) => $this->denormalizeReactionType($item), $data['new_reaction']),
            user: isset($data['user'])
                ? $this->denormalizeUser($data['user'])
                : null,
            actorChat: isset($data['actor_chat'])
                ? $this->denormalizeChat($data['actor_chat'])
                : null,
        );
    }

    public function denormalizeMessageReactionCountUpdated(
        array $data,
    ): Types\Interfaces\MessageReactionCountUpdatedInterface {
        $requiredFields = [
            'chat',
            'message_id',
            'date',
            'reactions',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MessageReactionCountUpdated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMessageReactionCountUpdated(
            chat: $this->denormalizeChat($data['chat']),
            messageId: $data['message_id'],
            date: $data['date'],
            reactions: array_map(fn (array $item) => $this->denormalizeReactionCount($item), $data['reactions']),
        );
    }

    public function denormalizeForumTopic(array $data): Types\Interfaces\ForumTopicInterface
    {
        $requiredFields = [
            'message_thread_id',
            'name',
            'icon_color',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ForumTopic missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeForumTopic(
            messageThreadId: $data['message_thread_id'],
            name: $data['name'],
            iconColor: $data['icon_color'],
            iconCustomEmojiId: $data['icon_custom_emoji_id'] ?? null,
        );
    }

    public function denormalizeBotCommand(array $data): Types\Interfaces\BotCommandInterface
    {
        $requiredFields = [
            'command',
            'description',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotCommand missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotCommand(
            command: $data['command'],
            description: $data['description'],
        );
    }

    public function denormalizeBotCommandScope(array $data): Types\Interfaces\BotCommandScopeInterface
    {
        throw new \RuntimeException('class BotCommandScope is abstract and not yet implemented');
    }

    public function denormalizeBotCommandScopeDefault(array $data): Types\Interfaces\BotCommandScopeDefaultInterface
    {
        return $this->factory->makeBotCommandScopeDefault(
            type: $data['type'] ?? 'default',
        );
    }

    public function denormalizeBotCommandScopeAllPrivateChats(
        array $data,
    ): Types\Interfaces\BotCommandScopeAllPrivateChatsInterface {
        return $this->factory->makeBotCommandScopeAllPrivateChats(
            type: $data['type'] ?? 'all_private_chats',
        );
    }

    public function denormalizeBotCommandScopeAllGroupChats(
        array $data,
    ): Types\Interfaces\BotCommandScopeAllGroupChatsInterface {
        return $this->factory->makeBotCommandScopeAllGroupChats(
            type: $data['type'] ?? 'all_group_chats',
        );
    }

    public function denormalizeBotCommandScopeAllChatAdministrators(
        array $data,
    ): Types\Interfaces\BotCommandScopeAllChatAdministratorsInterface {
        return $this->factory->makeBotCommandScopeAllChatAdministrators(
            type: $data['type'] ?? 'all_chat_administrators',
        );
    }

    public function denormalizeBotCommandScopeChat(array $data): Types\Interfaces\BotCommandScopeChatInterface
    {
        $requiredFields = [
            'chat_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotCommandScopeChat missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotCommandScopeChat(
            chatId: $data['chat_id'],
            type: $data['type'] ?? 'chat',
        );
    }

    public function denormalizeBotCommandScopeChatAdministrators(
        array $data,
    ): Types\Interfaces\BotCommandScopeChatAdministratorsInterface {
        $requiredFields = [
            'chat_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotCommandScopeChatAdministrators missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotCommandScopeChatAdministrators(
            chatId: $data['chat_id'],
            type: $data['type'] ?? 'chat_administrators',
        );
    }

    public function denormalizeBotCommandScopeChatMember(
        array $data,
    ): Types\Interfaces\BotCommandScopeChatMemberInterface {
        $requiredFields = [
            'chat_id',
            'user_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotCommandScopeChatMember missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotCommandScopeChatMember(
            chatId: $data['chat_id'],
            userId: $data['user_id'],
            type: $data['type'] ?? 'chat_member',
        );
    }

    public function denormalizeBotName(array $data): Types\Interfaces\BotNameInterface
    {
        $requiredFields = [
            'name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotName missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotName(
            name: $data['name'],
        );
    }

    public function denormalizeBotDescription(array $data): Types\Interfaces\BotDescriptionInterface
    {
        $requiredFields = [
            'description',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotDescription missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotDescription(
            description: $data['description'],
        );
    }

    public function denormalizeBotShortDescription(array $data): Types\Interfaces\BotShortDescriptionInterface
    {
        $requiredFields = [
            'short_description',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BotShortDescription missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotShortDescription(
            shortDescription: $data['short_description'],
        );
    }

    public function denormalizeMenuButton(array $data): Types\Interfaces\MenuButtonInterface
    {
        throw new \RuntimeException('class MenuButton is abstract and not yet implemented');
    }

    public function denormalizeMenuButtonCommands(array $data): Types\Interfaces\MenuButtonCommandsInterface
    {
        return $this->factory->makeMenuButtonCommands(
            type: $data['type'] ?? 'commands',
        );
    }

    public function denormalizeMenuButtonWebApp(array $data): Types\Interfaces\MenuButtonWebAppInterface
    {
        $requiredFields = [
            'text',
            'web_app',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MenuButtonWebApp missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMenuButtonWebApp(
            text: $data['text'],
            webApp: $this->denormalizeWebAppInfo($data['web_app']),
            type: $data['type'] ?? 'web_app',
        );
    }

    public function denormalizeMenuButtonDefault(array $data): Types\Interfaces\MenuButtonDefaultInterface
    {
        return $this->factory->makeMenuButtonDefault(
            type: $data['type'] ?? 'default',
        );
    }

    public function denormalizeChatBoostSource(array $data): Types\Interfaces\ChatBoostSourceInterface
    {
        return match ($data['source']) {
            'premium' => $this->denormalizeChatBoostSourcePremium($data),
            'gift_code' => $this->denormalizeChatBoostSourceGiftCode($data),
            'giveaway' => $this->denormalizeChatBoostSourceGiveaway($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid source value for ChatBoostSource: %s', $data['source'])),
        };
    }

    public function denormalizeChatBoostSourcePremium(array $data): Types\Interfaces\ChatBoostSourcePremiumInterface
    {
        $requiredFields = [
            'source',
            'user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostSourcePremium missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostSourcePremium(
            source: $data['source'],
            user: $this->denormalizeUser($data['user']),
        );
    }

    public function denormalizeChatBoostSourceGiftCode(array $data): Types\Interfaces\ChatBoostSourceGiftCodeInterface
    {
        $requiredFields = [
            'source',
            'user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostSourceGiftCode missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostSourceGiftCode(
            source: $data['source'],
            user: $this->denormalizeUser($data['user']),
        );
    }

    public function denormalizeChatBoostSourceGiveaway(array $data): Types\Interfaces\ChatBoostSourceGiveawayInterface
    {
        $requiredFields = [
            'source',
            'giveaway_message_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostSourceGiveaway missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostSourceGiveaway(
            source: $data['source'],
            giveawayMessageId: $data['giveaway_message_id'],
            user: isset($data['user'])
                ? $this->denormalizeUser($data['user'])
                : null,
            prizeStarCount: $data['prize_star_count'] ?? null,
            isUnclaimed: $data['is_unclaimed'] ?? null,
        );
    }

    public function denormalizeChatBoost(array $data): Types\Interfaces\ChatBoostInterface
    {
        $requiredFields = [
            'boost_id',
            'add_date',
            'expiration_date',
            'source',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoost missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoost(
            boostId: $data['boost_id'],
            addDate: $data['add_date'],
            expirationDate: $data['expiration_date'],
            source: $this->denormalizeChatBoostSource($data['source']),
        );
    }

    public function denormalizeChatBoostUpdated(array $data): Types\Interfaces\ChatBoostUpdatedInterface
    {
        $requiredFields = [
            'chat',
            'boost',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostUpdated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostUpdated(
            chat: $this->denormalizeChat($data['chat']),
            boost: $this->denormalizeChatBoost($data['boost']),
        );
    }

    public function denormalizeChatBoostRemoved(array $data): Types\Interfaces\ChatBoostRemovedInterface
    {
        $requiredFields = [
            'chat',
            'boost_id',
            'remove_date',
            'source',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChatBoostRemoved missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChatBoostRemoved(
            chat: $this->denormalizeChat($data['chat']),
            boostId: $data['boost_id'],
            removeDate: $data['remove_date'],
            source: $this->denormalizeChatBoostSource($data['source']),
        );
    }

    public function denormalizeUserChatBoosts(array $data): Types\Interfaces\UserChatBoostsInterface
    {
        $requiredFields = [
            'boosts',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UserChatBoosts missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUserChatBoosts(
            boosts: array_map(fn (array $item) => $this->denormalizeChatBoost($item), $data['boosts']),
        );
    }

    public function denormalizeBusinessConnection(array $data): Types\Interfaces\BusinessConnectionInterface
    {
        $requiredFields = [
            'id',
            'user',
            'user_chat_id',
            'date',
            'can_reply',
            'is_enabled',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BusinessConnection missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBusinessConnection(
            id: $data['id'],
            user: $this->denormalizeUser($data['user']),
            userChatId: $data['user_chat_id'],
            date: $data['date'],
            canReply: $data['can_reply'],
            isEnabled: $data['is_enabled'],
        );
    }

    public function denormalizeBusinessMessagesDeleted(array $data): Types\Interfaces\BusinessMessagesDeletedInterface
    {
        $requiredFields = [
            'business_connection_id',
            'chat',
            'message_ids',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class BusinessMessagesDeleted missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBusinessMessagesDeleted(
            businessConnectionId: $data['business_connection_id'],
            chat: $this->denormalizeChat($data['chat']),
            messageIds: $data['message_ids'],
        );
    }

    public function denormalizeResponseParameters(array $data): Types\Interfaces\ResponseParametersInterface
    {
        return $this->factory->makeResponseParameters(
            migrateToChatId: $data['migrate_to_chat_id'] ?? null,
            retryAfter: $data['retry_after'] ?? null,
        );
    }

    public function denormalizeInputMedia(array $data): Types\Interfaces\InputMediaInterface
    {
        throw new \RuntimeException('class InputMedia is abstract and not yet implemented');
    }

    public function denormalizeInputMediaPhoto(array $data): Types\Interfaces\InputMediaPhotoInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputMediaPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputMediaPhoto(
            media: $data['media'],
            type: $data['type'] ?? 'photo',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            hasSpoiler: $data['has_spoiler'] ?? null,
        );
    }

    public function denormalizeInputMediaVideo(array $data): Types\Interfaces\InputMediaVideoInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputMediaVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputMediaVideo(
            media: $data['media'],
            type: $data['type'] ?? 'video',
            thumbnail: $data['thumbnail'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            width: $data['width'] ?? null,
            height: $data['height'] ?? null,
            duration: $data['duration'] ?? null,
            supportsStreaming: $data['supports_streaming'] ?? null,
            hasSpoiler: $data['has_spoiler'] ?? null,
        );
    }

    public function denormalizeInputMediaAnimation(array $data): Types\Interfaces\InputMediaAnimationInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputMediaAnimation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputMediaAnimation(
            media: $data['media'],
            type: $data['type'] ?? 'animation',
            thumbnail: $data['thumbnail'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            width: $data['width'] ?? null,
            height: $data['height'] ?? null,
            duration: $data['duration'] ?? null,
            hasSpoiler: $data['has_spoiler'] ?? null,
        );
    }

    public function denormalizeInputMediaAudio(array $data): Types\Interfaces\InputMediaAudioInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputMediaAudio missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputMediaAudio(
            media: $data['media'],
            type: $data['type'] ?? 'audio',
            thumbnail: $data['thumbnail'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            duration: $data['duration'] ?? null,
            performer: $data['performer'] ?? null,
            title: $data['title'] ?? null,
        );
    }

    public function denormalizeInputMediaDocument(array $data): Types\Interfaces\InputMediaDocumentInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputMediaDocument missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputMediaDocument(
            media: $data['media'],
            type: $data['type'] ?? 'document',
            thumbnail: $data['thumbnail'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            disableContentTypeDetection: $data['disable_content_type_detection'] ?? null,
        );
    }

    public function denormalizeInputFile(array $data): Types\Interfaces\InputFileInterface
    {
        $requiredFields = [
            'file_path',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputFile missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputFile(
            filePath: $data['file_path'],
        );
    }

    public function denormalizeInputPaidMedia(array $data): Types\Interfaces\InputPaidMediaInterface
    {
        throw new \RuntimeException('class InputPaidMedia is abstract and not yet implemented');
    }

    public function denormalizeInputPaidMediaPhoto(array $data): Types\Interfaces\InputPaidMediaPhotoInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputPaidMediaPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputPaidMediaPhoto(
            media: $data['media'],
            type: $data['type'] ?? 'photo',
        );
    }

    public function denormalizeInputPaidMediaVideo(array $data): Types\Interfaces\InputPaidMediaVideoInterface
    {
        $requiredFields = [
            'media',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputPaidMediaVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputPaidMediaVideo(
            media: $data['media'],
            type: $data['type'] ?? 'video',
            thumbnail: $data['thumbnail'] ?? null,
            width: $data['width'] ?? null,
            height: $data['height'] ?? null,
            duration: $data['duration'] ?? null,
            supportsStreaming: $data['supports_streaming'] ?? null,
        );
    }

    public function denormalizeSticker(array $data): Types\Interfaces\StickerInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'type',
            'width',
            'height',
            'is_animated',
            'is_video',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Sticker missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeSticker(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            type: $data['type'],
            width: $data['width'],
            height: $data['height'],
            isAnimated: $data['is_animated'],
            isVideo: $data['is_video'],
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
            emoji: $data['emoji'] ?? null,
            setName: $data['set_name'] ?? null,
            premiumAnimation: isset($data['premium_animation'])
                ? $this->denormalizeFile($data['premium_animation'])
                : null,
            maskPosition: isset($data['mask_position'])
                ? $this->denormalizeMaskPosition($data['mask_position'])
                : null,
            customEmojiId: $data['custom_emoji_id'] ?? null,
            needsRepainting: $data['needs_repainting'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeStickerSet(array $data): Types\Interfaces\StickerSetInterface
    {
        $requiredFields = [
            'name',
            'title',
            'sticker_type',
            'stickers',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StickerSet missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStickerSet(
            name: $data['name'],
            title: $data['title'],
            stickerType: $data['sticker_type'],
            stickers: array_map(fn (array $item) => $this->denormalizeSticker($item), $data['stickers']),
            thumbnail: isset($data['thumbnail'])
                ? $this->denormalizePhotoSize($data['thumbnail'])
                : null,
        );
    }

    public function denormalizeMaskPosition(array $data): Types\Interfaces\MaskPositionInterface
    {
        $requiredFields = [
            'point',
            'x_shift',
            'y_shift',
            'scale',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class MaskPosition missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeMaskPosition(
            point: $data['point'],
            xShift: $data['x_shift'],
            yShift: $data['y_shift'],
            scale: $data['scale'],
        );
    }

    public function denormalizeInputSticker(array $data): Types\Interfaces\InputStickerInterface
    {
        $requiredFields = [
            'sticker',
            'format',
            'emoji_list',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputSticker missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputSticker(
            sticker: $data['sticker'],
            format: $data['format'],
            emojiList: $data['emoji_list'],
            maskPosition: isset($data['mask_position'])
                ? $this->denormalizeMaskPosition($data['mask_position'])
                : null,
            keywords: $data['keywords'] ?? null,
        );
    }

    public function denormalizeGift(array $data): Types\Interfaces\GiftInterface
    {
        $requiredFields = [
            'id',
            'sticker',
            'star_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Gift missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGift(
            id: $data['id'],
            sticker: $this->denormalizeSticker($data['sticker']),
            starCount: $data['star_count'],
            totalCount: $data['total_count'] ?? null,
            remainingCount: $data['remaining_count'] ?? null,
        );
    }

    public function denormalizeGifts(array $data): Types\Interfaces\GiftsInterface
    {
        $requiredFields = [
            'gifts',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Gifts missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGifts(
            gifts: array_map(fn (array $item) => $this->denormalizeGift($item), $data['gifts']),
        );
    }

    public function denormalizeInlineQuery(array $data): Types\Interfaces\InlineQueryInterface
    {
        $requiredFields = [
            'id',
            'from',
            'query',
            'offset',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQuery missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQuery(
            id: $data['id'],
            from: $this->denormalizeUser($data['from']),
            query: $data['query'],
            offset: $data['offset'],
            chatType: $data['chat_type'] ?? null,
            location: isset($data['location'])
                ? $this->denormalizeLocation($data['location'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultsButton(array $data): Types\Interfaces\InlineQueryResultsButtonInterface
    {
        $requiredFields = [
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultsButton missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultsButton(
            text: $data['text'],
            webApp: isset($data['web_app'])
                ? $this->denormalizeWebAppInfo($data['web_app'])
                : null,
            startParameter: $data['start_parameter'] ?? null,
        );
    }

    public function denormalizeInlineQueryResult(array $data): Types\Interfaces\InlineQueryResultInterface
    {
        throw new \RuntimeException('class InlineQueryResult is abstract and not yet implemented');
    }

    public function denormalizeInlineQueryResultArticle(array $data): Types\Interfaces\InlineQueryResultArticleInterface
    {
        $requiredFields = [
            'id',
            'title',
            'input_message_content',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultArticle missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultArticle(
            id: $data['id'],
            title: $data['title'],
            inputMessageContent: $this->denormalizeInputMessageContent($data['input_message_content']),
            type: $data['type'] ?? 'article',
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            url: $data['url'] ?? null,
            hideUrl: $data['hide_url'] ?? null,
            description: $data['description'] ?? null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultPhoto(array $data): Types\Interfaces\InlineQueryResultPhotoInterface
    {
        $requiredFields = [
            'id',
            'photo_url',
            'thumbnail_url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultPhoto(
            id: $data['id'],
            photoUrl: $data['photo_url'],
            thumbnailUrl: $data['thumbnail_url'],
            type: $data['type'] ?? 'photo',
            photoWidth: $data['photo_width'] ?? null,
            photoHeight: $data['photo_height'] ?? null,
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultGif(array $data): Types\Interfaces\InlineQueryResultGifInterface
    {
        $requiredFields = [
            'id',
            'gif_url',
            'thumbnail_url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultGif missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultGif(
            id: $data['id'],
            gifUrl: $data['gif_url'],
            thumbnailUrl: $data['thumbnail_url'],
            type: $data['type'] ?? 'gif',
            gifWidth: $data['gif_width'] ?? null,
            gifHeight: $data['gif_height'] ?? null,
            gifDuration: $data['gif_duration'] ?? null,
            thumbnailMimeType: $data['thumbnail_mime_type'] ?? null,
            title: $data['title'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultMpeg4Gif(
        array $data,
    ): Types\Interfaces\InlineQueryResultMpeg4GifInterface {
        $requiredFields = [
            'id',
            'mpeg4_url',
            'thumbnail_url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultMpeg4Gif missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultMpeg4Gif(
            id: $data['id'],
            mpeg4Url: $data['mpeg4_url'],
            thumbnailUrl: $data['thumbnail_url'],
            type: $data['type'] ?? 'mpeg4_gif',
            mpeg4Width: $data['mpeg4_width'] ?? null,
            mpeg4Height: $data['mpeg4_height'] ?? null,
            mpeg4Duration: $data['mpeg4_duration'] ?? null,
            thumbnailMimeType: $data['thumbnail_mime_type'] ?? null,
            title: $data['title'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultVideo(array $data): Types\Interfaces\InlineQueryResultVideoInterface
    {
        $requiredFields = [
            'id',
            'video_url',
            'mime_type',
            'thumbnail_url',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultVideo(
            id: $data['id'],
            videoUrl: $data['video_url'],
            mimeType: $data['mime_type'],
            thumbnailUrl: $data['thumbnail_url'],
            title: $data['title'],
            type: $data['type'] ?? 'video',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            videoWidth: $data['video_width'] ?? null,
            videoHeight: $data['video_height'] ?? null,
            videoDuration: $data['video_duration'] ?? null,
            description: $data['description'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultAudio(array $data): Types\Interfaces\InlineQueryResultAudioInterface
    {
        $requiredFields = [
            'id',
            'audio_url',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultAudio missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultAudio(
            id: $data['id'],
            audioUrl: $data['audio_url'],
            title: $data['title'],
            type: $data['type'] ?? 'audio',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            performer: $data['performer'] ?? null,
            audioDuration: $data['audio_duration'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultVoice(array $data): Types\Interfaces\InlineQueryResultVoiceInterface
    {
        $requiredFields = [
            'id',
            'voice_url',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultVoice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultVoice(
            id: $data['id'],
            voiceUrl: $data['voice_url'],
            title: $data['title'],
            type: $data['type'] ?? 'voice',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            voiceDuration: $data['voice_duration'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultDocument(
        array $data,
    ): Types\Interfaces\InlineQueryResultDocumentInterface {
        $requiredFields = [
            'id',
            'title',
            'document_url',
            'mime_type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultDocument missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultDocument(
            id: $data['id'],
            title: $data['title'],
            documentUrl: $data['document_url'],
            mimeType: $data['mime_type'],
            type: $data['type'] ?? 'document',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            description: $data['description'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultLocation(
        array $data,
    ): Types\Interfaces\InlineQueryResultLocationInterface {
        $requiredFields = [
            'id',
            'latitude',
            'longitude',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultLocation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultLocation(
            id: $data['id'],
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            title: $data['title'],
            type: $data['type'] ?? 'location',
            horizontalAccuracy: $data['horizontal_accuracy'] ?? null,
            livePeriod: $data['live_period'] ?? null,
            heading: $data['heading'] ?? null,
            proximityAlertRadius: $data['proximity_alert_radius'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultVenue(array $data): Types\Interfaces\InlineQueryResultVenueInterface
    {
        $requiredFields = [
            'id',
            'latitude',
            'longitude',
            'title',
            'address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultVenue missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultVenue(
            id: $data['id'],
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            title: $data['title'],
            address: $data['address'],
            type: $data['type'] ?? 'venue',
            foursquareId: $data['foursquare_id'] ?? null,
            foursquareType: $data['foursquare_type'] ?? null,
            googlePlaceId: $data['google_place_id'] ?? null,
            googlePlaceType: $data['google_place_type'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultContact(array $data): Types\Interfaces\InlineQueryResultContactInterface
    {
        $requiredFields = [
            'id',
            'phone_number',
            'first_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultContact missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultContact(
            id: $data['id'],
            phoneNumber: $data['phone_number'],
            firstName: $data['first_name'],
            type: $data['type'] ?? 'contact',
            lastName: $data['last_name'] ?? null,
            vcard: $data['vcard'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultGame(array $data): Types\Interfaces\InlineQueryResultGameInterface
    {
        $requiredFields = [
            'id',
            'game_short_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultGame missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultGame(
            id: $data['id'],
            gameShortName: $data['game_short_name'],
            type: $data['type'] ?? 'game',
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedPhoto(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedPhotoInterface {
        $requiredFields = [
            'id',
            'photo_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedPhoto(
            id: $data['id'],
            photoFileId: $data['photo_file_id'],
            type: $data['type'] ?? 'photo',
            title: $data['title'] ?? null,
            description: $data['description'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedGif(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedGifInterface {
        $requiredFields = [
            'id',
            'gif_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedGif missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedGif(
            id: $data['id'],
            gifFileId: $data['gif_file_id'],
            type: $data['type'] ?? 'gif',
            title: $data['title'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedMpeg4Gif(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedMpeg4GifInterface {
        $requiredFields = [
            'id',
            'mpeg4_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedMpeg4Gif missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedMpeg4Gif(
            id: $data['id'],
            mpeg4FileId: $data['mpeg4_file_id'],
            type: $data['type'] ?? 'mpeg4_gif',
            title: $data['title'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedSticker(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedStickerInterface {
        $requiredFields = [
            'id',
            'sticker_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedSticker missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedSticker(
            id: $data['id'],
            stickerFileId: $data['sticker_file_id'],
            type: $data['type'] ?? 'sticker',
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedDocument(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedDocumentInterface {
        $requiredFields = [
            'id',
            'title',
            'document_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedDocument missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedDocument(
            id: $data['id'],
            title: $data['title'],
            documentFileId: $data['document_file_id'],
            type: $data['type'] ?? 'document',
            description: $data['description'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedVideo(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedVideoInterface {
        $requiredFields = [
            'id',
            'video_file_id',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedVideo(
            id: $data['id'],
            videoFileId: $data['video_file_id'],
            title: $data['title'],
            type: $data['type'] ?? 'video',
            description: $data['description'] ?? null,
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            showCaptionAboveMedia: $data['show_caption_above_media'] ?? null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedVoice(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedVoiceInterface {
        $requiredFields = [
            'id',
            'voice_file_id',
            'title',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedVoice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedVoice(
            id: $data['id'],
            voiceFileId: $data['voice_file_id'],
            title: $data['title'],
            type: $data['type'] ?? 'voice',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInlineQueryResultCachedAudio(
        array $data,
    ): Types\Interfaces\InlineQueryResultCachedAudioInterface {
        $requiredFields = [
            'id',
            'audio_file_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InlineQueryResultCachedAudio missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInlineQueryResultCachedAudio(
            id: $data['id'],
            audioFileId: $data['audio_file_id'],
            type: $data['type'] ?? 'audio',
            caption: $data['caption'] ?? null,
            parseMode: $data['parse_mode'] ?? null,
            captionEntities: isset($data['caption_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['caption_entities'])
                : null,
            replyMarkup: isset($data['reply_markup'])
                ? $this->denormalizeInlineKeyboardMarkup($data['reply_markup'])
                : null,
            inputMessageContent: isset($data['input_message_content'])
                ? $this->denormalizeInputMessageContent($data['input_message_content'])
                : null,
        );
    }

    public function denormalizeInputMessageContent(array $data): Types\Interfaces\InputMessageContentInterface
    {
        throw new \RuntimeException('class InputMessageContent is abstract and not yet implemented');
    }

    public function denormalizeInputTextMessageContent(array $data): Types\Interfaces\InputTextMessageContentInterface
    {
        $requiredFields = [
            'message_text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputTextMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputTextMessageContent(
            messageText: $data['message_text'],
            parseMode: $data['parse_mode'] ?? null,
            entities: isset($data['entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['entities'])
                : null,
            linkPreviewOptions: isset($data['link_preview_options'])
                ? $this->denormalizeLinkPreviewOptions($data['link_preview_options'])
                : null,
        );
    }

    public function denormalizeInputLocationMessageContent(
        array $data,
    ): Types\Interfaces\InputLocationMessageContentInterface {
        $requiredFields = [
            'latitude',
            'longitude',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputLocationMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputLocationMessageContent(
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            horizontalAccuracy: $data['horizontal_accuracy'] ?? null,
            livePeriod: $data['live_period'] ?? null,
            heading: $data['heading'] ?? null,
            proximityAlertRadius: $data['proximity_alert_radius'] ?? null,
        );
    }

    public function denormalizeInputVenueMessageContent(array $data): Types\Interfaces\InputVenueMessageContentInterface
    {
        $requiredFields = [
            'latitude',
            'longitude',
            'title',
            'address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputVenueMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputVenueMessageContent(
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            title: $data['title'],
            address: $data['address'],
            foursquareId: $data['foursquare_id'] ?? null,
            foursquareType: $data['foursquare_type'] ?? null,
            googlePlaceId: $data['google_place_id'] ?? null,
            googlePlaceType: $data['google_place_type'] ?? null,
        );
    }

    public function denormalizeInputContactMessageContent(
        array $data,
    ): Types\Interfaces\InputContactMessageContentInterface {
        $requiredFields = [
            'phone_number',
            'first_name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputContactMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputContactMessageContent(
            phoneNumber: $data['phone_number'],
            firstName: $data['first_name'],
            lastName: $data['last_name'] ?? null,
            vcard: $data['vcard'] ?? null,
        );
    }

    public function denormalizeInputInvoiceMessageContent(
        array $data,
    ): Types\Interfaces\InputInvoiceMessageContentInterface {
        $requiredFields = [
            'title',
            'description',
            'payload',
            'currency',
            'prices',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputInvoiceMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputInvoiceMessageContent(
            title: $data['title'],
            description: $data['description'],
            payload: $data['payload'],
            currency: $data['currency'],
            prices: array_map(fn (array $item) => $this->denormalizeLabeledPrice($item), $data['prices']),
            providerToken: $data['provider_token'] ?? null,
            maxTipAmount: $data['max_tip_amount'] ?? null,
            suggestedTipAmounts: $data['suggested_tip_amounts'] ?? null,
            providerData: $data['provider_data'] ?? null,
            photoUrl: $data['photo_url'] ?? null,
            photoSize: $data['photo_size'] ?? null,
            photoWidth: $data['photo_width'] ?? null,
            photoHeight: $data['photo_height'] ?? null,
            needName: $data['need_name'] ?? null,
            needPhoneNumber: $data['need_phone_number'] ?? null,
            needEmail: $data['need_email'] ?? null,
            needShippingAddress: $data['need_shipping_address'] ?? null,
            sendPhoneNumberToProvider: $data['send_phone_number_to_provider'] ?? null,
            sendEmailToProvider: $data['send_email_to_provider'] ?? null,
            isFlexible: $data['is_flexible'] ?? null,
        );
    }

    public function denormalizeChosenInlineResult(array $data): Types\Interfaces\ChosenInlineResultInterface
    {
        $requiredFields = [
            'result_id',
            'from',
            'query',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChosenInlineResult missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChosenInlineResult(
            resultId: $data['result_id'],
            from: $this->denormalizeUser($data['from']),
            query: $data['query'],
            location: isset($data['location'])
                ? $this->denormalizeLocation($data['location'])
                : null,
            inlineMessageId: $data['inline_message_id'] ?? null,
        );
    }

    public function denormalizeSentWebAppMessage(array $data): Types\Interfaces\SentWebAppMessageInterface
    {
        return $this->factory->makeSentWebAppMessage(
            inlineMessageId: $data['inline_message_id'] ?? null,
        );
    }

    public function denormalizePreparedInlineMessage(array $data): Types\Interfaces\PreparedInlineMessageInterface
    {
        $requiredFields = [
            'id',
            'expiration_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PreparedInlineMessage missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePreparedInlineMessage(
            id: $data['id'],
            expirationDate: $data['expiration_date'],
        );
    }

    public function denormalizeLabeledPrice(array $data): Types\Interfaces\LabeledPriceInterface
    {
        $requiredFields = [
            'label',
            'amount',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class LabeledPrice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeLabeledPrice(
            label: $data['label'],
            amount: $data['amount'],
        );
    }

    public function denormalizeInvoice(array $data): Types\Interfaces\InvoiceInterface
    {
        $requiredFields = [
            'title',
            'description',
            'start_parameter',
            'currency',
            'total_amount',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Invoice missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInvoice(
            title: $data['title'],
            description: $data['description'],
            startParameter: $data['start_parameter'],
            currency: $data['currency'],
            totalAmount: $data['total_amount'],
        );
    }

    public function denormalizeShippingAddress(array $data): Types\Interfaces\ShippingAddressInterface
    {
        $requiredFields = [
            'country_code',
            'state',
            'city',
            'street_line1',
            'street_line2',
            'post_code',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ShippingAddress missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeShippingAddress(
            countryCode: $data['country_code'],
            state: $data['state'],
            city: $data['city'],
            streetLine1: $data['street_line1'],
            streetLine2: $data['street_line2'],
            postCode: $data['post_code'],
        );
    }

    public function denormalizeOrderInfo(array $data): Types\Interfaces\OrderInfoInterface
    {
        return $this->factory->makeOrderInfo(
            name: $data['name'] ?? null,
            phoneNumber: $data['phone_number'] ?? null,
            email: $data['email'] ?? null,
            shippingAddress: isset($data['shipping_address'])
                ? $this->denormalizeShippingAddress($data['shipping_address'])
                : null,
        );
    }

    public function denormalizeShippingOption(array $data): Types\Interfaces\ShippingOptionInterface
    {
        $requiredFields = [
            'id',
            'title',
            'prices',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ShippingOption missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeShippingOption(
            id: $data['id'],
            title: $data['title'],
            prices: array_map(fn (array $item) => $this->denormalizeLabeledPrice($item), $data['prices']),
        );
    }

    public function denormalizeSuccessfulPayment(array $data): Types\Interfaces\SuccessfulPaymentInterface
    {
        $requiredFields = [
            'currency',
            'total_amount',
            'invoice_payload',
            'telegram_payment_charge_id',
            'provider_payment_charge_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class SuccessfulPayment missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeSuccessfulPayment(
            currency: $data['currency'],
            totalAmount: $data['total_amount'],
            invoicePayload: $data['invoice_payload'],
            telegramPaymentChargeId: $data['telegram_payment_charge_id'],
            providerPaymentChargeId: $data['provider_payment_charge_id'],
            subscriptionExpirationDate: $data['subscription_expiration_date'] ?? null,
            isRecurring: $data['is_recurring'] ?? null,
            isFirstRecurring: $data['is_first_recurring'] ?? null,
            shippingOptionId: $data['shipping_option_id'] ?? null,
            orderInfo: isset($data['order_info'])
                ? $this->denormalizeOrderInfo($data['order_info'])
                : null,
        );
    }

    public function denormalizeRefundedPayment(array $data): Types\Interfaces\RefundedPaymentInterface
    {
        $requiredFields = [
            'currency',
            'total_amount',
            'invoice_payload',
            'telegram_payment_charge_id',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class RefundedPayment missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRefundedPayment(
            currency: $data['currency'],
            totalAmount: $data['total_amount'],
            invoicePayload: $data['invoice_payload'],
            telegramPaymentChargeId: $data['telegram_payment_charge_id'],
            providerPaymentChargeId: $data['provider_payment_charge_id'] ?? null,
        );
    }

    public function denormalizeShippingQuery(array $data): Types\Interfaces\ShippingQueryInterface
    {
        $requiredFields = [
            'id',
            'from',
            'invoice_payload',
            'shipping_address',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ShippingQuery missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeShippingQuery(
            id: $data['id'],
            from: $this->denormalizeUser($data['from']),
            invoicePayload: $data['invoice_payload'],
            shippingAddress: $this->denormalizeShippingAddress($data['shipping_address']),
        );
    }

    public function denormalizePreCheckoutQuery(array $data): Types\Interfaces\PreCheckoutQueryInterface
    {
        $requiredFields = [
            'id',
            'from',
            'currency',
            'total_amount',
            'invoice_payload',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PreCheckoutQuery missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePreCheckoutQuery(
            id: $data['id'],
            from: $this->denormalizeUser($data['from']),
            currency: $data['currency'],
            totalAmount: $data['total_amount'],
            invoicePayload: $data['invoice_payload'],
            shippingOptionId: $data['shipping_option_id'] ?? null,
            orderInfo: isset($data['order_info'])
                ? $this->denormalizeOrderInfo($data['order_info'])
                : null,
        );
    }

    public function denormalizePaidMediaPurchased(array $data): Types\Interfaces\PaidMediaPurchasedInterface
    {
        $requiredFields = [
            'from',
            'paid_media_payload',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMediaPurchased missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMediaPurchased(
            from: $this->denormalizeUser($data['from']),
            paidMediaPayload: $data['paid_media_payload'],
        );
    }

    public function denormalizeRevenueWithdrawalState(array $data): Types\Interfaces\RevenueWithdrawalStateInterface
    {
        throw new \RuntimeException('class RevenueWithdrawalState is abstract and not yet implemented');
    }

    public function denormalizeRevenueWithdrawalStatePending(
        array $data,
    ): Types\Interfaces\RevenueWithdrawalStatePendingInterface {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class RevenueWithdrawalStatePending missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRevenueWithdrawalStatePending(
            type: $data['type'],
        );
    }

    public function denormalizeRevenueWithdrawalStateSucceeded(
        array $data,
    ): Types\Interfaces\RevenueWithdrawalStateSucceededInterface {
        $requiredFields = [
            'type',
            'date',
            'url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class RevenueWithdrawalStateSucceeded missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRevenueWithdrawalStateSucceeded(
            type: $data['type'],
            date: $data['date'],
            url: $data['url'],
        );
    }

    public function denormalizeRevenueWithdrawalStateFailed(
        array $data,
    ): Types\Interfaces\RevenueWithdrawalStateFailedInterface {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class RevenueWithdrawalStateFailed missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRevenueWithdrawalStateFailed(
            type: $data['type'],
        );
    }

    public function denormalizeTransactionPartner(array $data): Types\Interfaces\TransactionPartnerInterface
    {
        throw new \RuntimeException('class TransactionPartner is abstract and not yet implemented');
    }

    public function denormalizeTransactionPartnerUser(array $data): Types\Interfaces\TransactionPartnerUserInterface
    {
        $requiredFields = [
            'type',
            'user',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerUser missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerUser(
            type: $data['type'],
            user: $this->denormalizeUser($data['user']),
            invoicePayload: $data['invoice_payload'] ?? null,
            subscriptionPeriod: $data['subscription_period'] ?? null,
            paidMedia: isset($data['paid_media'])
                ? array_map(fn (array $item) => $this->denormalizePaidMedia($item), $data['paid_media'])
                : null,
            paidMediaPayload: $data['paid_media_payload'] ?? null,
            gift: $data['gift'] ?? null,
        );
    }

    public function denormalizeTransactionPartnerFragment(
        array $data,
    ): Types\Interfaces\TransactionPartnerFragmentInterface {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerFragment missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerFragment(
            type: $data['type'],
            withdrawalState: isset($data['withdrawal_state'])
                ? $this->denormalizeRevenueWithdrawalState($data['withdrawal_state'])
                : null,
        );
    }

    public function denormalizeTransactionPartnerTelegramAds(
        array $data,
    ): Types\Interfaces\TransactionPartnerTelegramAdsInterface {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerTelegramAds missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerTelegramAds(
            type: $data['type'],
        );
    }

    public function denormalizeTransactionPartnerTelegramApi(
        array $data,
    ): Types\Interfaces\TransactionPartnerTelegramApiInterface {
        $requiredFields = [
            'type',
            'request_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerTelegramApi missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerTelegramApi(
            type: $data['type'],
            requestCount: $data['request_count'],
        );
    }

    public function denormalizeTransactionPartnerOther(array $data): Types\Interfaces\TransactionPartnerOtherInterface
    {
        $requiredFields = [
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerOther missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerOther(
            type: $data['type'],
        );
    }

    public function denormalizeStarTransaction(array $data): Types\Interfaces\StarTransactionInterface
    {
        $requiredFields = [
            'id',
            'amount',
            'date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StarTransaction missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStarTransaction(
            id: $data['id'],
            amount: $data['amount'],
            date: $data['date'],
            source: isset($data['source'])
                ? $this->denormalizeTransactionPartner($data['source'])
                : null,
            receiver: isset($data['receiver'])
                ? $this->denormalizeTransactionPartner($data['receiver'])
                : null,
        );
    }

    public function denormalizeStarTransactions(array $data): Types\Interfaces\StarTransactionsInterface
    {
        $requiredFields = [
            'transactions',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StarTransactions missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStarTransactions(
            transactions: array_map(fn (array $item) => $this->denormalizeStarTransaction($item), $data['transactions']),
        );
    }

    public function denormalizePassportData(array $data): Types\Interfaces\PassportDataInterface
    {
        $requiredFields = [
            'data',
            'credentials',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportData missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportData(
            data: array_map(fn (array $item) => $this->denormalizeEncryptedPassportElement($item), $data['data']),
            credentials: $this->denormalizeEncryptedCredentials($data['credentials']),
        );
    }

    public function denormalizePassportFile(array $data): Types\Interfaces\PassportFileInterface
    {
        $requiredFields = [
            'file_id',
            'file_unique_id',
            'file_size',
            'file_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportFile missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportFile(
            fileId: $data['file_id'],
            fileUniqueId: $data['file_unique_id'],
            fileSize: $data['file_size'],
            fileDate: $data['file_date'],
        );
    }

    public function denormalizeEncryptedPassportElement(array $data): Types\Interfaces\EncryptedPassportElementInterface
    {
        $requiredFields = [
            'type',
            'hash',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class EncryptedPassportElement missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeEncryptedPassportElement(
            type: $data['type'],
            hash: $data['hash'],
            data: $data['data'] ?? null,
            phoneNumber: $data['phone_number'] ?? null,
            email: $data['email'] ?? null,
            files: isset($data['files'])
                ? array_map(fn (array $item) => $this->denormalizePassportFile($item), $data['files'])
                : null,
            frontSide: isset($data['front_side'])
                ? $this->denormalizePassportFile($data['front_side'])
                : null,
            reverseSide: isset($data['reverse_side'])
                ? $this->denormalizePassportFile($data['reverse_side'])
                : null,
            selfie: isset($data['selfie'])
                ? $this->denormalizePassportFile($data['selfie'])
                : null,
            translation: isset($data['translation'])
                ? array_map(fn (array $item) => $this->denormalizePassportFile($item), $data['translation'])
                : null,
        );
    }

    public function denormalizeEncryptedCredentials(array $data): Types\Interfaces\EncryptedCredentialsInterface
    {
        $requiredFields = [
            'data',
            'hash',
            'secret',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class EncryptedCredentials missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeEncryptedCredentials(
            data: $data['data'],
            hash: $data['hash'],
            secret: $data['secret'],
        );
    }

    public function denormalizePassportElementError(array $data): Types\Interfaces\PassportElementErrorInterface
    {
        throw new \RuntimeException('class PassportElementError is abstract and not yet implemented');
    }

    public function denormalizePassportElementErrorDataField(
        array $data,
    ): Types\Interfaces\PassportElementErrorDataFieldInterface {
        $requiredFields = [
            'type',
            'field_name',
            'data_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorDataField missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorDataField(
            type: $data['type'],
            fieldName: $data['field_name'],
            dataHash: $data['data_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'data',
        );
    }

    public function denormalizePassportElementErrorFrontSide(
        array $data,
    ): Types\Interfaces\PassportElementErrorFrontSideInterface {
        $requiredFields = [
            'type',
            'file_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorFrontSide missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorFrontSide(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'front_side',
        );
    }

    public function denormalizePassportElementErrorReverseSide(
        array $data,
    ): Types\Interfaces\PassportElementErrorReverseSideInterface {
        $requiredFields = [
            'type',
            'file_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorReverseSide missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorReverseSide(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'reverse_side',
        );
    }

    public function denormalizePassportElementErrorSelfie(
        array $data,
    ): Types\Interfaces\PassportElementErrorSelfieInterface {
        $requiredFields = [
            'type',
            'file_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorSelfie missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorSelfie(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'selfie',
        );
    }

    public function denormalizePassportElementErrorFile(array $data): Types\Interfaces\PassportElementErrorFileInterface
    {
        $requiredFields = [
            'type',
            'file_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorFile missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorFile(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'file',
        );
    }

    public function denormalizePassportElementErrorFiles(
        array $data,
    ): Types\Interfaces\PassportElementErrorFilesInterface {
        $requiredFields = [
            'type',
            'file_hashes',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorFiles missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorFiles(
            type: $data['type'],
            fileHashes: $data['file_hashes'],
            message: $data['message'],
            source: $data['source'] ?? 'files',
        );
    }

    public function denormalizePassportElementErrorTranslationFile(
        array $data,
    ): Types\Interfaces\PassportElementErrorTranslationFileInterface {
        $requiredFields = [
            'type',
            'file_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorTranslationFile missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorTranslationFile(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'translation_file',
        );
    }

    public function denormalizePassportElementErrorTranslationFiles(
        array $data,
    ): Types\Interfaces\PassportElementErrorTranslationFilesInterface {
        $requiredFields = [
            'type',
            'file_hashes',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorTranslationFiles missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorTranslationFiles(
            type: $data['type'],
            fileHashes: $data['file_hashes'],
            message: $data['message'],
            source: $data['source'] ?? 'translation_files',
        );
    }

    public function denormalizePassportElementErrorUnspecified(
        array $data,
    ): Types\Interfaces\PassportElementErrorUnspecifiedInterface {
        $requiredFields = [
            'type',
            'element_hash',
            'message',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorUnspecified missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorUnspecified(
            type: $data['type'],
            elementHash: $data['element_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'unspecified',
        );
    }

    public function denormalizeGame(array $data): Types\Interfaces\GameInterface
    {
        $requiredFields = [
            'title',
            'description',
            'photo',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Game missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGame(
            title: $data['title'],
            description: $data['description'],
            photo: array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['photo']),
            text: $data['text'] ?? null,
            textEntities: isset($data['text_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['text_entities'])
                : null,
            animation: isset($data['animation'])
                ? $this->denormalizeAnimation($data['animation'])
                : null,
        );
    }

    public function denormalizeCallbackGame(array $data): Types\Interfaces\CallbackGameInterface
    {
        return $this->factory->makeCallbackGame();
    }

    public function denormalizeGameHighScore(array $data): Types\Interfaces\GameHighScoreInterface
    {
        $requiredFields = [
            'position',
            'user',
            'score',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class GameHighScore missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGameHighScore(
            position: $data['position'],
            user: $this->denormalizeUser($data['user']),
            score: $data['score'],
        );
    }

    public function serialize(array $data): array
    {
        return $this->normalize($data);
    }

    public function deserialize(mixed $data, string $type, bool $isArray = false): mixed
    {
        return is_array($data)
            ? $this->denormalize($data, $type, $isArray)
            : $data;
    }

    public function denormalize(array $data, string $type, bool $isArray = false): mixed
    {
        if (!class_exists($type) || !is_subclass_of($type, TypeInterface::class)) {
            throw new \UnexpectedValueException(sprintf('Failed to decode response to the expected type: %s', $type));
        }

        if (!$isArray) {
            return $this->denormalizeType($data, $type);
        }

        return array_map(fn (array $item) => $this->denormalizeType($item, $type), $data);
    }

    private function denormalizeType(array $data, string $type): TypeInterface
    {
        return match ($type) {
            Update::class => $this->denormalizeUpdate($data),
            WebhookInfo::class => $this->denormalizeWebhookInfo($data),
            User::class => $this->denormalizeUser($data),
            Chat::class => $this->denormalizeChat($data),
            ChatFullInfo::class => $this->denormalizeChatFullInfo($data),
            Message::class => $this->denormalizeMessage($data),
            MessageId::class => $this->denormalizeMessageId($data),
            InaccessibleMessage::class => $this->denormalizeInaccessibleMessage($data),
            MessageEntity::class => $this->denormalizeMessageEntity($data),
            TextQuote::class => $this->denormalizeTextQuote($data),
            ExternalReplyInfo::class => $this->denormalizeExternalReplyInfo($data),
            ReplyParameters::class => $this->denormalizeReplyParameters($data),
            MessageOriginUser::class => $this->denormalizeMessageOriginUser($data),
            MessageOriginHiddenUser::class => $this->denormalizeMessageOriginHiddenUser($data),
            MessageOriginChat::class => $this->denormalizeMessageOriginChat($data),
            MessageOriginChannel::class => $this->denormalizeMessageOriginChannel($data),
            PhotoSize::class => $this->denormalizePhotoSize($data),
            Animation::class => $this->denormalizeAnimation($data),
            Audio::class => $this->denormalizeAudio($data),
            Document::class => $this->denormalizeDocument($data),
            Story::class => $this->denormalizeStory($data),
            Video::class => $this->denormalizeVideo($data),
            VideoNote::class => $this->denormalizeVideoNote($data),
            Voice::class => $this->denormalizeVoice($data),
            PaidMediaInfo::class => $this->denormalizePaidMediaInfo($data),
            PaidMediaPreview::class => $this->denormalizePaidMediaPreview($data),
            PaidMediaPhoto::class => $this->denormalizePaidMediaPhoto($data),
            PaidMediaVideo::class => $this->denormalizePaidMediaVideo($data),
            Contact::class => $this->denormalizeContact($data),
            Dice::class => $this->denormalizeDice($data),
            PollOption::class => $this->denormalizePollOption($data),
            InputPollOption::class => $this->denormalizeInputPollOption($data),
            PollAnswer::class => $this->denormalizePollAnswer($data),
            Poll::class => $this->denormalizePoll($data),
            Location::class => $this->denormalizeLocation($data),
            Venue::class => $this->denormalizeVenue($data),
            WebAppData::class => $this->denormalizeWebAppData($data),
            ProximityAlertTriggered::class => $this->denormalizeProximityAlertTriggered($data),
            MessageAutoDeleteTimerChanged::class => $this->denormalizeMessageAutoDeleteTimerChanged($data),
            ChatBoostAdded::class => $this->denormalizeChatBoostAdded($data),
            BackgroundFillSolid::class => $this->denormalizeBackgroundFillSolid($data),
            BackgroundFillGradient::class => $this->denormalizeBackgroundFillGradient($data),
            BackgroundFillFreeformGradient::class => $this->denormalizeBackgroundFillFreeformGradient($data),
            BackgroundTypeFill::class => $this->denormalizeBackgroundTypeFill($data),
            BackgroundTypeWallpaper::class => $this->denormalizeBackgroundTypeWallpaper($data),
            BackgroundTypePattern::class => $this->denormalizeBackgroundTypePattern($data),
            BackgroundTypeChatTheme::class => $this->denormalizeBackgroundTypeChatTheme($data),
            ChatBackground::class => $this->denormalizeChatBackground($data),
            ForumTopicCreated::class => $this->denormalizeForumTopicCreated($data),
            ForumTopicClosed::class => $this->denormalizeForumTopicClosed($data),
            ForumTopicEdited::class => $this->denormalizeForumTopicEdited($data),
            ForumTopicReopened::class => $this->denormalizeForumTopicReopened($data),
            GeneralForumTopicHidden::class => $this->denormalizeGeneralForumTopicHidden($data),
            GeneralForumTopicUnhidden::class => $this->denormalizeGeneralForumTopicUnhidden($data),
            SharedUser::class => $this->denormalizeSharedUser($data),
            UsersShared::class => $this->denormalizeUsersShared($data),
            ChatShared::class => $this->denormalizeChatShared($data),
            WriteAccessAllowed::class => $this->denormalizeWriteAccessAllowed($data),
            VideoChatScheduled::class => $this->denormalizeVideoChatScheduled($data),
            VideoChatStarted::class => $this->denormalizeVideoChatStarted($data),
            VideoChatEnded::class => $this->denormalizeVideoChatEnded($data),
            VideoChatParticipantsInvited::class => $this->denormalizeVideoChatParticipantsInvited($data),
            GiveawayCreated::class => $this->denormalizeGiveawayCreated($data),
            Giveaway::class => $this->denormalizeGiveaway($data),
            GiveawayWinners::class => $this->denormalizeGiveawayWinners($data),
            GiveawayCompleted::class => $this->denormalizeGiveawayCompleted($data),
            LinkPreviewOptions::class => $this->denormalizeLinkPreviewOptions($data),
            UserProfilePhotos::class => $this->denormalizeUserProfilePhotos($data),
            File::class => $this->denormalizeFile($data),
            WebAppInfo::class => $this->denormalizeWebAppInfo($data),
            ReplyKeyboardMarkup::class => $this->denormalizeReplyKeyboardMarkup($data),
            KeyboardButton::class => $this->denormalizeKeyboardButton($data),
            KeyboardButtonRequestUsers::class => $this->denormalizeKeyboardButtonRequestUsers($data),
            KeyboardButtonRequestChat::class => $this->denormalizeKeyboardButtonRequestChat($data),
            KeyboardButtonPollType::class => $this->denormalizeKeyboardButtonPollType($data),
            ReplyKeyboardRemove::class => $this->denormalizeReplyKeyboardRemove($data),
            InlineKeyboardMarkup::class => $this->denormalizeInlineKeyboardMarkup($data),
            InlineKeyboardButton::class => $this->denormalizeInlineKeyboardButton($data),
            LoginUrl::class => $this->denormalizeLoginUrl($data),
            SwitchInlineQueryChosenChat::class => $this->denormalizeSwitchInlineQueryChosenChat($data),
            CopyTextButton::class => $this->denormalizeCopyTextButton($data),
            CallbackQuery::class => $this->denormalizeCallbackQuery($data),
            ForceReply::class => $this->denormalizeForceReply($data),
            ChatPhoto::class => $this->denormalizeChatPhoto($data),
            ChatInviteLink::class => $this->denormalizeChatInviteLink($data),
            ChatAdministratorRights::class => $this->denormalizeChatAdministratorRights($data),
            ChatMemberUpdated::class => $this->denormalizeChatMemberUpdated($data),
            ChatMemberOwner::class => $this->denormalizeChatMemberOwner($data),
            ChatMemberAdministrator::class => $this->denormalizeChatMemberAdministrator($data),
            ChatMemberMember::class => $this->denormalizeChatMemberMember($data),
            ChatMemberRestricted::class => $this->denormalizeChatMemberRestricted($data),
            ChatMemberLeft::class => $this->denormalizeChatMemberLeft($data),
            ChatMemberBanned::class => $this->denormalizeChatMemberBanned($data),
            ChatJoinRequest::class => $this->denormalizeChatJoinRequest($data),
            ChatPermissions::class => $this->denormalizeChatPermissions($data),
            Birthdate::class => $this->denormalizeBirthdate($data),
            BusinessIntro::class => $this->denormalizeBusinessIntro($data),
            BusinessLocation::class => $this->denormalizeBusinessLocation($data),
            BusinessOpeningHoursInterval::class => $this->denormalizeBusinessOpeningHoursInterval($data),
            BusinessOpeningHours::class => $this->denormalizeBusinessOpeningHours($data),
            ChatLocation::class => $this->denormalizeChatLocation($data),
            ReactionTypeEmoji::class => $this->denormalizeReactionTypeEmoji($data),
            ReactionTypeCustomEmoji::class => $this->denormalizeReactionTypeCustomEmoji($data),
            ReactionTypePaid::class => $this->denormalizeReactionTypePaid($data),
            ReactionCount::class => $this->denormalizeReactionCount($data),
            MessageReactionUpdated::class => $this->denormalizeMessageReactionUpdated($data),
            MessageReactionCountUpdated::class => $this->denormalizeMessageReactionCountUpdated($data),
            ForumTopic::class => $this->denormalizeForumTopic($data),
            BotCommand::class => $this->denormalizeBotCommand($data),
            BotCommandScopeDefault::class => $this->denormalizeBotCommandScopeDefault($data),
            BotCommandScopeAllPrivateChats::class => $this->denormalizeBotCommandScopeAllPrivateChats($data),
            BotCommandScopeAllGroupChats::class => $this->denormalizeBotCommandScopeAllGroupChats($data),
            BotCommandScopeAllChatAdministrators::class => $this->denormalizeBotCommandScopeAllChatAdministrators($data),
            BotCommandScopeChat::class => $this->denormalizeBotCommandScopeChat($data),
            BotCommandScopeChatAdministrators::class => $this->denormalizeBotCommandScopeChatAdministrators($data),
            BotCommandScopeChatMember::class => $this->denormalizeBotCommandScopeChatMember($data),
            BotName::class => $this->denormalizeBotName($data),
            BotDescription::class => $this->denormalizeBotDescription($data),
            BotShortDescription::class => $this->denormalizeBotShortDescription($data),
            MenuButtonCommands::class => $this->denormalizeMenuButtonCommands($data),
            MenuButtonWebApp::class => $this->denormalizeMenuButtonWebApp($data),
            MenuButtonDefault::class => $this->denormalizeMenuButtonDefault($data),
            ChatBoostSourcePremium::class => $this->denormalizeChatBoostSourcePremium($data),
            ChatBoostSourceGiftCode::class => $this->denormalizeChatBoostSourceGiftCode($data),
            ChatBoostSourceGiveaway::class => $this->denormalizeChatBoostSourceGiveaway($data),
            ChatBoost::class => $this->denormalizeChatBoost($data),
            ChatBoostUpdated::class => $this->denormalizeChatBoostUpdated($data),
            ChatBoostRemoved::class => $this->denormalizeChatBoostRemoved($data),
            UserChatBoosts::class => $this->denormalizeUserChatBoosts($data),
            BusinessConnection::class => $this->denormalizeBusinessConnection($data),
            BusinessMessagesDeleted::class => $this->denormalizeBusinessMessagesDeleted($data),
            ResponseParameters::class => $this->denormalizeResponseParameters($data),
            InputMediaPhoto::class => $this->denormalizeInputMediaPhoto($data),
            InputMediaVideo::class => $this->denormalizeInputMediaVideo($data),
            InputMediaAnimation::class => $this->denormalizeInputMediaAnimation($data),
            InputMediaAudio::class => $this->denormalizeInputMediaAudio($data),
            InputMediaDocument::class => $this->denormalizeInputMediaDocument($data),
            InputFile::class => $this->denormalizeInputFile($data),
            InputPaidMediaPhoto::class => $this->denormalizeInputPaidMediaPhoto($data),
            InputPaidMediaVideo::class => $this->denormalizeInputPaidMediaVideo($data),
            Sticker::class => $this->denormalizeSticker($data),
            StickerSet::class => $this->denormalizeStickerSet($data),
            MaskPosition::class => $this->denormalizeMaskPosition($data),
            InputSticker::class => $this->denormalizeInputSticker($data),
            Gift::class => $this->denormalizeGift($data),
            Gifts::class => $this->denormalizeGifts($data),
            InlineQuery::class => $this->denormalizeInlineQuery($data),
            InlineQueryResultsButton::class => $this->denormalizeInlineQueryResultsButton($data),
            InlineQueryResultArticle::class => $this->denormalizeInlineQueryResultArticle($data),
            InlineQueryResultPhoto::class => $this->denormalizeInlineQueryResultPhoto($data),
            InlineQueryResultGif::class => $this->denormalizeInlineQueryResultGif($data),
            InlineQueryResultMpeg4Gif::class => $this->denormalizeInlineQueryResultMpeg4Gif($data),
            InlineQueryResultVideo::class => $this->denormalizeInlineQueryResultVideo($data),
            InlineQueryResultAudio::class => $this->denormalizeInlineQueryResultAudio($data),
            InlineQueryResultVoice::class => $this->denormalizeInlineQueryResultVoice($data),
            InlineQueryResultDocument::class => $this->denormalizeInlineQueryResultDocument($data),
            InlineQueryResultLocation::class => $this->denormalizeInlineQueryResultLocation($data),
            InlineQueryResultVenue::class => $this->denormalizeInlineQueryResultVenue($data),
            InlineQueryResultContact::class => $this->denormalizeInlineQueryResultContact($data),
            InlineQueryResultGame::class => $this->denormalizeInlineQueryResultGame($data),
            InlineQueryResultCachedPhoto::class => $this->denormalizeInlineQueryResultCachedPhoto($data),
            InlineQueryResultCachedGif::class => $this->denormalizeInlineQueryResultCachedGif($data),
            InlineQueryResultCachedMpeg4Gif::class => $this->denormalizeInlineQueryResultCachedMpeg4Gif($data),
            InlineQueryResultCachedSticker::class => $this->denormalizeInlineQueryResultCachedSticker($data),
            InlineQueryResultCachedDocument::class => $this->denormalizeInlineQueryResultCachedDocument($data),
            InlineQueryResultCachedVideo::class => $this->denormalizeInlineQueryResultCachedVideo($data),
            InlineQueryResultCachedVoice::class => $this->denormalizeInlineQueryResultCachedVoice($data),
            InlineQueryResultCachedAudio::class => $this->denormalizeInlineQueryResultCachedAudio($data),
            InputTextMessageContent::class => $this->denormalizeInputTextMessageContent($data),
            InputLocationMessageContent::class => $this->denormalizeInputLocationMessageContent($data),
            InputVenueMessageContent::class => $this->denormalizeInputVenueMessageContent($data),
            InputContactMessageContent::class => $this->denormalizeInputContactMessageContent($data),
            InputInvoiceMessageContent::class => $this->denormalizeInputInvoiceMessageContent($data),
            ChosenInlineResult::class => $this->denormalizeChosenInlineResult($data),
            SentWebAppMessage::class => $this->denormalizeSentWebAppMessage($data),
            PreparedInlineMessage::class => $this->denormalizePreparedInlineMessage($data),
            LabeledPrice::class => $this->denormalizeLabeledPrice($data),
            Invoice::class => $this->denormalizeInvoice($data),
            ShippingAddress::class => $this->denormalizeShippingAddress($data),
            OrderInfo::class => $this->denormalizeOrderInfo($data),
            ShippingOption::class => $this->denormalizeShippingOption($data),
            SuccessfulPayment::class => $this->denormalizeSuccessfulPayment($data),
            RefundedPayment::class => $this->denormalizeRefundedPayment($data),
            ShippingQuery::class => $this->denormalizeShippingQuery($data),
            PreCheckoutQuery::class => $this->denormalizePreCheckoutQuery($data),
            PaidMediaPurchased::class => $this->denormalizePaidMediaPurchased($data),
            RevenueWithdrawalStatePending::class => $this->denormalizeRevenueWithdrawalStatePending($data),
            RevenueWithdrawalStateSucceeded::class => $this->denormalizeRevenueWithdrawalStateSucceeded($data),
            RevenueWithdrawalStateFailed::class => $this->denormalizeRevenueWithdrawalStateFailed($data),
            TransactionPartnerUser::class => $this->denormalizeTransactionPartnerUser($data),
            TransactionPartnerFragment::class => $this->denormalizeTransactionPartnerFragment($data),
            TransactionPartnerTelegramAds::class => $this->denormalizeTransactionPartnerTelegramAds($data),
            TransactionPartnerTelegramApi::class => $this->denormalizeTransactionPartnerTelegramApi($data),
            TransactionPartnerOther::class => $this->denormalizeTransactionPartnerOther($data),
            StarTransaction::class => $this->denormalizeStarTransaction($data),
            StarTransactions::class => $this->denormalizeStarTransactions($data),
            PassportData::class => $this->denormalizePassportData($data),
            PassportFile::class => $this->denormalizePassportFile($data),
            EncryptedPassportElement::class => $this->denormalizeEncryptedPassportElement($data),
            EncryptedCredentials::class => $this->denormalizeEncryptedCredentials($data),
            PassportElementErrorDataField::class => $this->denormalizePassportElementErrorDataField($data),
            PassportElementErrorFrontSide::class => $this->denormalizePassportElementErrorFrontSide($data),
            PassportElementErrorReverseSide::class => $this->denormalizePassportElementErrorReverseSide($data),
            PassportElementErrorSelfie::class => $this->denormalizePassportElementErrorSelfie($data),
            PassportElementErrorFile::class => $this->denormalizePassportElementErrorFile($data),
            PassportElementErrorFiles::class => $this->denormalizePassportElementErrorFiles($data),
            PassportElementErrorTranslationFile::class => $this->denormalizePassportElementErrorTranslationFile($data),
            PassportElementErrorTranslationFiles::class => $this->denormalizePassportElementErrorTranslationFiles($data),
            PassportElementErrorUnspecified::class => $this->denormalizePassportElementErrorUnspecified($data),
            Game::class => $this->denormalizeGame($data),
            CallbackGame::class => $this->denormalizeCallbackGame($data),
            GameHighScore::class => $this->denormalizeGameHighScore($data),
            default => throw new \InvalidArgumentException(sprintf('Unknown type %s', $type)),
        };
    }

    private function normalize(array $data): array
    {
        $result = [];

        foreach ($data as $key => $value) {
            if (is_null($value)) {
                continue;
            }

            $snakeKey = $this->camelToSnake($key);

            if ($value instanceof TypeInterface && !$value instanceof InputFile) {
                $value = get_object_vars($value);
            }

            if (is_array($value)) {
                $result[$snakeKey] = $this->normalize($value);
            } else {
                $result[$snakeKey] = $value;
            }
        }

        return $result;
    }

    private function camelToSnake(string $input): string
    {
        return strtolower(preg_replace('/[A-Z]/', '_$0', lcfirst($input)));
    }
}
