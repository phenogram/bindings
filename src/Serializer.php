<?php

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\Interfaces\AcceptedGiftTypesInterface;
use Phenogram\Bindings\Types\Interfaces\AffiliateInfoInterface;
use Phenogram\Bindings\Types\Interfaces\AnimationInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillFreeformGradientInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillGradientInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundFillSolidInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeChatThemeInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeFillInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypePatternInterface;
use Phenogram\Bindings\Types\Interfaces\BackgroundTypeWallpaperInterface;
use Phenogram\Bindings\Types\Interfaces\BirthdateInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllChatAdministratorsInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllGroupChatsInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeAllPrivateChatsInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatAdministratorsInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeChatMemberInterface;
use Phenogram\Bindings\Types\Interfaces\BotCommandScopeDefaultInterface;
use Phenogram\Bindings\Types\Interfaces\BotDescriptionInterface;
use Phenogram\Bindings\Types\Interfaces\BotNameInterface;
use Phenogram\Bindings\Types\Interfaces\BotShortDescriptionInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessBotRightsInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessConnectionInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessIntroInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessLocationInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessMessagesDeletedInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursIntervalInterface;
use Phenogram\Bindings\Types\Interfaces\CallbackGameInterface;
use Phenogram\Bindings\Types\Interfaces\CallbackQueryInterface;
use Phenogram\Bindings\Types\Interfaces\ChatAdministratorRightsInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBackgroundInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostAddedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostRemovedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourceGiftCodeInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourceGiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostSourcePremiumInterface;
use Phenogram\Bindings\Types\Interfaces\ChatBoostUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatFullInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInviteLinkInterface;
use Phenogram\Bindings\Types\Interfaces\ChatJoinRequestInterface;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberAdministratorInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberBannedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberLeftInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberMemberInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberOwnerInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberRestrictedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatMemberUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\ChatPermissionsInterface;
use Phenogram\Bindings\Types\Interfaces\ChatPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\ChatSharedInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistTasksAddedInterface;
use Phenogram\Bindings\Types\Interfaces\ChecklistTasksDoneInterface;
use Phenogram\Bindings\Types\Interfaces\ChosenInlineResultInterface;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;
use Phenogram\Bindings\Types\Interfaces\CopyTextButtonInterface;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;
use Phenogram\Bindings\Types\Interfaces\DirectMessagePriceChangedInterface;
use Phenogram\Bindings\Types\Interfaces\DocumentInterface;
use Phenogram\Bindings\Types\Interfaces\EncryptedCredentialsInterface;
use Phenogram\Bindings\Types\Interfaces\EncryptedPassportElementInterface;
use Phenogram\Bindings\Types\Interfaces\ExternalReplyInfoInterface;
use Phenogram\Bindings\Types\Interfaces\FileInterface;
use Phenogram\Bindings\Types\Interfaces\ForceReplyInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicClosedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicEditedInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicInterface;
use Phenogram\Bindings\Types\Interfaces\ForumTopicReopenedInterface;
use Phenogram\Bindings\Types\Interfaces\GameHighScoreInterface;
use Phenogram\Bindings\Types\Interfaces\GameInterface;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicHiddenInterface;
use Phenogram\Bindings\Types\Interfaces\GeneralForumTopicUnhiddenInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\GiftInterface;
use Phenogram\Bindings\Types\Interfaces\GiftsInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCompletedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayCreatedInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayInterface;
use Phenogram\Bindings\Types\Interfaces\GiveawayWinnersInterface;
use Phenogram\Bindings\Types\Interfaces\InaccessibleMessageInterface;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardButtonInterface;
use Phenogram\Bindings\Types\Interfaces\InlineKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultArticleInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedGifInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedMpeg4GifInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedStickerInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultCachedVoiceInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultContactInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultGameInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultGifInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultLocationInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultMpeg4GifInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultsButtonInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVenueInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InlineQueryResultVoiceInterface;
use Phenogram\Bindings\Types\Interfaces\InputChecklistInterface;
use Phenogram\Bindings\Types\Interfaces\InputChecklistTaskInterface;
use Phenogram\Bindings\Types\Interfaces\InputContactMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputFileInterface;
use Phenogram\Bindings\Types\Interfaces\InputInvoiceMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputLocationMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaAnimationInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaAudioInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaDocumentInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputPaidMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputPaidMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputPollOptionInterface;
use Phenogram\Bindings\Types\Interfaces\InputProfilePhotoAnimatedInterface;
use Phenogram\Bindings\Types\Interfaces\InputProfilePhotoStaticInterface;
use Phenogram\Bindings\Types\Interfaces\InputStickerInterface;
use Phenogram\Bindings\Types\Interfaces\InputStoryContentPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\InputStoryContentVideoInterface;
use Phenogram\Bindings\Types\Interfaces\InputTextMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputVenueMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonPollTypeInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestChatInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestUsersInterface;
use Phenogram\Bindings\Types\Interfaces\LabeledPriceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\Interfaces\LocationAddressInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\LoginUrlInterface;
use Phenogram\Bindings\Types\Interfaces\MaskPositionInterface;
use Phenogram\Bindings\Types\Interfaces\MenuButtonCommandsInterface;
use Phenogram\Bindings\Types\Interfaces\MenuButtonDefaultInterface;
use Phenogram\Bindings\Types\Interfaces\MenuButtonWebAppInterface;
use Phenogram\Bindings\Types\Interfaces\MessageAutoDeleteTimerChangedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageEntityInterface;
use Phenogram\Bindings\Types\Interfaces\MessageIdInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginChannelInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginChatInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginHiddenUserInterface;
use Phenogram\Bindings\Types\Interfaces\MessageOriginUserInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionCountUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\MessageReactionUpdatedInterface;
use Phenogram\Bindings\Types\Interfaces\OrderInfoInterface;
use Phenogram\Bindings\Types\Interfaces\OwnedGiftRegularInterface;
use Phenogram\Bindings\Types\Interfaces\OwnedGiftsInterface;
use Phenogram\Bindings\Types\Interfaces\OwnedGiftUniqueInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPreviewInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPurchasedInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaVideoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMessagePriceChangedInterface;
use Phenogram\Bindings\Types\Interfaces\PassportDataInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorDataFieldInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFileInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFilesInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorFrontSideInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorReverseSideInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorSelfieInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorTranslationFileInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorTranslationFilesInterface;
use Phenogram\Bindings\Types\Interfaces\PassportElementErrorUnspecifiedInterface;
use Phenogram\Bindings\Types\Interfaces\PassportFileInterface;
use Phenogram\Bindings\Types\Interfaces\PhotoSizeInterface;
use Phenogram\Bindings\Types\Interfaces\PollAnswerInterface;
use Phenogram\Bindings\Types\Interfaces\PollInterface;
use Phenogram\Bindings\Types\Interfaces\PollOptionInterface;
use Phenogram\Bindings\Types\Interfaces\PreCheckoutQueryInterface;
use Phenogram\Bindings\Types\Interfaces\PreparedInlineMessageInterface;
use Phenogram\Bindings\Types\Interfaces\ProximityAlertTriggeredInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionCountInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionTypeCustomEmojiInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionTypeEmojiInterface;
use Phenogram\Bindings\Types\Interfaces\ReactionTypePaidInterface;
use Phenogram\Bindings\Types\Interfaces\RefundedPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\ReplyKeyboardMarkupInterface;
use Phenogram\Bindings\Types\Interfaces\ReplyKeyboardRemoveInterface;
use Phenogram\Bindings\Types\Interfaces\ReplyParametersInterface;
use Phenogram\Bindings\Types\Interfaces\ResponseParametersInterface;
use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateFailedInterface;
use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStatePendingInterface;
use Phenogram\Bindings\Types\Interfaces\RevenueWithdrawalStateSucceededInterface;
use Phenogram\Bindings\Types\Interfaces\SentWebAppMessageInterface;
use Phenogram\Bindings\Types\Interfaces\SharedUserInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingAddressInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingOptionInterface;
use Phenogram\Bindings\Types\Interfaces\ShippingQueryInterface;
use Phenogram\Bindings\Types\Interfaces\StarAmountInterface;
use Phenogram\Bindings\Types\Interfaces\StarTransactionInterface;
use Phenogram\Bindings\Types\Interfaces\StarTransactionsInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StickerSetInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaPositionInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeLinkInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeLocationInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeSuggestedReactionInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeUniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\StoryAreaTypeWeatherInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\SuccessfulPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerAffiliateProgramInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerChatInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerFragmentInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerOtherInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramAdsInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramApiInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerUserInterface;
use Phenogram\Bindings\Types\Interfaces\TypeInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftSymbolInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;
use Phenogram\Bindings\Types\Interfaces\UserChatBoostsInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\UserProfilePhotosInterface;
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
use Phenogram\Bindings\Types\Interfaces\WebAppInfoInterface;
use Phenogram\Bindings\Types\Interfaces\WebhookInfoInterface;
use Phenogram\Bindings\Types\Interfaces\WriteAccessAllowedInterface;

class Serializer implements SerializerInterface
{
    public function __construct(
        private readonly FactoryInterface $factory = new Factory(),
    ) {
    }

    public function denormalizeUpdate(array $data): UpdateInterface
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

    public function denormalizeWebhookInfo(array $data): WebhookInfoInterface
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

    public function denormalizeUser(array $data): UserInterface
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

    public function denormalizeChat(array $data): ChatInterface
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

    public function denormalizeChatFullInfo(array $data): ChatFullInfoInterface
    {
        $requiredFields = [
            'id',
            'type',
            'accent_color_id',
            'max_reaction_count',
            'accepted_gift_types',
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
            acceptedGiftTypes: $this->denormalizeAcceptedGiftTypes($data['accepted_gift_types']),
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

    public function denormalizeMessage(array $data): MessageInterface
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
            paidStarCount: $data['paid_star_count'] ?? null,
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
            checklist: isset($data['checklist'])
                ? $this->denormalizeChecklist($data['checklist'])
                : null,
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
            gift: isset($data['gift'])
                ? $this->denormalizeGiftInfo($data['gift'])
                : null,
            uniqueGift: isset($data['unique_gift'])
                ? $this->denormalizeUniqueGiftInfo($data['unique_gift'])
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
            checklistTasksDone: isset($data['checklist_tasks_done'])
                ? $this->denormalizeChecklistTasksDone($data['checklist_tasks_done'])
                : null,
            checklistTasksAdded: isset($data['checklist_tasks_added'])
                ? $this->denormalizeChecklistTasksAdded($data['checklist_tasks_added'])
                : null,
            directMessagePriceChanged: isset($data['direct_message_price_changed'])
                ? $this->denormalizeDirectMessagePriceChanged($data['direct_message_price_changed'])
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
            paidMessagePriceChanged: isset($data['paid_message_price_changed'])
                ? $this->denormalizePaidMessagePriceChanged($data['paid_message_price_changed'])
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

    public function denormalizeMessageId(array $data): MessageIdInterface
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

    public function denormalizeInaccessibleMessage(array $data): InaccessibleMessageInterface
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

    public function denormalizeMessageEntity(array $data): MessageEntityInterface
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

    public function denormalizeTextQuote(array $data): TextQuoteInterface
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

    public function denormalizeExternalReplyInfo(array $data): ExternalReplyInfoInterface
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
            checklist: isset($data['checklist'])
                ? $this->denormalizeChecklist($data['checklist'])
                : null,
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

    public function denormalizeReplyParameters(array $data): ReplyParametersInterface
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

    public function denormalizeMessageOriginUser(array $data): MessageOriginUserInterface
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

    public function denormalizeMessageOriginHiddenUser(array $data): MessageOriginHiddenUserInterface
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

    public function denormalizeMessageOriginChat(array $data): MessageOriginChatInterface
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

    public function denormalizeMessageOriginChannel(array $data): MessageOriginChannelInterface
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

    public function denormalizePhotoSize(array $data): PhotoSizeInterface
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

    public function denormalizeAnimation(array $data): AnimationInterface
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

    public function denormalizeAudio(array $data): AudioInterface
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

    public function denormalizeDocument(array $data): DocumentInterface
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

    public function denormalizeStory(array $data): StoryInterface
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

    public function denormalizeVideo(array $data): VideoInterface
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
            cover: isset($data['cover'])
                ? array_map(fn (array $item) => $this->denormalizePhotoSize($item), $data['cover'])
                : null,
            startTimestamp: $data['start_timestamp'] ?? null,
            fileName: $data['file_name'] ?? null,
            mimeType: $data['mime_type'] ?? null,
            fileSize: $data['file_size'] ?? null,
        );
    }

    public function denormalizeVideoNote(array $data): VideoNoteInterface
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

    public function denormalizeVoice(array $data): VoiceInterface
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

    public function denormalizePaidMediaInfo(array $data): PaidMediaInfoInterface
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
        return match ($data['type']) {
            'preview' => $this->denormalizePaidMediaPreview($data),
            'photo' => $this->denormalizePaidMediaPhoto($data),
            'video' => $this->denormalizePaidMediaVideo($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for PaidMedia: %s', $data['type'])),
        };
    }

    public function denormalizePaidMediaPreview(array $data): PaidMediaPreviewInterface
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

    public function denormalizePaidMediaPhoto(array $data): PaidMediaPhotoInterface
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

    public function denormalizePaidMediaVideo(array $data): PaidMediaVideoInterface
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

    public function denormalizeContact(array $data): ContactInterface
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

    public function denormalizeDice(array $data): DiceInterface
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

    public function denormalizePollOption(array $data): PollOptionInterface
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

    public function denormalizeInputPollOption(array $data): InputPollOptionInterface
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

    public function denormalizePollAnswer(array $data): PollAnswerInterface
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

    public function denormalizePoll(array $data): PollInterface
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

    public function denormalizeChecklistTask(array $data): ChecklistTaskInterface
    {
        $requiredFields = [
            'id',
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChecklistTask missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChecklistTask(
            id: $data['id'],
            text: $data['text'],
            textEntities: isset($data['text_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['text_entities'])
                : null,
            completedByUser: isset($data['completed_by_user'])
                ? $this->denormalizeUser($data['completed_by_user'])
                : null,
            completionDate: $data['completion_date'] ?? null,
        );
    }

    public function denormalizeChecklist(array $data): ChecklistInterface
    {
        $requiredFields = [
            'title',
            'tasks',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class Checklist missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChecklist(
            title: $data['title'],
            tasks: array_map(fn (array $item) => $this->denormalizeChecklistTask($item), $data['tasks']),
            titleEntities: isset($data['title_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['title_entities'])
                : null,
            othersCanAddTasks: $data['others_can_add_tasks'] ?? null,
            othersCanMarkTasksAsDone: $data['others_can_mark_tasks_as_done'] ?? null,
        );
    }

    public function denormalizeInputChecklistTask(array $data): InputChecklistTaskInterface
    {
        $requiredFields = [
            'id',
            'text',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputChecklistTask missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputChecklistTask(
            id: $data['id'],
            text: $data['text'],
            parseMode: $data['parse_mode'] ?? null,
            textEntities: isset($data['text_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['text_entities'])
                : null,
        );
    }

    public function denormalizeInputChecklist(array $data): InputChecklistInterface
    {
        $requiredFields = [
            'title',
            'tasks',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputChecklist missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputChecklist(
            title: $data['title'],
            tasks: array_map(fn (array $item) => $this->denormalizeInputChecklistTask($item), $data['tasks']),
            parseMode: $data['parse_mode'] ?? null,
            titleEntities: isset($data['title_entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['title_entities'])
                : null,
            othersCanAddTasks: $data['others_can_add_tasks'] ?? null,
            othersCanMarkTasksAsDone: $data['others_can_mark_tasks_as_done'] ?? null,
        );
    }

    public function denormalizeChecklistTasksDone(array $data): ChecklistTasksDoneInterface
    {
        return $this->factory->makeChecklistTasksDone(
            checklistMessage: isset($data['checklist_message'])
                ? $this->denormalizeMessage($data['checklist_message'])
                : null,
            markedAsDoneTaskIds: $data['marked_as_done_task_ids'] ?? null,
            markedAsNotDoneTaskIds: $data['marked_as_not_done_task_ids'] ?? null,
        );
    }

    public function denormalizeChecklistTasksAdded(array $data): ChecklistTasksAddedInterface
    {
        $requiredFields = [
            'tasks',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class ChecklistTasksAdded missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeChecklistTasksAdded(
            tasks: array_map(fn (array $item) => $this->denormalizeChecklistTask($item), $data['tasks']),
            checklistMessage: isset($data['checklist_message'])
                ? $this->denormalizeMessage($data['checklist_message'])
                : null,
        );
    }

    public function denormalizeLocation(array $data): LocationInterface
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

    public function denormalizeVenue(array $data): VenueInterface
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

    public function denormalizeWebAppData(array $data): WebAppDataInterface
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

    public function denormalizeProximityAlertTriggered(array $data): ProximityAlertTriggeredInterface
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

    public function denormalizeMessageAutoDeleteTimerChanged(array $data): MessageAutoDeleteTimerChangedInterface
    {
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

    public function denormalizeChatBoostAdded(array $data): ChatBoostAddedInterface
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
        return match ($data['type']) {
            'solid' => $this->denormalizeBackgroundFillSolid($data),
            'gradient' => $this->denormalizeBackgroundFillGradient($data),
            'freeform_gradient' => $this->denormalizeBackgroundFillFreeformGradient($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for BackgroundFill: %s', $data['type'])),
        };
    }

    public function denormalizeBackgroundFillSolid(array $data): BackgroundFillSolidInterface
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

    public function denormalizeBackgroundFillGradient(array $data): BackgroundFillGradientInterface
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

    public function denormalizeBackgroundFillFreeformGradient(array $data): BackgroundFillFreeformGradientInterface
    {
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
        return match ($data['type']) {
            'fill' => $this->denormalizeBackgroundTypeFill($data),
            'wallpaper' => $this->denormalizeBackgroundTypeWallpaper($data),
            'pattern' => $this->denormalizeBackgroundTypePattern($data),
            'chat_theme' => $this->denormalizeBackgroundTypeChatTheme($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for BackgroundType: %s', $data['type'])),
        };
    }

    public function denormalizeBackgroundTypeFill(array $data): BackgroundTypeFillInterface
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

    public function denormalizeBackgroundTypeWallpaper(array $data): BackgroundTypeWallpaperInterface
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

    public function denormalizeBackgroundTypePattern(array $data): BackgroundTypePatternInterface
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

    public function denormalizeBackgroundTypeChatTheme(array $data): BackgroundTypeChatThemeInterface
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

    public function denormalizeChatBackground(array $data): ChatBackgroundInterface
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

    public function denormalizeForumTopicCreated(array $data): ForumTopicCreatedInterface
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

    public function denormalizeForumTopicClosed(array $data): ForumTopicClosedInterface
    {
        return $this->factory->makeForumTopicClosed();
    }

    public function denormalizeForumTopicEdited(array $data): ForumTopicEditedInterface
    {
        return $this->factory->makeForumTopicEdited(
            name: $data['name'] ?? null,
            iconCustomEmojiId: $data['icon_custom_emoji_id'] ?? null,
        );
    }

    public function denormalizeForumTopicReopened(array $data): ForumTopicReopenedInterface
    {
        return $this->factory->makeForumTopicReopened();
    }

    public function denormalizeGeneralForumTopicHidden(array $data): GeneralForumTopicHiddenInterface
    {
        return $this->factory->makeGeneralForumTopicHidden();
    }

    public function denormalizeGeneralForumTopicUnhidden(array $data): GeneralForumTopicUnhiddenInterface
    {
        return $this->factory->makeGeneralForumTopicUnhidden();
    }

    public function denormalizeSharedUser(array $data): SharedUserInterface
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

    public function denormalizeUsersShared(array $data): UsersSharedInterface
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

    public function denormalizeChatShared(array $data): ChatSharedInterface
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

    public function denormalizeWriteAccessAllowed(array $data): WriteAccessAllowedInterface
    {
        return $this->factory->makeWriteAccessAllowed(
            fromRequest: $data['from_request'] ?? null,
            webAppName: $data['web_app_name'] ?? null,
            fromAttachmentMenu: $data['from_attachment_menu'] ?? null,
        );
    }

    public function denormalizeVideoChatScheduled(array $data): VideoChatScheduledInterface
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

    public function denormalizeVideoChatStarted(array $data): VideoChatStartedInterface
    {
        return $this->factory->makeVideoChatStarted();
    }

    public function denormalizeVideoChatEnded(array $data): VideoChatEndedInterface
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

    public function denormalizeVideoChatParticipantsInvited(array $data): VideoChatParticipantsInvitedInterface
    {
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

    public function denormalizePaidMessagePriceChanged(array $data): PaidMessagePriceChangedInterface
    {
        $requiredFields = [
            'paid_message_star_count',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class PaidMessagePriceChanged missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePaidMessagePriceChanged(
            paidMessageStarCount: $data['paid_message_star_count'],
        );
    }

    public function denormalizeDirectMessagePriceChanged(array $data): DirectMessagePriceChangedInterface
    {
        $requiredFields = [
            'are_direct_messages_enabled',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class DirectMessagePriceChanged missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeDirectMessagePriceChanged(
            areDirectMessagesEnabled: $data['are_direct_messages_enabled'],
            directMessageStarCount: $data['direct_message_star_count'] ?? null,
        );
    }

    public function denormalizeGiveawayCreated(array $data): GiveawayCreatedInterface
    {
        return $this->factory->makeGiveawayCreated(
            prizeStarCount: $data['prize_star_count'] ?? null,
        );
    }

    public function denormalizeGiveaway(array $data): GiveawayInterface
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

    public function denormalizeGiveawayWinners(array $data): GiveawayWinnersInterface
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

    public function denormalizeGiveawayCompleted(array $data): GiveawayCompletedInterface
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

    public function denormalizeLinkPreviewOptions(array $data): LinkPreviewOptionsInterface
    {
        return $this->factory->makeLinkPreviewOptions(
            isDisabled: $data['is_disabled'] ?? null,
            url: $data['url'] ?? null,
            preferSmallMedia: $data['prefer_small_media'] ?? null,
            preferLargeMedia: $data['prefer_large_media'] ?? null,
            showAboveText: $data['show_above_text'] ?? null,
        );
    }

    public function denormalizeUserProfilePhotos(array $data): UserProfilePhotosInterface
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

    public function denormalizeFile(array $data): FileInterface
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

    public function denormalizeWebAppInfo(array $data): WebAppInfoInterface
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

    public function denormalizeReplyKeyboardMarkup(array $data): ReplyKeyboardMarkupInterface
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

    public function denormalizeKeyboardButton(array $data): KeyboardButtonInterface
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

    public function denormalizeKeyboardButtonRequestUsers(array $data): KeyboardButtonRequestUsersInterface
    {
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

    public function denormalizeKeyboardButtonRequestChat(array $data): KeyboardButtonRequestChatInterface
    {
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

    public function denormalizeKeyboardButtonPollType(array $data): KeyboardButtonPollTypeInterface
    {
        return $this->factory->makeKeyboardButtonPollType(
            type: $data['type'] ?? null,
        );
    }

    public function denormalizeReplyKeyboardRemove(array $data): ReplyKeyboardRemoveInterface
    {
        return $this->factory->makeReplyKeyboardRemove(
            removeKeyboard: $data['remove_keyboard'] ?? true,
            selective: $data['selective'] ?? null,
        );
    }

    public function denormalizeInlineKeyboardMarkup(array $data): InlineKeyboardMarkupInterface
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

    public function denormalizeInlineKeyboardButton(array $data): InlineKeyboardButtonInterface
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

    public function denormalizeLoginUrl(array $data): LoginUrlInterface
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

    public function denormalizeSwitchInlineQueryChosenChat(array $data): SwitchInlineQueryChosenChatInterface
    {
        return $this->factory->makeSwitchInlineQueryChosenChat(
            query: $data['query'] ?? null,
            allowUserChats: $data['allow_user_chats'] ?? null,
            allowBotChats: $data['allow_bot_chats'] ?? null,
            allowGroupChats: $data['allow_group_chats'] ?? null,
            allowChannelChats: $data['allow_channel_chats'] ?? null,
        );
    }

    public function denormalizeCopyTextButton(array $data): CopyTextButtonInterface
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

    public function denormalizeCallbackQuery(array $data): CallbackQueryInterface
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

    public function denormalizeForceReply(array $data): ForceReplyInterface
    {
        return $this->factory->makeForceReply(
            forceReply: $data['force_reply'] ?? true,
            inputFieldPlaceholder: $data['input_field_placeholder'] ?? null,
            selective: $data['selective'] ?? null,
        );
    }

    public function denormalizeChatPhoto(array $data): ChatPhotoInterface
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

    public function denormalizeChatInviteLink(array $data): ChatInviteLinkInterface
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

    public function denormalizeChatAdministratorRights(array $data): ChatAdministratorRightsInterface
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

    public function denormalizeChatMemberUpdated(array $data): ChatMemberUpdatedInterface
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

    public function denormalizeChatMemberOwner(array $data): ChatMemberOwnerInterface
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

    public function denormalizeChatMemberAdministrator(array $data): ChatMemberAdministratorInterface
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

    public function denormalizeChatMemberMember(array $data): ChatMemberMemberInterface
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

    public function denormalizeChatMemberRestricted(array $data): ChatMemberRestrictedInterface
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

    public function denormalizeChatMemberLeft(array $data): ChatMemberLeftInterface
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

    public function denormalizeChatMemberBanned(array $data): ChatMemberBannedInterface
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

    public function denormalizeChatJoinRequest(array $data): ChatJoinRequestInterface
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

    public function denormalizeChatPermissions(array $data): ChatPermissionsInterface
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

    public function denormalizeBirthdate(array $data): BirthdateInterface
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

    public function denormalizeBusinessIntro(array $data): BusinessIntroInterface
    {
        return $this->factory->makeBusinessIntro(
            title: $data['title'] ?? null,
            message: $data['message'] ?? null,
            sticker: isset($data['sticker'])
                ? $this->denormalizeSticker($data['sticker'])
                : null,
        );
    }

    public function denormalizeBusinessLocation(array $data): BusinessLocationInterface
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

    public function denormalizeBusinessOpeningHoursInterval(array $data): BusinessOpeningHoursIntervalInterface
    {
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

    public function denormalizeBusinessOpeningHours(array $data): BusinessOpeningHoursInterface
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

    public function denormalizeStoryAreaPosition(array $data): StoryAreaPositionInterface
    {
        $requiredFields = [
            'x_percentage',
            'y_percentage',
            'width_percentage',
            'height_percentage',
            'rotation_angle',
            'corner_radius_percentage',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryAreaPosition missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaPosition(
            xPercentage: $data['x_percentage'],
            yPercentage: $data['y_percentage'],
            widthPercentage: $data['width_percentage'],
            heightPercentage: $data['height_percentage'],
            rotationAngle: $data['rotation_angle'],
            cornerRadiusPercentage: $data['corner_radius_percentage'],
        );
    }

    public function denormalizeLocationAddress(array $data): LocationAddressInterface
    {
        $requiredFields = [
            'country_code',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class LocationAddress missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeLocationAddress(
            countryCode: $data['country_code'],
            state: $data['state'] ?? null,
            city: $data['city'] ?? null,
            street: $data['street'] ?? null,
        );
    }

    public function denormalizeStoryAreaType(array $data): Types\Interfaces\StoryAreaTypeInterface
    {
        throw new \RuntimeException('class StoryAreaType is abstract and not yet implemented');
    }

    public function denormalizeStoryAreaTypeLocation(array $data): StoryAreaTypeLocationInterface
    {
        $requiredFields = [
            'type',
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
            throw new \InvalidArgumentException(sprintf('Class StoryAreaTypeLocation missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaTypeLocation(
            type: $data['type'],
            latitude: $data['latitude'],
            longitude: $data['longitude'],
            address: isset($data['address'])
                ? $this->denormalizeLocationAddress($data['address'])
                : null,
        );
    }

    public function denormalizeStoryAreaTypeSuggestedReaction(array $data): StoryAreaTypeSuggestedReactionInterface
    {
        $requiredFields = [
            'type',
            'reaction_type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryAreaTypeSuggestedReaction missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaTypeSuggestedReaction(
            type: $data['type'],
            reactionType: $this->denormalizeReactionType($data['reaction_type']),
            isDark: $data['is_dark'] ?? null,
            isFlipped: $data['is_flipped'] ?? null,
        );
    }

    public function denormalizeStoryAreaTypeLink(array $data): StoryAreaTypeLinkInterface
    {
        $requiredFields = [
            'type',
            'url',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryAreaTypeLink missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaTypeLink(
            type: $data['type'],
            url: $data['url'],
        );
    }

    public function denormalizeStoryAreaTypeWeather(array $data): StoryAreaTypeWeatherInterface
    {
        $requiredFields = [
            'type',
            'temperature',
            'emoji',
            'background_color',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryAreaTypeWeather missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaTypeWeather(
            type: $data['type'],
            temperature: $data['temperature'],
            emoji: $data['emoji'],
            backgroundColor: $data['background_color'],
        );
    }

    public function denormalizeStoryAreaTypeUniqueGift(array $data): StoryAreaTypeUniqueGiftInterface
    {
        $requiredFields = [
            'type',
            'name',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryAreaTypeUniqueGift missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryAreaTypeUniqueGift(
            type: $data['type'],
            name: $data['name'],
        );
    }

    public function denormalizeStoryArea(array $data): StoryAreaInterface
    {
        $requiredFields = [
            'position',
            'type',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StoryArea missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStoryArea(
            position: $this->denormalizeStoryAreaPosition($data['position']),
            type: $this->denormalizeStoryAreaType($data['type']),
        );
    }

    public function denormalizeChatLocation(array $data): ChatLocationInterface
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

    public function denormalizeReactionTypeEmoji(array $data): ReactionTypeEmojiInterface
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

    public function denormalizeReactionTypeCustomEmoji(array $data): ReactionTypeCustomEmojiInterface
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

    public function denormalizeReactionTypePaid(array $data): ReactionTypePaidInterface
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

    public function denormalizeReactionCount(array $data): ReactionCountInterface
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

    public function denormalizeMessageReactionUpdated(array $data): MessageReactionUpdatedInterface
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

    public function denormalizeMessageReactionCountUpdated(array $data): MessageReactionCountUpdatedInterface
    {
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

    public function denormalizeForumTopic(array $data): ForumTopicInterface
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

    public function denormalizeGift(array $data): GiftInterface
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
            upgradeStarCount: $data['upgrade_star_count'] ?? null,
            totalCount: $data['total_count'] ?? null,
            remainingCount: $data['remaining_count'] ?? null,
        );
    }

    public function denormalizeGifts(array $data): GiftsInterface
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

    public function denormalizeUniqueGiftModel(array $data): UniqueGiftModelInterface
    {
        $requiredFields = [
            'name',
            'sticker',
            'rarity_per_mille',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGiftModel missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGiftModel(
            name: $data['name'],
            sticker: $this->denormalizeSticker($data['sticker']),
            rarityPerMille: $data['rarity_per_mille'],
        );
    }

    public function denormalizeUniqueGiftSymbol(array $data): UniqueGiftSymbolInterface
    {
        $requiredFields = [
            'name',
            'sticker',
            'rarity_per_mille',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGiftSymbol missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGiftSymbol(
            name: $data['name'],
            sticker: $this->denormalizeSticker($data['sticker']),
            rarityPerMille: $data['rarity_per_mille'],
        );
    }

    public function denormalizeUniqueGiftBackdropColors(array $data): UniqueGiftBackdropColorsInterface
    {
        $requiredFields = [
            'center_color',
            'edge_color',
            'symbol_color',
            'text_color',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGiftBackdropColors missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGiftBackdropColors(
            centerColor: $data['center_color'],
            edgeColor: $data['edge_color'],
            symbolColor: $data['symbol_color'],
            textColor: $data['text_color'],
        );
    }

    public function denormalizeUniqueGiftBackdrop(array $data): UniqueGiftBackdropInterface
    {
        $requiredFields = [
            'name',
            'colors',
            'rarity_per_mille',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGiftBackdrop missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGiftBackdrop(
            name: $data['name'],
            colors: $this->denormalizeUniqueGiftBackdropColors($data['colors']),
            rarityPerMille: $data['rarity_per_mille'],
        );
    }

    public function denormalizeUniqueGift(array $data): UniqueGiftInterface
    {
        $requiredFields = [
            'base_name',
            'name',
            'number',
            'model',
            'symbol',
            'backdrop',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGift missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGift(
            baseName: $data['base_name'],
            name: $data['name'],
            number: $data['number'],
            model: $this->denormalizeUniqueGiftModel($data['model']),
            symbol: $this->denormalizeUniqueGiftSymbol($data['symbol']),
            backdrop: $this->denormalizeUniqueGiftBackdrop($data['backdrop']),
        );
    }

    public function denormalizeGiftInfo(array $data): GiftInfoInterface
    {
        $requiredFields = [
            'gift',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class GiftInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeGiftInfo(
            gift: $this->denormalizeGift($data['gift']),
            ownedGiftId: $data['owned_gift_id'] ?? null,
            convertStarCount: $data['convert_star_count'] ?? null,
            prepaidUpgradeStarCount: $data['prepaid_upgrade_star_count'] ?? null,
            canBeUpgraded: $data['can_be_upgraded'] ?? null,
            text: $data['text'] ?? null,
            entities: isset($data['entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['entities'])
                : null,
            isPrivate: $data['is_private'] ?? null,
        );
    }

    public function denormalizeUniqueGiftInfo(array $data): UniqueGiftInfoInterface
    {
        $requiredFields = [
            'gift',
            'origin',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class UniqueGiftInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeUniqueGiftInfo(
            gift: $this->denormalizeUniqueGift($data['gift']),
            origin: $data['origin'],
            lastResaleStarCount: $data['last_resale_star_count'] ?? null,
            ownedGiftId: $data['owned_gift_id'] ?? null,
            transferStarCount: $data['transfer_star_count'] ?? null,
            nextTransferDate: $data['next_transfer_date'] ?? null,
        );
    }

    public function denormalizeOwnedGift(array $data): Types\Interfaces\OwnedGiftInterface
    {
        throw new \RuntimeException('class OwnedGift is abstract and not yet implemented');
    }

    public function denormalizeOwnedGiftRegular(array $data): OwnedGiftRegularInterface
    {
        $requiredFields = [
            'type',
            'gift',
            'send_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class OwnedGiftRegular missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeOwnedGiftRegular(
            type: $data['type'],
            gift: $this->denormalizeGift($data['gift']),
            sendDate: $data['send_date'],
            ownedGiftId: $data['owned_gift_id'] ?? null,
            senderUser: isset($data['sender_user'])
                ? $this->denormalizeUser($data['sender_user'])
                : null,
            text: $data['text'] ?? null,
            entities: isset($data['entities'])
                ? array_map(fn (array $item) => $this->denormalizeMessageEntity($item), $data['entities'])
                : null,
            isPrivate: $data['is_private'] ?? null,
            isSaved: $data['is_saved'] ?? null,
            canBeUpgraded: $data['can_be_upgraded'] ?? null,
            wasRefunded: $data['was_refunded'] ?? null,
            convertStarCount: $data['convert_star_count'] ?? null,
            prepaidUpgradeStarCount: $data['prepaid_upgrade_star_count'] ?? null,
        );
    }

    public function denormalizeOwnedGiftUnique(array $data): OwnedGiftUniqueInterface
    {
        $requiredFields = [
            'type',
            'gift',
            'send_date',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class OwnedGiftUnique missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeOwnedGiftUnique(
            type: $data['type'],
            gift: $this->denormalizeUniqueGift($data['gift']),
            sendDate: $data['send_date'],
            ownedGiftId: $data['owned_gift_id'] ?? null,
            senderUser: isset($data['sender_user'])
                ? $this->denormalizeUser($data['sender_user'])
                : null,
            isSaved: $data['is_saved'] ?? null,
            canBeTransferred: $data['can_be_transferred'] ?? null,
            transferStarCount: $data['transfer_star_count'] ?? null,
            nextTransferDate: $data['next_transfer_date'] ?? null,
        );
    }

    public function denormalizeOwnedGifts(array $data): OwnedGiftsInterface
    {
        $requiredFields = [
            'total_count',
            'gifts',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class OwnedGifts missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeOwnedGifts(
            totalCount: $data['total_count'],
            gifts: array_map(fn (array $item) => $this->denormalizeOwnedGift($item), $data['gifts']),
            nextOffset: $data['next_offset'] ?? null,
        );
    }

    public function denormalizeAcceptedGiftTypes(array $data): AcceptedGiftTypesInterface
    {
        $requiredFields = [
            'unlimited_gifts',
            'limited_gifts',
            'unique_gifts',
            'premium_subscription',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class AcceptedGiftTypes missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeAcceptedGiftTypes(
            unlimitedGifts: $data['unlimited_gifts'],
            limitedGifts: $data['limited_gifts'],
            uniqueGifts: $data['unique_gifts'],
            premiumSubscription: $data['premium_subscription'],
        );
    }

    public function denormalizeStarAmount(array $data): StarAmountInterface
    {
        $requiredFields = [
            'amount',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class StarAmount missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeStarAmount(
            amount: $data['amount'],
            nanostarAmount: $data['nanostar_amount'] ?? null,
        );
    }

    public function denormalizeBotCommand(array $data): BotCommandInterface
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
        return match ($data['type']) {
            'default' => $this->denormalizeBotCommandScopeDefault($data),
            'all_private_chats' => $this->denormalizeBotCommandScopeAllPrivateChats($data),
            'all_group_chats' => $this->denormalizeBotCommandScopeAllGroupChats($data),
            'all_chat_administrators' => $this->denormalizeBotCommandScopeAllChatAdministrators($data),
            'chat' => $this->denormalizeBotCommandScopeChat($data),
            'chat_administrators' => $this->denormalizeBotCommandScopeChatAdministrators($data),
            'chat_member' => $this->denormalizeBotCommandScopeChatMember($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for BotCommandScope: %s', $data['type'])),
        };
    }

    public function denormalizeBotCommandScopeDefault(array $data): BotCommandScopeDefaultInterface
    {
        return $this->factory->makeBotCommandScopeDefault(
            type: $data['type'] ?? 'default',
        );
    }

    public function denormalizeBotCommandScopeAllPrivateChats(array $data): BotCommandScopeAllPrivateChatsInterface
    {
        return $this->factory->makeBotCommandScopeAllPrivateChats(
            type: $data['type'] ?? 'all_private_chats',
        );
    }

    public function denormalizeBotCommandScopeAllGroupChats(array $data): BotCommandScopeAllGroupChatsInterface
    {
        return $this->factory->makeBotCommandScopeAllGroupChats(
            type: $data['type'] ?? 'all_group_chats',
        );
    }

    public function denormalizeBotCommandScopeAllChatAdministrators(
        array $data,
    ): BotCommandScopeAllChatAdministratorsInterface {
        return $this->factory->makeBotCommandScopeAllChatAdministrators(
            type: $data['type'] ?? 'all_chat_administrators',
        );
    }

    public function denormalizeBotCommandScopeChat(array $data): BotCommandScopeChatInterface
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

    public function denormalizeBotCommandScopeChatAdministrators(array $data): BotCommandScopeChatAdministratorsInterface
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
            throw new \InvalidArgumentException(sprintf('Class BotCommandScopeChatAdministrators missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeBotCommandScopeChatAdministrators(
            chatId: $data['chat_id'],
            type: $data['type'] ?? 'chat_administrators',
        );
    }

    public function denormalizeBotCommandScopeChatMember(array $data): BotCommandScopeChatMemberInterface
    {
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

    public function denormalizeBotName(array $data): BotNameInterface
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

    public function denormalizeBotDescription(array $data): BotDescriptionInterface
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

    public function denormalizeBotShortDescription(array $data): BotShortDescriptionInterface
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
        return match ($data['type']) {
            'commands' => $this->denormalizeMenuButtonCommands($data),
            'web_app' => $this->denormalizeMenuButtonWebApp($data),
            'default' => $this->denormalizeMenuButtonDefault($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for MenuButton: %s', $data['type'])),
        };
    }

    public function denormalizeMenuButtonCommands(array $data): MenuButtonCommandsInterface
    {
        return $this->factory->makeMenuButtonCommands(
            type: $data['type'] ?? 'commands',
        );
    }

    public function denormalizeMenuButtonWebApp(array $data): MenuButtonWebAppInterface
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

    public function denormalizeMenuButtonDefault(array $data): MenuButtonDefaultInterface
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

    public function denormalizeChatBoostSourcePremium(array $data): ChatBoostSourcePremiumInterface
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

    public function denormalizeChatBoostSourceGiftCode(array $data): ChatBoostSourceGiftCodeInterface
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

    public function denormalizeChatBoostSourceGiveaway(array $data): ChatBoostSourceGiveawayInterface
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

    public function denormalizeChatBoost(array $data): ChatBoostInterface
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

    public function denormalizeChatBoostUpdated(array $data): ChatBoostUpdatedInterface
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

    public function denormalizeChatBoostRemoved(array $data): ChatBoostRemovedInterface
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

    public function denormalizeUserChatBoosts(array $data): UserChatBoostsInterface
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

    public function denormalizeBusinessBotRights(array $data): BusinessBotRightsInterface
    {
        return $this->factory->makeBusinessBotRights(
            canReply: $data['can_reply'] ?? null,
            canReadMessages: $data['can_read_messages'] ?? null,
            canDeleteSentMessages: $data['can_delete_sent_messages'] ?? null,
            canDeleteAllMessages: $data['can_delete_all_messages'] ?? null,
            canEditName: $data['can_edit_name'] ?? null,
            canEditBio: $data['can_edit_bio'] ?? null,
            canEditProfilePhoto: $data['can_edit_profile_photo'] ?? null,
            canEditUsername: $data['can_edit_username'] ?? null,
            canChangeGiftSettings: $data['can_change_gift_settings'] ?? null,
            canViewGiftsAndStars: $data['can_view_gifts_and_stars'] ?? null,
            canConvertGiftsToStars: $data['can_convert_gifts_to_stars'] ?? null,
            canTransferAndUpgradeGifts: $data['can_transfer_and_upgrade_gifts'] ?? null,
            canTransferStars: $data['can_transfer_stars'] ?? null,
            canManageStories: $data['can_manage_stories'] ?? null,
        );
    }

    public function denormalizeBusinessConnection(array $data): BusinessConnectionInterface
    {
        $requiredFields = [
            'id',
            'user',
            'user_chat_id',
            'date',
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
            isEnabled: $data['is_enabled'],
            rights: isset($data['rights'])
                ? $this->denormalizeBusinessBotRights($data['rights'])
                : null,
        );
    }

    public function denormalizeBusinessMessagesDeleted(array $data): BusinessMessagesDeletedInterface
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

    public function denormalizeResponseParameters(array $data): ResponseParametersInterface
    {
        return $this->factory->makeResponseParameters(
            migrateToChatId: $data['migrate_to_chat_id'] ?? null,
            retryAfter: $data['retry_after'] ?? null,
        );
    }

    public function denormalizeInputMedia(array $data): Types\Interfaces\InputMediaInterface
    {
        return match ($data['type']) {
            'photo' => $this->denormalizeInputMediaPhoto($data),
            'video' => $this->denormalizeInputMediaVideo($data),
            'animation' => $this->denormalizeInputMediaAnimation($data),
            'audio' => $this->denormalizeInputMediaAudio($data),
            'document' => $this->denormalizeInputMediaDocument($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for InputMedia: %s', $data['type'])),
        };
    }

    public function denormalizeInputMediaPhoto(array $data): InputMediaPhotoInterface
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

    public function denormalizeInputMediaVideo(array $data): InputMediaVideoInterface
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
            cover: $data['cover'] ?? null,
            startTimestamp: $data['start_timestamp'] ?? null,
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

    public function denormalizeInputMediaAnimation(array $data): InputMediaAnimationInterface
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

    public function denormalizeInputMediaAudio(array $data): InputMediaAudioInterface
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

    public function denormalizeInputMediaDocument(array $data): InputMediaDocumentInterface
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

    public function denormalizeInputPaidMedia(array $data): Types\Interfaces\InputPaidMediaInterface
    {
        return match ($data['type']) {
            'photo' => $this->denormalizeInputPaidMediaPhoto($data),
            'video' => $this->denormalizeInputPaidMediaVideo($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for InputPaidMedia: %s', $data['type'])),
        };
    }

    public function denormalizeInputPaidMediaPhoto(array $data): InputPaidMediaPhotoInterface
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

    public function denormalizeInputPaidMediaVideo(array $data): InputPaidMediaVideoInterface
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
            cover: $data['cover'] ?? null,
            startTimestamp: $data['start_timestamp'] ?? null,
            width: $data['width'] ?? null,
            height: $data['height'] ?? null,
            duration: $data['duration'] ?? null,
            supportsStreaming: $data['supports_streaming'] ?? null,
        );
    }

    public function denormalizeInputProfilePhoto(array $data): Types\Interfaces\InputProfilePhotoInterface
    {
        throw new \RuntimeException('class InputProfilePhoto is abstract and not yet implemented');
    }

    public function denormalizeInputProfilePhotoStatic(array $data): InputProfilePhotoStaticInterface
    {
        $requiredFields = [
            'photo',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputProfilePhotoStatic missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputProfilePhotoStatic(
            photo: $data['photo'],
            type: $data['type'] ?? 'static',
        );
    }

    public function denormalizeInputProfilePhotoAnimated(array $data): InputProfilePhotoAnimatedInterface
    {
        $requiredFields = [
            'animation',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputProfilePhotoAnimated missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputProfilePhotoAnimated(
            animation: $data['animation'],
            type: $data['type'] ?? 'animated',
            mainFrameTimestamp: $data['main_frame_timestamp'] ?? null,
        );
    }

    public function denormalizeInputStoryContent(array $data): Types\Interfaces\InputStoryContentInterface
    {
        throw new \RuntimeException('class InputStoryContent is abstract and not yet implemented');
    }

    public function denormalizeInputStoryContentPhoto(array $data): InputStoryContentPhotoInterface
    {
        $requiredFields = [
            'photo',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputStoryContentPhoto missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputStoryContentPhoto(
            photo: $data['photo'],
            type: $data['type'] ?? 'photo',
        );
    }

    public function denormalizeInputStoryContentVideo(array $data): InputStoryContentVideoInterface
    {
        $requiredFields = [
            'video',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class InputStoryContentVideo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputStoryContentVideo(
            video: $data['video'],
            type: $data['type'] ?? 'video',
            duration: $data['duration'] ?? null,
            coverFrameTimestamp: $data['cover_frame_timestamp'] ?? null,
            isAnimation: $data['is_animation'] ?? null,
        );
    }

    public function denormalizeSticker(array $data): StickerInterface
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

    public function denormalizeStickerSet(array $data): StickerSetInterface
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

    public function denormalizeMaskPosition(array $data): MaskPositionInterface
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

    public function denormalizeInputSticker(array $data): InputStickerInterface
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

    public function denormalizeInlineQuery(array $data): InlineQueryInterface
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

    public function denormalizeInlineQueryResultsButton(array $data): InlineQueryResultsButtonInterface
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
        return match ($data['type']) {
            'article' => $this->denormalizeInlineQueryResultArticle($data),
            'photo' => $this->denormalizeInlineQueryResultPhoto($data),
            'gif' => $this->denormalizeInlineQueryResultGif($data),
            'mpeg4_gif' => $this->denormalizeInlineQueryResultMpeg4Gif($data),
            'video' => $this->denormalizeInlineQueryResultVideo($data),
            'audio' => $this->denormalizeInlineQueryResultAudio($data),
            'voice' => $this->denormalizeInlineQueryResultVoice($data),
            'document' => $this->denormalizeInlineQueryResultDocument($data),
            'location' => $this->denormalizeInlineQueryResultLocation($data),
            'venue' => $this->denormalizeInlineQueryResultVenue($data),
            'contact' => $this->denormalizeInlineQueryResultContact($data),
            'game' => $this->denormalizeInlineQueryResultGame($data),
            'cached_photo' => $this->denormalizeInlineQueryResultCachedPhoto($data),
            'cached_gif' => $this->denormalizeInlineQueryResultCachedGif($data),
            'cached_mpeg4_gif' => $this->denormalizeInlineQueryResultCachedMpeg4Gif($data),
            'cached_sticker' => $this->denormalizeInlineQueryResultCachedSticker($data),
            'cached_document' => $this->denormalizeInlineQueryResultCachedDocument($data),
            'cached_video' => $this->denormalizeInlineQueryResultCachedVideo($data),
            'cached_voice' => $this->denormalizeInlineQueryResultCachedVoice($data),
            'cached_audio' => $this->denormalizeInlineQueryResultCachedAudio($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for InlineQueryResult: %s', $data['type'])),
        };
    }

    public function denormalizeInlineQueryResultArticle(array $data): InlineQueryResultArticleInterface
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
            description: $data['description'] ?? null,
            thumbnailUrl: $data['thumbnail_url'] ?? null,
            thumbnailWidth: $data['thumbnail_width'] ?? null,
            thumbnailHeight: $data['thumbnail_height'] ?? null,
        );
    }

    public function denormalizeInlineQueryResultPhoto(array $data): InlineQueryResultPhotoInterface
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

    public function denormalizeInlineQueryResultGif(array $data): InlineQueryResultGifInterface
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

    public function denormalizeInlineQueryResultMpeg4Gif(array $data): InlineQueryResultMpeg4GifInterface
    {
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

    public function denormalizeInlineQueryResultVideo(array $data): InlineQueryResultVideoInterface
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

    public function denormalizeInlineQueryResultAudio(array $data): InlineQueryResultAudioInterface
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

    public function denormalizeInlineQueryResultVoice(array $data): InlineQueryResultVoiceInterface
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

    public function denormalizeInlineQueryResultDocument(array $data): InlineQueryResultDocumentInterface
    {
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

    public function denormalizeInlineQueryResultLocation(array $data): InlineQueryResultLocationInterface
    {
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

    public function denormalizeInlineQueryResultVenue(array $data): InlineQueryResultVenueInterface
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

    public function denormalizeInlineQueryResultContact(array $data): InlineQueryResultContactInterface
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

    public function denormalizeInlineQueryResultGame(array $data): InlineQueryResultGameInterface
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

    public function denormalizeInlineQueryResultCachedPhoto(array $data): InlineQueryResultCachedPhotoInterface
    {
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

    public function denormalizeInlineQueryResultCachedGif(array $data): InlineQueryResultCachedGifInterface
    {
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

    public function denormalizeInlineQueryResultCachedMpeg4Gif(array $data): InlineQueryResultCachedMpeg4GifInterface
    {
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

    public function denormalizeInlineQueryResultCachedSticker(array $data): InlineQueryResultCachedStickerInterface
    {
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

    public function denormalizeInlineQueryResultCachedDocument(array $data): InlineQueryResultCachedDocumentInterface
    {
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

    public function denormalizeInlineQueryResultCachedVideo(array $data): InlineQueryResultCachedVideoInterface
    {
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

    public function denormalizeInlineQueryResultCachedVoice(array $data): InlineQueryResultCachedVoiceInterface
    {
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

    public function denormalizeInlineQueryResultCachedAudio(array $data): InlineQueryResultCachedAudioInterface
    {
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

    public function denormalizeInputTextMessageContent(array $data): InputTextMessageContentInterface
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

    public function denormalizeInputLocationMessageContent(array $data): InputLocationMessageContentInterface
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

    public function denormalizeInputVenueMessageContent(array $data): InputVenueMessageContentInterface
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

    public function denormalizeInputContactMessageContent(array $data): InputContactMessageContentInterface
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
            throw new \InvalidArgumentException(sprintf('Class InputContactMessageContent missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeInputContactMessageContent(
            phoneNumber: $data['phone_number'],
            firstName: $data['first_name'],
            lastName: $data['last_name'] ?? null,
            vcard: $data['vcard'] ?? null,
        );
    }

    public function denormalizeInputInvoiceMessageContent(array $data): InputInvoiceMessageContentInterface
    {
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

    public function denormalizeChosenInlineResult(array $data): ChosenInlineResultInterface
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

    public function denormalizeSentWebAppMessage(array $data): SentWebAppMessageInterface
    {
        return $this->factory->makeSentWebAppMessage(
            inlineMessageId: $data['inline_message_id'] ?? null,
        );
    }

    public function denormalizePreparedInlineMessage(array $data): PreparedInlineMessageInterface
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

    public function denormalizeLabeledPrice(array $data): LabeledPriceInterface
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

    public function denormalizeInvoice(array $data): InvoiceInterface
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

    public function denormalizeShippingAddress(array $data): ShippingAddressInterface
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

    public function denormalizeOrderInfo(array $data): OrderInfoInterface
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

    public function denormalizeShippingOption(array $data): ShippingOptionInterface
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

    public function denormalizeSuccessfulPayment(array $data): SuccessfulPaymentInterface
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

    public function denormalizeRefundedPayment(array $data): RefundedPaymentInterface
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

    public function denormalizeShippingQuery(array $data): ShippingQueryInterface
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

    public function denormalizePreCheckoutQuery(array $data): PreCheckoutQueryInterface
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

    public function denormalizePaidMediaPurchased(array $data): PaidMediaPurchasedInterface
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
        return match ($data['type']) {
            'pending' => $this->denormalizeRevenueWithdrawalStatePending($data),
            'succeeded' => $this->denormalizeRevenueWithdrawalStateSucceeded($data),
            'failed' => $this->denormalizeRevenueWithdrawalStateFailed($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for RevenueWithdrawalState: %s', $data['type'])),
        };
    }

    public function denormalizeRevenueWithdrawalStatePending(array $data): RevenueWithdrawalStatePendingInterface
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
            throw new \InvalidArgumentException(sprintf('Class RevenueWithdrawalStatePending missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRevenueWithdrawalStatePending(
            type: $data['type'],
        );
    }

    public function denormalizeRevenueWithdrawalStateSucceeded(array $data): RevenueWithdrawalStateSucceededInterface
    {
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

    public function denormalizeRevenueWithdrawalStateFailed(array $data): RevenueWithdrawalStateFailedInterface
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
            throw new \InvalidArgumentException(sprintf('Class RevenueWithdrawalStateFailed missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeRevenueWithdrawalStateFailed(
            type: $data['type'],
        );
    }

    public function denormalizeAffiliateInfo(array $data): AffiliateInfoInterface
    {
        $requiredFields = [
            'commission_per_mille',
            'amount',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class AffiliateInfo missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeAffiliateInfo(
            commissionPerMille: $data['commission_per_mille'],
            amount: $data['amount'],
            affiliateUser: isset($data['affiliate_user'])
                ? $this->denormalizeUser($data['affiliate_user'])
                : null,
            affiliateChat: isset($data['affiliate_chat'])
                ? $this->denormalizeChat($data['affiliate_chat'])
                : null,
            nanostarAmount: $data['nanostar_amount'] ?? null,
        );
    }

    public function denormalizeTransactionPartner(array $data): Types\Interfaces\TransactionPartnerInterface
    {
        return match ($data['type']) {
            'user' => $this->denormalizeTransactionPartnerUser($data),
            'fragment' => $this->denormalizeTransactionPartnerFragment($data),
            'telegram_ads' => $this->denormalizeTransactionPartnerTelegramAds($data),
            'telegram_api' => $this->denormalizeTransactionPartnerTelegramApi($data),
            'other' => $this->denormalizeTransactionPartnerOther($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid type value for TransactionPartner: %s', $data['type'])),
        };
    }

    public function denormalizeTransactionPartnerUser(array $data): TransactionPartnerUserInterface
    {
        $requiredFields = [
            'type',
            'transaction_type',
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
            transactionType: $data['transaction_type'],
            user: $this->denormalizeUser($data['user']),
            affiliate: isset($data['affiliate'])
                ? $this->denormalizeAffiliateInfo($data['affiliate'])
                : null,
            invoicePayload: $data['invoice_payload'] ?? null,
            subscriptionPeriod: $data['subscription_period'] ?? null,
            paidMedia: isset($data['paid_media'])
                ? array_map(fn (array $item) => $this->denormalizePaidMedia($item), $data['paid_media'])
                : null,
            paidMediaPayload: $data['paid_media_payload'] ?? null,
            gift: isset($data['gift'])
                ? $this->denormalizeGift($data['gift'])
                : null,
            premiumSubscriptionDuration: $data['premium_subscription_duration'] ?? null,
        );
    }

    public function denormalizeTransactionPartnerChat(array $data): TransactionPartnerChatInterface
    {
        $requiredFields = [
            'type',
            'chat',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerChat missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerChat(
            type: $data['type'],
            chat: $this->denormalizeChat($data['chat']),
            gift: isset($data['gift'])
                ? $this->denormalizeGift($data['gift'])
                : null,
        );
    }

    public function denormalizeTransactionPartnerAffiliateProgram(
        array $data,
    ): TransactionPartnerAffiliateProgramInterface {
        $requiredFields = [
            'type',
            'commission_per_mille',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerAffiliateProgram missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerAffiliateProgram(
            type: $data['type'],
            commissionPerMille: $data['commission_per_mille'],
            sponsorUser: isset($data['sponsor_user'])
                ? $this->denormalizeUser($data['sponsor_user'])
                : null,
        );
    }

    public function denormalizeTransactionPartnerFragment(array $data): TransactionPartnerFragmentInterface
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
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerFragment missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerFragment(
            type: $data['type'],
            withdrawalState: isset($data['withdrawal_state'])
                ? $this->denormalizeRevenueWithdrawalState($data['withdrawal_state'])
                : null,
        );
    }

    public function denormalizeTransactionPartnerTelegramAds(array $data): TransactionPartnerTelegramAdsInterface
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
            throw new \InvalidArgumentException(sprintf('Class TransactionPartnerTelegramAds missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makeTransactionPartnerTelegramAds(
            type: $data['type'],
        );
    }

    public function denormalizeTransactionPartnerTelegramApi(array $data): TransactionPartnerTelegramApiInterface
    {
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

    public function denormalizeTransactionPartnerOther(array $data): TransactionPartnerOtherInterface
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

    public function denormalizeStarTransaction(array $data): StarTransactionInterface
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
            nanostarAmount: $data['nanostar_amount'] ?? null,
            source: isset($data['source'])
                ? $this->denormalizeTransactionPartner($data['source'])
                : null,
            receiver: isset($data['receiver'])
                ? $this->denormalizeTransactionPartner($data['receiver'])
                : null,
        );
    }

    public function denormalizeStarTransactions(array $data): StarTransactionsInterface
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

    public function denormalizePassportData(array $data): PassportDataInterface
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

    public function denormalizePassportFile(array $data): PassportFileInterface
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

    public function denormalizeEncryptedPassportElement(array $data): EncryptedPassportElementInterface
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

    public function denormalizeEncryptedCredentials(array $data): EncryptedCredentialsInterface
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
        return match ($data['source']) {
            'data' => $this->denormalizePassportElementErrorDataField($data),
            'front_side' => $this->denormalizePassportElementErrorFrontSide($data),
            'reverse_side' => $this->denormalizePassportElementErrorReverseSide($data),
            'selfie' => $this->denormalizePassportElementErrorSelfie($data),
            'file' => $this->denormalizePassportElementErrorFile($data),
            'files' => $this->denormalizePassportElementErrorFiles($data),
            'translation_file' => $this->denormalizePassportElementErrorTranslationFile($data),
            'translation_files' => $this->denormalizePassportElementErrorTranslationFiles($data),
            'unspecified' => $this->denormalizePassportElementErrorUnspecified($data),
            default => throw new \InvalidArgumentException(sprintf('Invalid source value for PassportElementError: %s', $data['source'])),
        };
    }

    public function denormalizePassportElementErrorDataField(array $data): PassportElementErrorDataFieldInterface
    {
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

    public function denormalizePassportElementErrorFrontSide(array $data): PassportElementErrorFrontSideInterface
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
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorFrontSide missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorFrontSide(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'front_side',
        );
    }

    public function denormalizePassportElementErrorReverseSide(array $data): PassportElementErrorReverseSideInterface
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
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorReverseSide missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorReverseSide(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'reverse_side',
        );
    }

    public function denormalizePassportElementErrorSelfie(array $data): PassportElementErrorSelfieInterface
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
            throw new \InvalidArgumentException(sprintf('Class PassportElementErrorSelfie missing some fields from the data array: %s', implode(', ', $missingFields)));
        }

        return $this->factory->makePassportElementErrorSelfie(
            type: $data['type'],
            fileHash: $data['file_hash'],
            message: $data['message'],
            source: $data['source'] ?? 'selfie',
        );
    }

    public function denormalizePassportElementErrorFile(array $data): PassportElementErrorFileInterface
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

    public function denormalizePassportElementErrorFiles(array $data): PassportElementErrorFilesInterface
    {
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
    ): PassportElementErrorTranslationFileInterface {
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
    ): PassportElementErrorTranslationFilesInterface {
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

    public function denormalizePassportElementErrorUnspecified(array $data): PassportElementErrorUnspecifiedInterface
    {
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

    public function denormalizeGame(array $data): GameInterface
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

    public function denormalizeCallbackGame(array $data): CallbackGameInterface
    {
        return $this->factory->makeCallbackGame();
    }

    public function denormalizeGameHighScore(array $data): GameHighScoreInterface
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
        if (!interface_exists($type) || !is_subclass_of($type, TypeInterface::class)) {
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
            UpdateInterface::class => $this->denormalizeUpdate($data),
            WebhookInfoInterface::class => $this->denormalizeWebhookInfo($data),
            UserInterface::class => $this->denormalizeUser($data),
            ChatInterface::class => $this->denormalizeChat($data),
            ChatFullInfoInterface::class => $this->denormalizeChatFullInfo($data),
            MessageInterface::class => $this->denormalizeMessage($data),
            MessageIdInterface::class => $this->denormalizeMessageId($data),
            InaccessibleMessageInterface::class => $this->denormalizeInaccessibleMessage($data),
            MessageEntityInterface::class => $this->denormalizeMessageEntity($data),
            TextQuoteInterface::class => $this->denormalizeTextQuote($data),
            ExternalReplyInfoInterface::class => $this->denormalizeExternalReplyInfo($data),
            ReplyParametersInterface::class => $this->denormalizeReplyParameters($data),
            MessageOriginUserInterface::class => $this->denormalizeMessageOriginUser($data),
            MessageOriginHiddenUserInterface::class => $this->denormalizeMessageOriginHiddenUser($data),
            MessageOriginChatInterface::class => $this->denormalizeMessageOriginChat($data),
            MessageOriginChannelInterface::class => $this->denormalizeMessageOriginChannel($data),
            PhotoSizeInterface::class => $this->denormalizePhotoSize($data),
            AnimationInterface::class => $this->denormalizeAnimation($data),
            AudioInterface::class => $this->denormalizeAudio($data),
            DocumentInterface::class => $this->denormalizeDocument($data),
            StoryInterface::class => $this->denormalizeStory($data),
            VideoInterface::class => $this->denormalizeVideo($data),
            VideoNoteInterface::class => $this->denormalizeVideoNote($data),
            VoiceInterface::class => $this->denormalizeVoice($data),
            PaidMediaInfoInterface::class => $this->denormalizePaidMediaInfo($data),
            PaidMediaPreviewInterface::class => $this->denormalizePaidMediaPreview($data),
            PaidMediaPhotoInterface::class => $this->denormalizePaidMediaPhoto($data),
            PaidMediaVideoInterface::class => $this->denormalizePaidMediaVideo($data),
            ContactInterface::class => $this->denormalizeContact($data),
            DiceInterface::class => $this->denormalizeDice($data),
            PollOptionInterface::class => $this->denormalizePollOption($data),
            InputPollOptionInterface::class => $this->denormalizeInputPollOption($data),
            PollAnswerInterface::class => $this->denormalizePollAnswer($data),
            PollInterface::class => $this->denormalizePoll($data),
            ChecklistTaskInterface::class => $this->denormalizeChecklistTask($data),
            ChecklistInterface::class => $this->denormalizeChecklist($data),
            InputChecklistTaskInterface::class => $this->denormalizeInputChecklistTask($data),
            InputChecklistInterface::class => $this->denormalizeInputChecklist($data),
            ChecklistTasksDoneInterface::class => $this->denormalizeChecklistTasksDone($data),
            ChecklistTasksAddedInterface::class => $this->denormalizeChecklistTasksAdded($data),
            LocationInterface::class => $this->denormalizeLocation($data),
            VenueInterface::class => $this->denormalizeVenue($data),
            WebAppDataInterface::class => $this->denormalizeWebAppData($data),
            ProximityAlertTriggeredInterface::class => $this->denormalizeProximityAlertTriggered($data),
            MessageAutoDeleteTimerChangedInterface::class => $this->denormalizeMessageAutoDeleteTimerChanged($data),
            ChatBoostAddedInterface::class => $this->denormalizeChatBoostAdded($data),
            BackgroundFillSolidInterface::class => $this->denormalizeBackgroundFillSolid($data),
            BackgroundFillGradientInterface::class => $this->denormalizeBackgroundFillGradient($data),
            BackgroundFillFreeformGradientInterface::class => $this->denormalizeBackgroundFillFreeformGradient($data),
            BackgroundTypeFillInterface::class => $this->denormalizeBackgroundTypeFill($data),
            BackgroundTypeWallpaperInterface::class => $this->denormalizeBackgroundTypeWallpaper($data),
            BackgroundTypePatternInterface::class => $this->denormalizeBackgroundTypePattern($data),
            BackgroundTypeChatThemeInterface::class => $this->denormalizeBackgroundTypeChatTheme($data),
            ChatBackgroundInterface::class => $this->denormalizeChatBackground($data),
            ForumTopicCreatedInterface::class => $this->denormalizeForumTopicCreated($data),
            ForumTopicClosedInterface::class => $this->denormalizeForumTopicClosed($data),
            ForumTopicEditedInterface::class => $this->denormalizeForumTopicEdited($data),
            ForumTopicReopenedInterface::class => $this->denormalizeForumTopicReopened($data),
            GeneralForumTopicHiddenInterface::class => $this->denormalizeGeneralForumTopicHidden($data),
            GeneralForumTopicUnhiddenInterface::class => $this->denormalizeGeneralForumTopicUnhidden($data),
            SharedUserInterface::class => $this->denormalizeSharedUser($data),
            UsersSharedInterface::class => $this->denormalizeUsersShared($data),
            ChatSharedInterface::class => $this->denormalizeChatShared($data),
            WriteAccessAllowedInterface::class => $this->denormalizeWriteAccessAllowed($data),
            VideoChatScheduledInterface::class => $this->denormalizeVideoChatScheduled($data),
            VideoChatStartedInterface::class => $this->denormalizeVideoChatStarted($data),
            VideoChatEndedInterface::class => $this->denormalizeVideoChatEnded($data),
            VideoChatParticipantsInvitedInterface::class => $this->denormalizeVideoChatParticipantsInvited($data),
            PaidMessagePriceChangedInterface::class => $this->denormalizePaidMessagePriceChanged($data),
            DirectMessagePriceChangedInterface::class => $this->denormalizeDirectMessagePriceChanged($data),
            GiveawayCreatedInterface::class => $this->denormalizeGiveawayCreated($data),
            GiveawayInterface::class => $this->denormalizeGiveaway($data),
            GiveawayWinnersInterface::class => $this->denormalizeGiveawayWinners($data),
            GiveawayCompletedInterface::class => $this->denormalizeGiveawayCompleted($data),
            LinkPreviewOptionsInterface::class => $this->denormalizeLinkPreviewOptions($data),
            UserProfilePhotosInterface::class => $this->denormalizeUserProfilePhotos($data),
            FileInterface::class => $this->denormalizeFile($data),
            WebAppInfoInterface::class => $this->denormalizeWebAppInfo($data),
            ReplyKeyboardMarkupInterface::class => $this->denormalizeReplyKeyboardMarkup($data),
            KeyboardButtonInterface::class => $this->denormalizeKeyboardButton($data),
            KeyboardButtonRequestUsersInterface::class => $this->denormalizeKeyboardButtonRequestUsers($data),
            KeyboardButtonRequestChatInterface::class => $this->denormalizeKeyboardButtonRequestChat($data),
            KeyboardButtonPollTypeInterface::class => $this->denormalizeKeyboardButtonPollType($data),
            ReplyKeyboardRemoveInterface::class => $this->denormalizeReplyKeyboardRemove($data),
            InlineKeyboardMarkupInterface::class => $this->denormalizeInlineKeyboardMarkup($data),
            InlineKeyboardButtonInterface::class => $this->denormalizeInlineKeyboardButton($data),
            LoginUrlInterface::class => $this->denormalizeLoginUrl($data),
            SwitchInlineQueryChosenChatInterface::class => $this->denormalizeSwitchInlineQueryChosenChat($data),
            CopyTextButtonInterface::class => $this->denormalizeCopyTextButton($data),
            CallbackQueryInterface::class => $this->denormalizeCallbackQuery($data),
            ForceReplyInterface::class => $this->denormalizeForceReply($data),
            ChatPhotoInterface::class => $this->denormalizeChatPhoto($data),
            ChatInviteLinkInterface::class => $this->denormalizeChatInviteLink($data),
            ChatAdministratorRightsInterface::class => $this->denormalizeChatAdministratorRights($data),
            ChatMemberUpdatedInterface::class => $this->denormalizeChatMemberUpdated($data),
            ChatMemberOwnerInterface::class => $this->denormalizeChatMemberOwner($data),
            ChatMemberAdministratorInterface::class => $this->denormalizeChatMemberAdministrator($data),
            ChatMemberMemberInterface::class => $this->denormalizeChatMemberMember($data),
            ChatMemberRestrictedInterface::class => $this->denormalizeChatMemberRestricted($data),
            ChatMemberLeftInterface::class => $this->denormalizeChatMemberLeft($data),
            ChatMemberBannedInterface::class => $this->denormalizeChatMemberBanned($data),
            ChatJoinRequestInterface::class => $this->denormalizeChatJoinRequest($data),
            ChatPermissionsInterface::class => $this->denormalizeChatPermissions($data),
            BirthdateInterface::class => $this->denormalizeBirthdate($data),
            BusinessIntroInterface::class => $this->denormalizeBusinessIntro($data),
            BusinessLocationInterface::class => $this->denormalizeBusinessLocation($data),
            BusinessOpeningHoursIntervalInterface::class => $this->denormalizeBusinessOpeningHoursInterval($data),
            BusinessOpeningHoursInterface::class => $this->denormalizeBusinessOpeningHours($data),
            StoryAreaPositionInterface::class => $this->denormalizeStoryAreaPosition($data),
            LocationAddressInterface::class => $this->denormalizeLocationAddress($data),
            StoryAreaTypeLocationInterface::class => $this->denormalizeStoryAreaTypeLocation($data),
            StoryAreaTypeSuggestedReactionInterface::class => $this->denormalizeStoryAreaTypeSuggestedReaction($data),
            StoryAreaTypeLinkInterface::class => $this->denormalizeStoryAreaTypeLink($data),
            StoryAreaTypeWeatherInterface::class => $this->denormalizeStoryAreaTypeWeather($data),
            StoryAreaTypeUniqueGiftInterface::class => $this->denormalizeStoryAreaTypeUniqueGift($data),
            StoryAreaInterface::class => $this->denormalizeStoryArea($data),
            ChatLocationInterface::class => $this->denormalizeChatLocation($data),
            ReactionTypeEmojiInterface::class => $this->denormalizeReactionTypeEmoji($data),
            ReactionTypeCustomEmojiInterface::class => $this->denormalizeReactionTypeCustomEmoji($data),
            ReactionTypePaidInterface::class => $this->denormalizeReactionTypePaid($data),
            ReactionCountInterface::class => $this->denormalizeReactionCount($data),
            MessageReactionUpdatedInterface::class => $this->denormalizeMessageReactionUpdated($data),
            MessageReactionCountUpdatedInterface::class => $this->denormalizeMessageReactionCountUpdated($data),
            ForumTopicInterface::class => $this->denormalizeForumTopic($data),
            GiftInterface::class => $this->denormalizeGift($data),
            GiftsInterface::class => $this->denormalizeGifts($data),
            UniqueGiftModelInterface::class => $this->denormalizeUniqueGiftModel($data),
            UniqueGiftSymbolInterface::class => $this->denormalizeUniqueGiftSymbol($data),
            UniqueGiftBackdropColorsInterface::class => $this->denormalizeUniqueGiftBackdropColors($data),
            UniqueGiftBackdropInterface::class => $this->denormalizeUniqueGiftBackdrop($data),
            UniqueGiftInterface::class => $this->denormalizeUniqueGift($data),
            GiftInfoInterface::class => $this->denormalizeGiftInfo($data),
            UniqueGiftInfoInterface::class => $this->denormalizeUniqueGiftInfo($data),
            OwnedGiftRegularInterface::class => $this->denormalizeOwnedGiftRegular($data),
            OwnedGiftUniqueInterface::class => $this->denormalizeOwnedGiftUnique($data),
            OwnedGiftsInterface::class => $this->denormalizeOwnedGifts($data),
            AcceptedGiftTypesInterface::class => $this->denormalizeAcceptedGiftTypes($data),
            StarAmountInterface::class => $this->denormalizeStarAmount($data),
            BotCommandInterface::class => $this->denormalizeBotCommand($data),
            BotCommandScopeDefaultInterface::class => $this->denormalizeBotCommandScopeDefault($data),
            BotCommandScopeAllPrivateChatsInterface::class => $this->denormalizeBotCommandScopeAllPrivateChats($data),
            BotCommandScopeAllGroupChatsInterface::class => $this->denormalizeBotCommandScopeAllGroupChats($data),
            BotCommandScopeAllChatAdministratorsInterface::class => $this->denormalizeBotCommandScopeAllChatAdministrators($data),
            BotCommandScopeChatInterface::class => $this->denormalizeBotCommandScopeChat($data),
            BotCommandScopeChatAdministratorsInterface::class => $this->denormalizeBotCommandScopeChatAdministrators($data),
            BotCommandScopeChatMemberInterface::class => $this->denormalizeBotCommandScopeChatMember($data),
            BotNameInterface::class => $this->denormalizeBotName($data),
            BotDescriptionInterface::class => $this->denormalizeBotDescription($data),
            BotShortDescriptionInterface::class => $this->denormalizeBotShortDescription($data),
            MenuButtonCommandsInterface::class => $this->denormalizeMenuButtonCommands($data),
            MenuButtonWebAppInterface::class => $this->denormalizeMenuButtonWebApp($data),
            MenuButtonDefaultInterface::class => $this->denormalizeMenuButtonDefault($data),
            ChatBoostSourcePremiumInterface::class => $this->denormalizeChatBoostSourcePremium($data),
            ChatBoostSourceGiftCodeInterface::class => $this->denormalizeChatBoostSourceGiftCode($data),
            ChatBoostSourceGiveawayInterface::class => $this->denormalizeChatBoostSourceGiveaway($data),
            ChatBoostInterface::class => $this->denormalizeChatBoost($data),
            ChatBoostUpdatedInterface::class => $this->denormalizeChatBoostUpdated($data),
            ChatBoostRemovedInterface::class => $this->denormalizeChatBoostRemoved($data),
            UserChatBoostsInterface::class => $this->denormalizeUserChatBoosts($data),
            BusinessBotRightsInterface::class => $this->denormalizeBusinessBotRights($data),
            BusinessConnectionInterface::class => $this->denormalizeBusinessConnection($data),
            BusinessMessagesDeletedInterface::class => $this->denormalizeBusinessMessagesDeleted($data),
            ResponseParametersInterface::class => $this->denormalizeResponseParameters($data),
            InputMediaPhotoInterface::class => $this->denormalizeInputMediaPhoto($data),
            InputMediaVideoInterface::class => $this->denormalizeInputMediaVideo($data),
            InputMediaAnimationInterface::class => $this->denormalizeInputMediaAnimation($data),
            InputMediaAudioInterface::class => $this->denormalizeInputMediaAudio($data),
            InputMediaDocumentInterface::class => $this->denormalizeInputMediaDocument($data),
            InputPaidMediaPhotoInterface::class => $this->denormalizeInputPaidMediaPhoto($data),
            InputPaidMediaVideoInterface::class => $this->denormalizeInputPaidMediaVideo($data),
            InputProfilePhotoStaticInterface::class => $this->denormalizeInputProfilePhotoStatic($data),
            InputProfilePhotoAnimatedInterface::class => $this->denormalizeInputProfilePhotoAnimated($data),
            InputStoryContentPhotoInterface::class => $this->denormalizeInputStoryContentPhoto($data),
            InputStoryContentVideoInterface::class => $this->denormalizeInputStoryContentVideo($data),
            StickerInterface::class => $this->denormalizeSticker($data),
            StickerSetInterface::class => $this->denormalizeStickerSet($data),
            MaskPositionInterface::class => $this->denormalizeMaskPosition($data),
            InputStickerInterface::class => $this->denormalizeInputSticker($data),
            InlineQueryInterface::class => $this->denormalizeInlineQuery($data),
            InlineQueryResultsButtonInterface::class => $this->denormalizeInlineQueryResultsButton($data),
            InlineQueryResultArticleInterface::class => $this->denormalizeInlineQueryResultArticle($data),
            InlineQueryResultPhotoInterface::class => $this->denormalizeInlineQueryResultPhoto($data),
            InlineQueryResultGifInterface::class => $this->denormalizeInlineQueryResultGif($data),
            InlineQueryResultMpeg4GifInterface::class => $this->denormalizeInlineQueryResultMpeg4Gif($data),
            InlineQueryResultVideoInterface::class => $this->denormalizeInlineQueryResultVideo($data),
            InlineQueryResultAudioInterface::class => $this->denormalizeInlineQueryResultAudio($data),
            InlineQueryResultVoiceInterface::class => $this->denormalizeInlineQueryResultVoice($data),
            InlineQueryResultDocumentInterface::class => $this->denormalizeInlineQueryResultDocument($data),
            InlineQueryResultLocationInterface::class => $this->denormalizeInlineQueryResultLocation($data),
            InlineQueryResultVenueInterface::class => $this->denormalizeInlineQueryResultVenue($data),
            InlineQueryResultContactInterface::class => $this->denormalizeInlineQueryResultContact($data),
            InlineQueryResultGameInterface::class => $this->denormalizeInlineQueryResultGame($data),
            InlineQueryResultCachedPhotoInterface::class => $this->denormalizeInlineQueryResultCachedPhoto($data),
            InlineQueryResultCachedGifInterface::class => $this->denormalizeInlineQueryResultCachedGif($data),
            InlineQueryResultCachedMpeg4GifInterface::class => $this->denormalizeInlineQueryResultCachedMpeg4Gif($data),
            InlineQueryResultCachedStickerInterface::class => $this->denormalizeInlineQueryResultCachedSticker($data),
            InlineQueryResultCachedDocumentInterface::class => $this->denormalizeInlineQueryResultCachedDocument($data),
            InlineQueryResultCachedVideoInterface::class => $this->denormalizeInlineQueryResultCachedVideo($data),
            InlineQueryResultCachedVoiceInterface::class => $this->denormalizeInlineQueryResultCachedVoice($data),
            InlineQueryResultCachedAudioInterface::class => $this->denormalizeInlineQueryResultCachedAudio($data),
            InputTextMessageContentInterface::class => $this->denormalizeInputTextMessageContent($data),
            InputLocationMessageContentInterface::class => $this->denormalizeInputLocationMessageContent($data),
            InputVenueMessageContentInterface::class => $this->denormalizeInputVenueMessageContent($data),
            InputContactMessageContentInterface::class => $this->denormalizeInputContactMessageContent($data),
            InputInvoiceMessageContentInterface::class => $this->denormalizeInputInvoiceMessageContent($data),
            ChosenInlineResultInterface::class => $this->denormalizeChosenInlineResult($data),
            SentWebAppMessageInterface::class => $this->denormalizeSentWebAppMessage($data),
            PreparedInlineMessageInterface::class => $this->denormalizePreparedInlineMessage($data),
            LabeledPriceInterface::class => $this->denormalizeLabeledPrice($data),
            InvoiceInterface::class => $this->denormalizeInvoice($data),
            ShippingAddressInterface::class => $this->denormalizeShippingAddress($data),
            OrderInfoInterface::class => $this->denormalizeOrderInfo($data),
            ShippingOptionInterface::class => $this->denormalizeShippingOption($data),
            SuccessfulPaymentInterface::class => $this->denormalizeSuccessfulPayment($data),
            RefundedPaymentInterface::class => $this->denormalizeRefundedPayment($data),
            ShippingQueryInterface::class => $this->denormalizeShippingQuery($data),
            PreCheckoutQueryInterface::class => $this->denormalizePreCheckoutQuery($data),
            PaidMediaPurchasedInterface::class => $this->denormalizePaidMediaPurchased($data),
            RevenueWithdrawalStatePendingInterface::class => $this->denormalizeRevenueWithdrawalStatePending($data),
            RevenueWithdrawalStateSucceededInterface::class => $this->denormalizeRevenueWithdrawalStateSucceeded($data),
            RevenueWithdrawalStateFailedInterface::class => $this->denormalizeRevenueWithdrawalStateFailed($data),
            AffiliateInfoInterface::class => $this->denormalizeAffiliateInfo($data),
            TransactionPartnerUserInterface::class => $this->denormalizeTransactionPartnerUser($data),
            TransactionPartnerChatInterface::class => $this->denormalizeTransactionPartnerChat($data),
            TransactionPartnerAffiliateProgramInterface::class => $this->denormalizeTransactionPartnerAffiliateProgram($data),
            TransactionPartnerFragmentInterface::class => $this->denormalizeTransactionPartnerFragment($data),
            TransactionPartnerTelegramAdsInterface::class => $this->denormalizeTransactionPartnerTelegramAds($data),
            TransactionPartnerTelegramApiInterface::class => $this->denormalizeTransactionPartnerTelegramApi($data),
            TransactionPartnerOtherInterface::class => $this->denormalizeTransactionPartnerOther($data),
            StarTransactionInterface::class => $this->denormalizeStarTransaction($data),
            StarTransactionsInterface::class => $this->denormalizeStarTransactions($data),
            PassportDataInterface::class => $this->denormalizePassportData($data),
            PassportFileInterface::class => $this->denormalizePassportFile($data),
            EncryptedPassportElementInterface::class => $this->denormalizeEncryptedPassportElement($data),
            EncryptedCredentialsInterface::class => $this->denormalizeEncryptedCredentials($data),
            PassportElementErrorDataFieldInterface::class => $this->denormalizePassportElementErrorDataField($data),
            PassportElementErrorFrontSideInterface::class => $this->denormalizePassportElementErrorFrontSide($data),
            PassportElementErrorReverseSideInterface::class => $this->denormalizePassportElementErrorReverseSide($data),
            PassportElementErrorSelfieInterface::class => $this->denormalizePassportElementErrorSelfie($data),
            PassportElementErrorFileInterface::class => $this->denormalizePassportElementErrorFile($data),
            PassportElementErrorFilesInterface::class => $this->denormalizePassportElementErrorFiles($data),
            PassportElementErrorTranslationFileInterface::class => $this->denormalizePassportElementErrorTranslationFile($data),
            PassportElementErrorTranslationFilesInterface::class => $this->denormalizePassportElementErrorTranslationFiles($data),
            PassportElementErrorUnspecifiedInterface::class => $this->denormalizePassportElementErrorUnspecified($data),
            GameInterface::class => $this->denormalizeGame($data),
            CallbackGameInterface::class => $this->denormalizeCallbackGame($data),
            GameHighScoreInterface::class => $this->denormalizeGameHighScore($data),
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

            if ($value instanceof TypeInterface && !$value instanceof InputFileInterface) {
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
