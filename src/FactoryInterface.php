<?php

namespace Phenogram\Bindings;

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
use Phenogram\Bindings\Types\Interfaces\ChosenInlineResultInterface;
use Phenogram\Bindings\Types\Interfaces\ContactInterface;
use Phenogram\Bindings\Types\Interfaces\CopyTextButtonInterface;
use Phenogram\Bindings\Types\Interfaces\DiceInterface;
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
use Phenogram\Bindings\Types\Interfaces\InputStickerInterface;
use Phenogram\Bindings\Types\Interfaces\InputTextMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InputVenueMessageContentInterface;
use Phenogram\Bindings\Types\Interfaces\InvoiceInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonPollTypeInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestChatInterface;
use Phenogram\Bindings\Types\Interfaces\KeyboardButtonRequestUsersInterface;
use Phenogram\Bindings\Types\Interfaces\LabeledPriceInterface;
use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
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
use Phenogram\Bindings\Types\Interfaces\PaidMediaInfoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPreviewInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaPurchasedInterface;
use Phenogram\Bindings\Types\Interfaces\PaidMediaVideoInterface;
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
use Phenogram\Bindings\Types\Interfaces\StarTransactionInterface;
use Phenogram\Bindings\Types\Interfaces\StarTransactionsInterface;
use Phenogram\Bindings\Types\Interfaces\StickerInterface;
use Phenogram\Bindings\Types\Interfaces\StickerSetInterface;
use Phenogram\Bindings\Types\Interfaces\StoryInterface;
use Phenogram\Bindings\Types\Interfaces\SuccessfulPaymentInterface;
use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerFragmentInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerOtherInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramAdsInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramApiInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerUserInterface;
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

interface FactoryInterface
{
    public function makeUpdate(
        int $updateId,
        ?MessageInterface $message,
        ?MessageInterface $editedMessage,
        ?MessageInterface $channelPost,
        ?MessageInterface $editedChannelPost,
        ?BusinessConnectionInterface $businessConnection,
        ?MessageInterface $businessMessage,
        ?MessageInterface $editedBusinessMessage,
        ?BusinessMessagesDeletedInterface $deletedBusinessMessages,
        ?MessageReactionUpdatedInterface $messageReaction,
        ?MessageReactionCountUpdatedInterface $messageReactionCount,
        ?InlineQueryInterface $inlineQuery,
        ?ChosenInlineResultInterface $chosenInlineResult,
        ?CallbackQueryInterface $callbackQuery,
        ?ShippingQueryInterface $shippingQuery,
        ?PreCheckoutQueryInterface $preCheckoutQuery,
        ?PaidMediaPurchasedInterface $purchasedPaidMedia,
        ?PollInterface $poll,
        ?PollAnswerInterface $pollAnswer,
        ?ChatMemberUpdatedInterface $myChatMember,
        ?ChatMemberUpdatedInterface $chatMember,
        ?ChatJoinRequestInterface $chatJoinRequest,
        ?ChatBoostUpdatedInterface $chatBoost,
        ?ChatBoostRemovedInterface $removedChatBoost,
    ): UpdateInterface;

    public function makeWebhookInfo(
        string $url,
        bool $hasCustomCertificate,
        int $pendingUpdateCount,
        ?string $ipAddress,
        ?int $lastErrorDate,
        ?string $lastErrorMessage,
        ?int $lastSynchronizationErrorDate,
        ?int $maxConnections,
        ?array $allowedUpdates,
    ): WebhookInfoInterface;

    public function makeUser(
        int $id,
        bool $isBot,
        string $firstName,
        ?string $lastName,
        ?string $username,
        ?string $languageCode,
        ?bool $isPremium,
        ?bool $addedToAttachmentMenu,
        ?bool $canJoinGroups,
        ?bool $canReadAllGroupMessages,
        ?bool $supportsInlineQueries,
        ?bool $canConnectToBusiness,
        ?bool $hasMainWebApp,
    ): UserInterface;

    public function makeChat(
        int $id,
        string $type,
        ?string $title,
        ?string $username,
        ?string $firstName,
        ?string $lastName,
        ?bool $isForum,
    ): ChatInterface;

    public function makeChatFullInfo(
        int $id,
        string $type,
        int $accentColorId,
        int $maxReactionCount,
        ?string $title,
        ?string $username,
        ?string $firstName,
        ?string $lastName,
        ?bool $isForum,
        ?ChatPhotoInterface $photo,
        ?array $activeUsernames,
        ?BirthdateInterface $birthdate,
        ?BusinessIntroInterface $businessIntro,
        ?BusinessLocationInterface $businessLocation,
        ?BusinessOpeningHoursInterface $businessOpeningHours,
        ?ChatInterface $personalChat,
        ?array $availableReactions,
        ?string $backgroundCustomEmojiId,
        ?int $profileAccentColorId,
        ?string $profileBackgroundCustomEmojiId,
        ?string $emojiStatusCustomEmojiId,
        ?int $emojiStatusExpirationDate,
        ?string $bio,
        ?bool $hasPrivateForwards,
        ?bool $hasRestrictedVoiceAndVideoMessages,
        ?bool $joinToSendMessages,
        ?bool $joinByRequest,
        ?string $description,
        ?string $inviteLink,
        ?MessageInterface $pinnedMessage,
        ?ChatPermissionsInterface $permissions,
        ?bool $canSendPaidMedia,
        ?int $slowModeDelay,
        ?int $unrestrictBoostCount,
        ?int $messageAutoDeleteTime,
        ?bool $hasAggressiveAntiSpamEnabled,
        ?bool $hasHiddenMembers,
        ?bool $hasProtectedContent,
        ?bool $hasVisibleHistory,
        ?string $stickerSetName,
        ?bool $canSetStickerSet,
        ?string $customEmojiStickerSetName,
        ?int $linkedChatId,
        ?ChatLocationInterface $location,
    ): ChatFullInfoInterface;

    public function makeMessage(
        int $messageId,
        int $date,
        ChatInterface $chat,
        ?int $messageThreadId,
        ?UserInterface $from,
        ?ChatInterface $senderChat,
        ?int $senderBoostCount,
        ?UserInterface $senderBusinessBot,
        ?string $businessConnectionId,
        ?Types\Interfaces\MessageOriginInterface $forwardOrigin,
        ?bool $isTopicMessage,
        ?bool $isAutomaticForward,
        ?MessageInterface $replyToMessage,
        ?ExternalReplyInfoInterface $externalReply,
        ?TextQuoteInterface $quote,
        ?StoryInterface $replyToStory,
        ?UserInterface $viaBot,
        ?int $editDate,
        ?bool $hasProtectedContent,
        ?bool $isFromOffline,
        ?string $mediaGroupId,
        ?string $authorSignature,
        ?string $text,
        ?array $entities,
        ?LinkPreviewOptionsInterface $linkPreviewOptions,
        ?string $effectId,
        ?AnimationInterface $animation,
        ?AudioInterface $audio,
        ?DocumentInterface $document,
        ?PaidMediaInfoInterface $paidMedia,
        ?array $photo,
        ?StickerInterface $sticker,
        ?StoryInterface $story,
        ?VideoInterface $video,
        ?VideoNoteInterface $videoNote,
        ?VoiceInterface $voice,
        ?string $caption,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?bool $hasMediaSpoiler,
        ?ContactInterface $contact,
        ?DiceInterface $dice,
        ?GameInterface $game,
        ?PollInterface $poll,
        ?VenueInterface $venue,
        ?LocationInterface $location,
        ?array $newChatMembers,
        ?UserInterface $leftChatMember,
        ?string $newChatTitle,
        ?array $newChatPhoto,
        ?bool $deleteChatPhoto,
        ?bool $groupChatCreated,
        ?bool $supergroupChatCreated,
        ?bool $channelChatCreated,
        ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged,
        ?int $migrateToChatId,
        ?int $migrateFromChatId,
        ?Types\Interfaces\MaybeInaccessibleMessageInterface $pinnedMessage,
        ?InvoiceInterface $invoice,
        ?SuccessfulPaymentInterface $successfulPayment,
        ?RefundedPaymentInterface $refundedPayment,
        ?UsersSharedInterface $usersShared,
        ?ChatSharedInterface $chatShared,
        ?string $connectedWebsite,
        ?WriteAccessAllowedInterface $writeAccessAllowed,
        ?PassportDataInterface $passportData,
        ?ProximityAlertTriggeredInterface $proximityAlertTriggered,
        ?ChatBoostAddedInterface $boostAdded,
        ?ChatBackgroundInterface $chatBackgroundSet,
        ?ForumTopicCreatedInterface $forumTopicCreated,
        ?ForumTopicEditedInterface $forumTopicEdited,
        ?ForumTopicClosedInterface $forumTopicClosed,
        ?ForumTopicReopenedInterface $forumTopicReopened,
        ?GeneralForumTopicHiddenInterface $generalForumTopicHidden,
        ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden,
        ?GiveawayCreatedInterface $giveawayCreated,
        ?GiveawayInterface $giveaway,
        ?GiveawayWinnersInterface $giveawayWinners,
        ?GiveawayCompletedInterface $giveawayCompleted,
        ?VideoChatScheduledInterface $videoChatScheduled,
        ?VideoChatStartedInterface $videoChatStarted,
        ?VideoChatEndedInterface $videoChatEnded,
        ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited,
        ?WebAppDataInterface $webAppData,
        ?InlineKeyboardMarkupInterface $replyMarkup,
    ): MessageInterface;

    public function makeMessageId(int $messageId): MessageIdInterface;

    public function makeInaccessibleMessage(ChatInterface $chat, int $messageId, int $date): InaccessibleMessageInterface;

    public function makeMessageEntity(
        string $type,
        int $offset,
        int $length,
        ?string $url,
        ?UserInterface $user,
        ?string $language,
        ?string $customEmojiId,
    ): MessageEntityInterface;

    public function makeTextQuote(string $text, int $position, ?array $entities, ?bool $isManual): TextQuoteInterface;

    public function makeExternalReplyInfo(
        Types\Interfaces\MessageOriginInterface $origin,
        ?ChatInterface $chat,
        ?int $messageId,
        ?LinkPreviewOptionsInterface $linkPreviewOptions,
        ?AnimationInterface $animation,
        ?AudioInterface $audio,
        ?DocumentInterface $document,
        ?PaidMediaInfoInterface $paidMedia,
        ?array $photo,
        ?StickerInterface $sticker,
        ?StoryInterface $story,
        ?VideoInterface $video,
        ?VideoNoteInterface $videoNote,
        ?VoiceInterface $voice,
        ?bool $hasMediaSpoiler,
        ?ContactInterface $contact,
        ?DiceInterface $dice,
        ?GameInterface $game,
        ?GiveawayInterface $giveaway,
        ?GiveawayWinnersInterface $giveawayWinners,
        ?InvoiceInterface $invoice,
        ?LocationInterface $location,
        ?PollInterface $poll,
        ?VenueInterface $venue,
    ): ExternalReplyInfoInterface;

    public function makeReplyParameters(
        int $messageId,
        int|string|null $chatId,
        ?bool $allowSendingWithoutReply,
        ?string $quote,
        ?string $quoteParseMode,
        ?array $quoteEntities,
        ?int $quotePosition,
    ): ReplyParametersInterface;

    public function makeMessageOriginUser(string $type, int $date, UserInterface $senderUser): MessageOriginUserInterface;

    public function makeMessageOriginHiddenUser(
        string $type,
        int $date,
        string $senderUserName,
    ): MessageOriginHiddenUserInterface;

    public function makeMessageOriginChat(
        string $type,
        int $date,
        ChatInterface $senderChat,
        ?string $authorSignature,
    ): MessageOriginChatInterface;

    public function makeMessageOriginChannel(
        string $type,
        int $date,
        ChatInterface $chat,
        int $messageId,
        ?string $authorSignature,
    ): MessageOriginChannelInterface;

    public function makePhotoSize(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        ?int $fileSize,
    ): PhotoSizeInterface;

    public function makeAnimation(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        int $duration,
        ?PhotoSizeInterface $thumbnail,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
    ): AnimationInterface;

    public function makeAudio(
        string $fileId,
        string $fileUniqueId,
        int $duration,
        ?string $performer,
        ?string $title,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
        ?PhotoSizeInterface $thumbnail,
    ): AudioInterface;

    public function makeDocument(
        string $fileId,
        string $fileUniqueId,
        ?PhotoSizeInterface $thumbnail,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
    ): DocumentInterface;

    public function makeStory(ChatInterface $chat, int $id): StoryInterface;

    public function makeVideo(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        int $duration,
        ?PhotoSizeInterface $thumbnail,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
    ): VideoInterface;

    public function makeVideoNote(
        string $fileId,
        string $fileUniqueId,
        int $length,
        int $duration,
        ?PhotoSizeInterface $thumbnail,
        ?int $fileSize,
    ): VideoNoteInterface;

    public function makeVoice(
        string $fileId,
        string $fileUniqueId,
        int $duration,
        ?string $mimeType,
        ?int $fileSize,
    ): VoiceInterface;

    public function makePaidMediaInfo(int $starCount, array $paidMedia): PaidMediaInfoInterface;

    public function makePaidMediaPreview(
        string $type,
        ?int $width,
        ?int $height,
        ?int $duration,
    ): PaidMediaPreviewInterface;

    public function makePaidMediaPhoto(string $type, array $photo): PaidMediaPhotoInterface;

    public function makePaidMediaVideo(string $type, VideoInterface $video): PaidMediaVideoInterface;

    public function makeContact(
        string $phoneNumber,
        string $firstName,
        ?string $lastName,
        ?int $userId,
        ?string $vcard,
    ): ContactInterface;

    public function makeDice(string $emoji, int $value): DiceInterface;

    public function makePollOption(string $text, int $voterCount, ?array $textEntities): PollOptionInterface;

    public function makeInputPollOption(
        string $text,
        ?string $textParseMode,
        ?array $textEntities,
    ): InputPollOptionInterface;

    public function makePollAnswer(
        string $pollId,
        array $optionIds,
        ?ChatInterface $voterChat,
        ?UserInterface $user,
    ): PollAnswerInterface;

    public function makePoll(
        string $id,
        string $question,
        array $options,
        int $totalVoterCount,
        bool $isClosed,
        bool $isAnonymous,
        string $type,
        bool $allowsMultipleAnswers,
        ?array $questionEntities,
        ?int $correctOptionId,
        ?string $explanation,
        ?array $explanationEntities,
        ?int $openPeriod,
        ?int $closeDate,
    ): PollInterface;

    public function makeLocation(
        float $latitude,
        float $longitude,
        ?float $horizontalAccuracy,
        ?int $livePeriod,
        ?int $heading,
        ?int $proximityAlertRadius,
    ): LocationInterface;

    public function makeVenue(
        LocationInterface $location,
        string $title,
        string $address,
        ?string $foursquareId,
        ?string $foursquareType,
        ?string $googlePlaceId,
        ?string $googlePlaceType,
    ): VenueInterface;

    public function makeWebAppData(string $data, string $buttonText): WebAppDataInterface;

    public function makeProximityAlertTriggered(
        UserInterface $traveler,
        UserInterface $watcher,
        int $distance,
    ): ProximityAlertTriggeredInterface;

    public function makeMessageAutoDeleteTimerChanged(int $messageAutoDeleteTime): MessageAutoDeleteTimerChangedInterface;

    public function makeChatBoostAdded(int $boostCount): ChatBoostAddedInterface;

    public function makeBackgroundFillSolid(string $type, int $color): BackgroundFillSolidInterface;

    public function makeBackgroundFillGradient(
        string $type,
        int $topColor,
        int $bottomColor,
        int $rotationAngle,
    ): BackgroundFillGradientInterface;

    public function makeBackgroundFillFreeformGradient(
        string $type,
        array $colors,
    ): BackgroundFillFreeformGradientInterface;

    public function makeBackgroundTypeFill(
        string $type,
        Types\Interfaces\BackgroundFillInterface $fill,
        int $darkThemeDimming,
    ): BackgroundTypeFillInterface;

    public function makeBackgroundTypeWallpaper(
        string $type,
        DocumentInterface $document,
        int $darkThemeDimming,
        ?bool $isBlurred,
        ?bool $isMoving,
    ): BackgroundTypeWallpaperInterface;

    public function makeBackgroundTypePattern(
        string $type,
        DocumentInterface $document,
        Types\Interfaces\BackgroundFillInterface $fill,
        int $intensity,
        ?bool $isInverted,
        ?bool $isMoving,
    ): BackgroundTypePatternInterface;

    public function makeBackgroundTypeChatTheme(string $type, string $themeName): BackgroundTypeChatThemeInterface;

    public function makeChatBackground(Types\Interfaces\BackgroundTypeInterface $type): ChatBackgroundInterface;

    public function makeForumTopicCreated(
        string $name,
        int $iconColor,
        ?string $iconCustomEmojiId,
    ): ForumTopicCreatedInterface;

    public function makeForumTopicClosed(): ForumTopicClosedInterface;

    public function makeForumTopicEdited(?string $name, ?string $iconCustomEmojiId): ForumTopicEditedInterface;

    public function makeForumTopicReopened(): ForumTopicReopenedInterface;

    public function makeGeneralForumTopicHidden(): GeneralForumTopicHiddenInterface;

    public function makeGeneralForumTopicUnhidden(): GeneralForumTopicUnhiddenInterface;

    public function makeSharedUser(
        int $userId,
        ?string $firstName,
        ?string $lastName,
        ?string $username,
        ?array $photo,
    ): SharedUserInterface;

    public function makeUsersShared(int $requestId, array $users): UsersSharedInterface;

    public function makeChatShared(
        int $requestId,
        int $chatId,
        ?string $title,
        ?string $username,
        ?array $photo,
    ): ChatSharedInterface;

    public function makeWriteAccessAllowed(
        ?bool $fromRequest,
        ?string $webAppName,
        ?bool $fromAttachmentMenu,
    ): WriteAccessAllowedInterface;

    public function makeVideoChatScheduled(int $startDate): VideoChatScheduledInterface;

    public function makeVideoChatStarted(): VideoChatStartedInterface;

    public function makeVideoChatEnded(int $duration): VideoChatEndedInterface;

    public function makeVideoChatParticipantsInvited(array $users): VideoChatParticipantsInvitedInterface;

    public function makeGiveawayCreated(?int $prizeStarCount): GiveawayCreatedInterface;

    public function makeGiveaway(
        array $chats,
        int $winnersSelectionDate,
        int $winnerCount,
        ?bool $onlyNewMembers,
        ?bool $hasPublicWinners,
        ?string $prizeDescription,
        ?array $countryCodes,
        ?int $prizeStarCount,
        ?int $premiumSubscriptionMonthCount,
    ): GiveawayInterface;

    public function makeGiveawayWinners(
        ChatInterface $chat,
        int $giveawayMessageId,
        int $winnersSelectionDate,
        int $winnerCount,
        array $winners,
        ?int $additionalChatCount,
        ?int $prizeStarCount,
        ?int $premiumSubscriptionMonthCount,
        ?int $unclaimedPrizeCount,
        ?bool $onlyNewMembers,
        ?bool $wasRefunded,
        ?string $prizeDescription,
    ): GiveawayWinnersInterface;

    public function makeGiveawayCompleted(
        int $winnerCount,
        ?int $unclaimedPrizeCount,
        ?MessageInterface $giveawayMessage,
        ?bool $isStarGiveaway,
    ): GiveawayCompletedInterface;

    public function makeLinkPreviewOptions(
        ?bool $isDisabled,
        ?string $url,
        ?bool $preferSmallMedia,
        ?bool $preferLargeMedia,
        ?bool $showAboveText,
    ): LinkPreviewOptionsInterface;

    public function makeUserProfilePhotos(int $totalCount, array $photos): UserProfilePhotosInterface;

    public function makeFile(string $fileId, string $fileUniqueId, ?int $fileSize, ?string $filePath): FileInterface;

    public function makeWebAppInfo(string $url): WebAppInfoInterface;

    public function makeReplyKeyboardMarkup(
        array $keyboard,
        ?bool $isPersistent,
        ?bool $resizeKeyboard,
        ?bool $oneTimeKeyboard,
        ?string $inputFieldPlaceholder,
        ?bool $selective,
    ): ReplyKeyboardMarkupInterface;

    public function makeKeyboardButton(
        string $text,
        ?KeyboardButtonRequestUsersInterface $requestUsers,
        ?KeyboardButtonRequestChatInterface $requestChat,
        ?bool $requestContact,
        ?bool $requestLocation,
        ?KeyboardButtonPollTypeInterface $requestPoll,
        ?WebAppInfoInterface $webApp,
    ): KeyboardButtonInterface;

    public function makeKeyboardButtonRequestUsers(
        int $requestId,
        ?bool $userIsBot,
        ?bool $userIsPremium,
        ?int $maxQuantity,
        ?bool $requestName,
        ?bool $requestUsername,
        ?bool $requestPhoto,
    ): KeyboardButtonRequestUsersInterface;

    public function makeKeyboardButtonRequestChat(
        int $requestId,
        bool $chatIsChannel,
        ?bool $chatIsForum,
        ?bool $chatHasUsername,
        ?bool $chatIsCreated,
        ?ChatAdministratorRightsInterface $userAdministratorRights,
        ?ChatAdministratorRightsInterface $botAdministratorRights,
        ?bool $botIsMember,
        ?bool $requestTitle,
        ?bool $requestUsername,
        ?bool $requestPhoto,
    ): KeyboardButtonRequestChatInterface;

    public function makeKeyboardButtonPollType(?string $type): KeyboardButtonPollTypeInterface;

    public function makeReplyKeyboardRemove(bool $removeKeyboard, ?bool $selective): ReplyKeyboardRemoveInterface;

    public function makeInlineKeyboardMarkup(array $inlineKeyboard): InlineKeyboardMarkupInterface;

    public function makeInlineKeyboardButton(
        string $text,
        ?string $url,
        ?string $callbackData,
        ?WebAppInfoInterface $webApp,
        ?LoginUrlInterface $loginUrl,
        ?string $switchInlineQuery,
        ?string $switchInlineQueryCurrentChat,
        ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat,
        ?CopyTextButtonInterface $copyText,
        ?CallbackGameInterface $callbackGame,
        ?bool $pay,
    ): InlineKeyboardButtonInterface;

    public function makeLoginUrl(
        string $url,
        ?string $forwardText,
        ?string $botUsername,
        ?bool $requestWriteAccess,
    ): LoginUrlInterface;

    public function makeSwitchInlineQueryChosenChat(
        ?string $query,
        ?bool $allowUserChats,
        ?bool $allowBotChats,
        ?bool $allowGroupChats,
        ?bool $allowChannelChats,
    ): SwitchInlineQueryChosenChatInterface;

    public function makeCopyTextButton(string $text): CopyTextButtonInterface;

    public function makeCallbackQuery(
        string $id,
        UserInterface $from,
        string $chatInstance,
        ?Types\Interfaces\MaybeInaccessibleMessageInterface $message,
        ?string $inlineMessageId,
        ?string $data,
        ?string $gameShortName,
    ): CallbackQueryInterface;

    public function makeForceReply(
        bool $forceReply,
        ?string $inputFieldPlaceholder,
        ?bool $selective,
    ): ForceReplyInterface;

    public function makeChatPhoto(
        string $smallFileId,
        string $smallFileUniqueId,
        string $bigFileId,
        string $bigFileUniqueId,
    ): ChatPhotoInterface;

    public function makeChatInviteLink(
        string $inviteLink,
        UserInterface $creator,
        bool $createsJoinRequest,
        bool $isPrimary,
        bool $isRevoked,
        ?string $name,
        ?int $expireDate,
        ?int $memberLimit,
        ?int $pendingJoinRequestCount,
        ?int $subscriptionPeriod,
        ?int $subscriptionPrice,
    ): ChatInviteLinkInterface;

    public function makeChatAdministratorRights(
        bool $isAnonymous,
        bool $canManageChat,
        bool $canDeleteMessages,
        bool $canManageVideoChats,
        bool $canRestrictMembers,
        bool $canPromoteMembers,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPostStories,
        bool $canEditStories,
        bool $canDeleteStories,
        ?bool $canPostMessages,
        ?bool $canEditMessages,
        ?bool $canPinMessages,
        ?bool $canManageTopics,
    ): ChatAdministratorRightsInterface;

    public function makeChatMemberUpdated(
        ChatInterface $chat,
        UserInterface $from,
        int $date,
        Types\Interfaces\ChatMemberInterface $oldChatMember,
        Types\Interfaces\ChatMemberInterface $newChatMember,
        ?ChatInviteLinkInterface $inviteLink,
        ?bool $viaJoinRequest,
        ?bool $viaChatFolderInviteLink,
    ): ChatMemberUpdatedInterface;

    public function makeChatMemberOwner(
        string $status,
        UserInterface $user,
        bool $isAnonymous,
        ?string $customTitle,
    ): ChatMemberOwnerInterface;

    public function makeChatMemberAdministrator(
        string $status,
        UserInterface $user,
        bool $canBeEdited,
        bool $isAnonymous,
        bool $canManageChat,
        bool $canDeleteMessages,
        bool $canManageVideoChats,
        bool $canRestrictMembers,
        bool $canPromoteMembers,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPostStories,
        bool $canEditStories,
        bool $canDeleteStories,
        ?bool $canPostMessages,
        ?bool $canEditMessages,
        ?bool $canPinMessages,
        ?bool $canManageTopics,
        ?string $customTitle,
    ): ChatMemberAdministratorInterface;

    public function makeChatMemberMember(string $status, UserInterface $user, ?int $untilDate): ChatMemberMemberInterface;

    public function makeChatMemberRestricted(
        string $status,
        UserInterface $user,
        bool $isMember,
        bool $canSendMessages,
        bool $canSendAudios,
        bool $canSendDocuments,
        bool $canSendPhotos,
        bool $canSendVideos,
        bool $canSendVideoNotes,
        bool $canSendVoiceNotes,
        bool $canSendPolls,
        bool $canSendOtherMessages,
        bool $canAddWebPagePreviews,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPinMessages,
        bool $canManageTopics,
        int $untilDate,
    ): ChatMemberRestrictedInterface;

    public function makeChatMemberLeft(string $status, UserInterface $user): ChatMemberLeftInterface;

    public function makeChatMemberBanned(string $status, UserInterface $user, int $untilDate): ChatMemberBannedInterface;

    public function makeChatJoinRequest(
        ChatInterface $chat,
        UserInterface $from,
        int $userChatId,
        int $date,
        ?string $bio,
        ?ChatInviteLinkInterface $inviteLink,
    ): ChatJoinRequestInterface;

    public function makeChatPermissions(
        ?bool $canSendMessages,
        ?bool $canSendAudios,
        ?bool $canSendDocuments,
        ?bool $canSendPhotos,
        ?bool $canSendVideos,
        ?bool $canSendVideoNotes,
        ?bool $canSendVoiceNotes,
        ?bool $canSendPolls,
        ?bool $canSendOtherMessages,
        ?bool $canAddWebPagePreviews,
        ?bool $canChangeInfo,
        ?bool $canInviteUsers,
        ?bool $canPinMessages,
        ?bool $canManageTopics,
    ): ChatPermissionsInterface;

    public function makeBirthdate(int $day, int $month, ?int $year): BirthdateInterface;

    public function makeBusinessIntro(
        ?string $title,
        ?string $message,
        ?StickerInterface $sticker,
    ): BusinessIntroInterface;

    public function makeBusinessLocation(string $address, ?LocationInterface $location): BusinessLocationInterface;

    public function makeBusinessOpeningHoursInterval(
        int $openingMinute,
        int $closingMinute,
    ): BusinessOpeningHoursIntervalInterface;

    public function makeBusinessOpeningHours(string $timeZoneName, array $openingHours): BusinessOpeningHoursInterface;

    public function makeChatLocation(LocationInterface $location, string $address): ChatLocationInterface;

    public function makeReactionTypeEmoji(string $type, string $emoji): ReactionTypeEmojiInterface;

    public function makeReactionTypeCustomEmoji(string $type, string $customEmojiId): ReactionTypeCustomEmojiInterface;

    public function makeReactionTypePaid(string $type): ReactionTypePaidInterface;

    public function makeReactionCount(
        Types\Interfaces\ReactionTypeInterface $type,
        int $totalCount,
    ): ReactionCountInterface;

    public function makeMessageReactionUpdated(
        ChatInterface $chat,
        int $messageId,
        int $date,
        array $oldReaction,
        array $newReaction,
        ?UserInterface $user,
        ?ChatInterface $actorChat,
    ): MessageReactionUpdatedInterface;

    public function makeMessageReactionCountUpdated(
        ChatInterface $chat,
        int $messageId,
        int $date,
        array $reactions,
    ): MessageReactionCountUpdatedInterface;

    public function makeForumTopic(
        int $messageThreadId,
        string $name,
        int $iconColor,
        ?string $iconCustomEmojiId,
    ): ForumTopicInterface;

    public function makeBotCommand(string $command, string $description): BotCommandInterface;

    public function makeBotCommandScopeDefault(string $type): BotCommandScopeDefaultInterface;

    public function makeBotCommandScopeAllPrivateChats(string $type): BotCommandScopeAllPrivateChatsInterface;

    public function makeBotCommandScopeAllGroupChats(string $type): BotCommandScopeAllGroupChatsInterface;

    public function makeBotCommandScopeAllChatAdministrators(string $type): BotCommandScopeAllChatAdministratorsInterface;

    public function makeBotCommandScopeChat(int|string $chatId, string $type): BotCommandScopeChatInterface;

    public function makeBotCommandScopeChatAdministrators(
        int|string $chatId,
        string $type,
    ): BotCommandScopeChatAdministratorsInterface;

    public function makeBotCommandScopeChatMember(
        int|string $chatId,
        int $userId,
        string $type,
    ): BotCommandScopeChatMemberInterface;

    public function makeBotName(string $name): BotNameInterface;

    public function makeBotDescription(string $description): BotDescriptionInterface;

    public function makeBotShortDescription(string $shortDescription): BotShortDescriptionInterface;

    public function makeMenuButtonCommands(string $type): MenuButtonCommandsInterface;

    public function makeMenuButtonWebApp(
        string $text,
        WebAppInfoInterface $webApp,
        string $type,
    ): MenuButtonWebAppInterface;

    public function makeMenuButtonDefault(string $type): MenuButtonDefaultInterface;

    public function makeChatBoostSourcePremium(string $source, UserInterface $user): ChatBoostSourcePremiumInterface;

    public function makeChatBoostSourceGiftCode(string $source, UserInterface $user): ChatBoostSourceGiftCodeInterface;

    public function makeChatBoostSourceGiveaway(
        string $source,
        int $giveawayMessageId,
        ?UserInterface $user,
        ?int $prizeStarCount,
        ?bool $isUnclaimed,
    ): ChatBoostSourceGiveawayInterface;

    public function makeChatBoost(
        string $boostId,
        int $addDate,
        int $expirationDate,
        Types\Interfaces\ChatBoostSourceInterface $source,
    ): ChatBoostInterface;

    public function makeChatBoostUpdated(ChatInterface $chat, ChatBoostInterface $boost): ChatBoostUpdatedInterface;

    public function makeChatBoostRemoved(
        ChatInterface $chat,
        string $boostId,
        int $removeDate,
        Types\Interfaces\ChatBoostSourceInterface $source,
    ): ChatBoostRemovedInterface;

    public function makeUserChatBoosts(array $boosts): UserChatBoostsInterface;

    public function makeBusinessConnection(
        string $id,
        UserInterface $user,
        int $userChatId,
        int $date,
        bool $canReply,
        bool $isEnabled,
    ): BusinessConnectionInterface;

    public function makeBusinessMessagesDeleted(
        string $businessConnectionId,
        ChatInterface $chat,
        array $messageIds,
    ): BusinessMessagesDeletedInterface;

    public function makeResponseParameters(?int $migrateToChatId, ?int $retryAfter): ResponseParametersInterface;

    public function makeInputMediaPhoto(
        string $media,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?bool $hasSpoiler,
    ): InputMediaPhotoInterface;

    public function makeInputMediaVideo(
        string $media,
        string $type,
        InputFileInterface|string|null $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supportsStreaming,
        ?bool $hasSpoiler,
    ): InputMediaVideoInterface;

    public function makeInputMediaAnimation(
        string $media,
        string $type,
        InputFileInterface|string|null $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $hasSpoiler,
    ): InputMediaAnimationInterface;

    public function makeInputMediaAudio(
        string $media,
        string $type,
        InputFileInterface|string|null $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?int $duration,
        ?string $performer,
        ?string $title,
    ): InputMediaAudioInterface;

    public function makeInputMediaDocument(
        string $media,
        string $type,
        InputFileInterface|string|null $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $disableContentTypeDetection,
    ): InputMediaDocumentInterface;

    public function makeInputFile(string $filePath): InputFileInterface;

    public function makeInputPaidMediaPhoto(string $media, string $type): InputPaidMediaPhotoInterface;

    public function makeInputPaidMediaVideo(
        string $media,
        string $type,
        InputFileInterface|string|null $thumbnail,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supportsStreaming,
    ): InputPaidMediaVideoInterface;

    public function makeSticker(
        string $fileId,
        string $fileUniqueId,
        string $type,
        int $width,
        int $height,
        bool $isAnimated,
        bool $isVideo,
        ?PhotoSizeInterface $thumbnail,
        ?string $emoji,
        ?string $setName,
        ?FileInterface $premiumAnimation,
        ?MaskPositionInterface $maskPosition,
        ?string $customEmojiId,
        ?bool $needsRepainting,
        ?int $fileSize,
    ): StickerInterface;

    public function makeStickerSet(
        string $name,
        string $title,
        string $stickerType,
        array $stickers,
        ?PhotoSizeInterface $thumbnail,
    ): StickerSetInterface;

    public function makeMaskPosition(string $point, float $xShift, float $yShift, float $scale): MaskPositionInterface;

    public function makeInputSticker(
        InputFileInterface|string $sticker,
        string $format,
        array $emojiList,
        ?MaskPositionInterface $maskPosition,
        ?array $keywords,
    ): InputStickerInterface;

    public function makeGift(
        string $id,
        StickerInterface $sticker,
        int $starCount,
        ?int $totalCount,
        ?int $remainingCount,
    ): GiftInterface;

    public function makeGifts(array $gifts): GiftsInterface;

    public function makeInlineQuery(
        string $id,
        UserInterface $from,
        string $query,
        string $offset,
        ?string $chatType,
        ?LocationInterface $location,
    ): InlineQueryInterface;

    public function makeInlineQueryResultsButton(
        string $text,
        ?WebAppInfoInterface $webApp,
        ?string $startParameter,
    ): InlineQueryResultsButtonInterface;

    public function makeInlineQueryResultArticle(
        string $id,
        string $title,
        Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?string $url,
        ?bool $hideUrl,
        ?string $description,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultArticleInterface;

    public function makeInlineQueryResultPhoto(
        string $id,
        string $photoUrl,
        string $thumbnailUrl,
        string $type,
        ?int $photoWidth,
        ?int $photoHeight,
        ?string $title,
        ?string $description,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultPhotoInterface;

    public function makeInlineQueryResultGif(
        string $id,
        string $gifUrl,
        string $thumbnailUrl,
        string $type,
        ?int $gifWidth,
        ?int $gifHeight,
        ?int $gifDuration,
        ?string $thumbnailMimeType,
        ?string $title,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultGifInterface;

    public function makeInlineQueryResultMpeg4Gif(
        string $id,
        string $mpeg4Url,
        string $thumbnailUrl,
        string $type,
        ?int $mpeg4Width,
        ?int $mpeg4Height,
        ?int $mpeg4Duration,
        ?string $thumbnailMimeType,
        ?string $title,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultMpeg4GifInterface;

    public function makeInlineQueryResultVideo(
        string $id,
        string $videoUrl,
        string $mimeType,
        string $thumbnailUrl,
        string $title,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?int $videoWidth,
        ?int $videoHeight,
        ?int $videoDuration,
        ?string $description,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultVideoInterface;

    public function makeInlineQueryResultAudio(
        string $id,
        string $audioUrl,
        string $title,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?string $performer,
        ?int $audioDuration,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultAudioInterface;

    public function makeInlineQueryResultVoice(
        string $id,
        string $voiceUrl,
        string $title,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?int $voiceDuration,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultVoiceInterface;

    public function makeInlineQueryResultDocument(
        string $id,
        string $title,
        string $documentUrl,
        string $mimeType,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?string $description,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultDocumentInterface;

    public function makeInlineQueryResultLocation(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        string $type,
        ?float $horizontalAccuracy,
        ?int $livePeriod,
        ?int $heading,
        ?int $proximityAlertRadius,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultLocationInterface;

    public function makeInlineQueryResultVenue(
        string $id,
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        string $type,
        ?string $foursquareId,
        ?string $foursquareType,
        ?string $googlePlaceId,
        ?string $googlePlaceType,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultVenueInterface;

    public function makeInlineQueryResultContact(
        string $id,
        string $phoneNumber,
        string $firstName,
        string $type,
        ?string $lastName,
        ?string $vcard,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultContactInterface;

    public function makeInlineQueryResultGame(
        string $id,
        string $gameShortName,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
    ): InlineQueryResultGameInterface;

    public function makeInlineQueryResultCachedPhoto(
        string $id,
        string $photoFileId,
        string $type,
        ?string $title,
        ?string $description,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedPhotoInterface;

    public function makeInlineQueryResultCachedGif(
        string $id,
        string $gifFileId,
        string $type,
        ?string $title,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedGifInterface;

    public function makeInlineQueryResultCachedMpeg4Gif(
        string $id,
        string $mpeg4FileId,
        string $type,
        ?string $title,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedMpeg4GifInterface;

    public function makeInlineQueryResultCachedSticker(
        string $id,
        string $stickerFileId,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedStickerInterface;

    public function makeInlineQueryResultCachedDocument(
        string $id,
        string $title,
        string $documentFileId,
        string $type,
        ?string $description,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedDocumentInterface;

    public function makeInlineQueryResultCachedVideo(
        string $id,
        string $videoFileId,
        string $title,
        string $type,
        ?string $description,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedVideoInterface;

    public function makeInlineQueryResultCachedVoice(
        string $id,
        string $voiceFileId,
        string $title,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedVoiceInterface;

    public function makeInlineQueryResultCachedAudio(
        string $id,
        string $audioFileId,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedAudioInterface;

    public function makeInputTextMessageContent(
        string $messageText,
        ?string $parseMode,
        ?array $entities,
        ?LinkPreviewOptionsInterface $linkPreviewOptions,
    ): InputTextMessageContentInterface;

    public function makeInputLocationMessageContent(
        float $latitude,
        float $longitude,
        ?float $horizontalAccuracy,
        ?int $livePeriod,
        ?int $heading,
        ?int $proximityAlertRadius,
    ): InputLocationMessageContentInterface;

    public function makeInputVenueMessageContent(
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquareId,
        ?string $foursquareType,
        ?string $googlePlaceId,
        ?string $googlePlaceType,
    ): InputVenueMessageContentInterface;

    public function makeInputContactMessageContent(
        string $phoneNumber,
        string $firstName,
        ?string $lastName,
        ?string $vcard,
    ): InputContactMessageContentInterface;

    public function makeInputInvoiceMessageContent(
        string $title,
        string $description,
        string $payload,
        string $currency,
        array $prices,
        ?string $providerToken,
        ?int $maxTipAmount,
        ?array $suggestedTipAmounts,
        ?string $providerData,
        ?string $photoUrl,
        ?int $photoSize,
        ?int $photoWidth,
        ?int $photoHeight,
        ?bool $needName,
        ?bool $needPhoneNumber,
        ?bool $needEmail,
        ?bool $needShippingAddress,
        ?bool $sendPhoneNumberToProvider,
        ?bool $sendEmailToProvider,
        ?bool $isFlexible,
    ): InputInvoiceMessageContentInterface;

    public function makeChosenInlineResult(
        string $resultId,
        UserInterface $from,
        string $query,
        ?LocationInterface $location,
        ?string $inlineMessageId,
    ): ChosenInlineResultInterface;

    public function makeSentWebAppMessage(?string $inlineMessageId): SentWebAppMessageInterface;

    public function makePreparedInlineMessage(string $id, int $expirationDate): PreparedInlineMessageInterface;

    public function makeLabeledPrice(string $label, int $amount): LabeledPriceInterface;

    public function makeInvoice(
        string $title,
        string $description,
        string $startParameter,
        string $currency,
        int $totalAmount,
    ): InvoiceInterface;

    public function makeShippingAddress(
        string $countryCode,
        string $state,
        string $city,
        string $streetLine1,
        string $streetLine2,
        string $postCode,
    ): ShippingAddressInterface;

    public function makeOrderInfo(
        ?string $name,
        ?string $phoneNumber,
        ?string $email,
        ?ShippingAddressInterface $shippingAddress,
    ): OrderInfoInterface;

    public function makeShippingOption(string $id, string $title, array $prices): ShippingOptionInterface;

    public function makeSuccessfulPayment(
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        string $telegramPaymentChargeId,
        string $providerPaymentChargeId,
        ?int $subscriptionExpirationDate,
        ?bool $isRecurring,
        ?bool $isFirstRecurring,
        ?string $shippingOptionId,
        ?OrderInfoInterface $orderInfo,
    ): SuccessfulPaymentInterface;

    public function makeRefundedPayment(
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        string $telegramPaymentChargeId,
        ?string $providerPaymentChargeId,
    ): RefundedPaymentInterface;

    public function makeShippingQuery(
        string $id,
        UserInterface $from,
        string $invoicePayload,
        ShippingAddressInterface $shippingAddress,
    ): ShippingQueryInterface;

    public function makePreCheckoutQuery(
        string $id,
        UserInterface $from,
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        ?string $shippingOptionId,
        ?OrderInfoInterface $orderInfo,
    ): PreCheckoutQueryInterface;

    public function makePaidMediaPurchased(UserInterface $from, string $paidMediaPayload): PaidMediaPurchasedInterface;

    public function makeRevenueWithdrawalStatePending(string $type): RevenueWithdrawalStatePendingInterface;

    public function makeRevenueWithdrawalStateSucceeded(
        string $type,
        int $date,
        string $url,
    ): RevenueWithdrawalStateSucceededInterface;

    public function makeRevenueWithdrawalStateFailed(string $type): RevenueWithdrawalStateFailedInterface;

    public function makeTransactionPartnerUser(
        string $type,
        UserInterface $user,
        ?string $invoicePayload,
        ?int $subscriptionPeriod,
        ?array $paidMedia,
        ?string $paidMediaPayload,
        ?string $gift,
    ): TransactionPartnerUserInterface;

    public function makeTransactionPartnerFragment(
        string $type,
        ?Types\Interfaces\RevenueWithdrawalStateInterface $withdrawalState,
    ): TransactionPartnerFragmentInterface;

    public function makeTransactionPartnerTelegramAds(string $type): TransactionPartnerTelegramAdsInterface;

    public function makeTransactionPartnerTelegramApi(
        string $type,
        int $requestCount,
    ): TransactionPartnerTelegramApiInterface;

    public function makeTransactionPartnerOther(string $type): TransactionPartnerOtherInterface;

    public function makeStarTransaction(
        string $id,
        int $amount,
        int $date,
        ?Types\Interfaces\TransactionPartnerInterface $source,
        ?Types\Interfaces\TransactionPartnerInterface $receiver,
    ): StarTransactionInterface;

    public function makeStarTransactions(array $transactions): StarTransactionsInterface;

    public function makePassportData(array $data, EncryptedCredentialsInterface $credentials): PassportDataInterface;

    public function makePassportFile(
        string $fileId,
        string $fileUniqueId,
        int $fileSize,
        int $fileDate,
    ): PassportFileInterface;

    public function makeEncryptedPassportElement(
        string $type,
        string $hash,
        ?string $data,
        ?string $phoneNumber,
        ?string $email,
        ?array $files,
        ?PassportFileInterface $frontSide,
        ?PassportFileInterface $reverseSide,
        ?PassportFileInterface $selfie,
        ?array $translation,
    ): EncryptedPassportElementInterface;

    public function makeEncryptedCredentials(string $data, string $hash, string $secret): EncryptedCredentialsInterface;

    public function makePassportElementErrorDataField(
        string $type,
        string $fieldName,
        string $dataHash,
        string $message,
        string $source,
    ): PassportElementErrorDataFieldInterface;

    public function makePassportElementErrorFrontSide(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorFrontSideInterface;

    public function makePassportElementErrorReverseSide(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorReverseSideInterface;

    public function makePassportElementErrorSelfie(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorSelfieInterface;

    public function makePassportElementErrorFile(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorFileInterface;

    public function makePassportElementErrorFiles(
        string $type,
        array $fileHashes,
        string $message,
        string $source,
    ): PassportElementErrorFilesInterface;

    public function makePassportElementErrorTranslationFile(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorTranslationFileInterface;

    public function makePassportElementErrorTranslationFiles(
        string $type,
        array $fileHashes,
        string $message,
        string $source,
    ): PassportElementErrorTranslationFilesInterface;

    public function makePassportElementErrorUnspecified(
        string $type,
        string $elementHash,
        string $message,
        string $source,
    ): PassportElementErrorUnspecifiedInterface;

    public function makeGame(
        string $title,
        string $description,
        array $photo,
        ?string $text,
        ?array $textEntities,
        ?AnimationInterface $animation,
    ): GameInterface;

    public function makeCallbackGame(): CallbackGameInterface;

    public function makeGameHighScore(int $position, UserInterface $user, int $score): GameHighScoreInterface;
}
