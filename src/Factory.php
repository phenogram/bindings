<?php

namespace Phenogram\Bindings;

use Phenogram\Bindings\Types\AcceptedGiftTypes;
use Phenogram\Bindings\Types\AffiliateInfo;
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
use Phenogram\Bindings\Types\BusinessBotRights;
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
use Phenogram\Bindings\Types\Checklist;
use Phenogram\Bindings\Types\ChecklistTask;
use Phenogram\Bindings\Types\ChecklistTasksAdded;
use Phenogram\Bindings\Types\ChecklistTasksDone;
use Phenogram\Bindings\Types\ChosenInlineResult;
use Phenogram\Bindings\Types\Contact;
use Phenogram\Bindings\Types\CopyTextButton;
use Phenogram\Bindings\Types\Dice;
use Phenogram\Bindings\Types\DirectMessagePriceChanged;
use Phenogram\Bindings\Types\DirectMessagesTopic;
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
use Phenogram\Bindings\Types\GiftBackground;
use Phenogram\Bindings\Types\GiftInfo;
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
use Phenogram\Bindings\Types\InputChecklist;
use Phenogram\Bindings\Types\InputChecklistTask;
use Phenogram\Bindings\Types\InputContactMessageContent;
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
use Phenogram\Bindings\Types\InputProfilePhotoAnimated;
use Phenogram\Bindings\Types\InputProfilePhotoStatic;
use Phenogram\Bindings\Types\InputSticker;
use Phenogram\Bindings\Types\InputStoryContentPhoto;
use Phenogram\Bindings\Types\InputStoryContentVideo;
use Phenogram\Bindings\Types\InputTextMessageContent;
use Phenogram\Bindings\Types\InputVenueMessageContent;
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
use Phenogram\Bindings\Types\Interfaces\DirectMessagesTopicInterface;
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
use Phenogram\Bindings\Types\Interfaces\GiftBackgroundInterface;
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
use Phenogram\Bindings\Types\Interfaces\SuggestedPostApprovalFailedInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostApprovedInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostDeclinedInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostInfoInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPaidInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostParametersInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostPriceInterface;
use Phenogram\Bindings\Types\Interfaces\SuggestedPostRefundedInterface;
use Phenogram\Bindings\Types\Interfaces\SwitchInlineQueryChosenChatInterface;
use Phenogram\Bindings\Types\Interfaces\TextQuoteInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerAffiliateProgramInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerChatInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerFragmentInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerOtherInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramAdsInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerTelegramApiInterface;
use Phenogram\Bindings\Types\Interfaces\TransactionPartnerUserInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftBackdropInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInfoInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftModelInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftSymbolInterface;
use Phenogram\Bindings\Types\Interfaces\UpdateInterface;
use Phenogram\Bindings\Types\Interfaces\UserChatBoostsInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\UserProfilePhotosInterface;
use Phenogram\Bindings\Types\Interfaces\UserRatingInterface;
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
use Phenogram\Bindings\Types\Invoice;
use Phenogram\Bindings\Types\KeyboardButton;
use Phenogram\Bindings\Types\KeyboardButtonPollType;
use Phenogram\Bindings\Types\KeyboardButtonRequestChat;
use Phenogram\Bindings\Types\KeyboardButtonRequestUsers;
use Phenogram\Bindings\Types\LabeledPrice;
use Phenogram\Bindings\Types\LinkPreviewOptions;
use Phenogram\Bindings\Types\Location;
use Phenogram\Bindings\Types\LocationAddress;
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
use Phenogram\Bindings\Types\OwnedGiftRegular;
use Phenogram\Bindings\Types\OwnedGifts;
use Phenogram\Bindings\Types\OwnedGiftUnique;
use Phenogram\Bindings\Types\PaidMediaInfo;
use Phenogram\Bindings\Types\PaidMediaPhoto;
use Phenogram\Bindings\Types\PaidMediaPreview;
use Phenogram\Bindings\Types\PaidMediaPurchased;
use Phenogram\Bindings\Types\PaidMediaVideo;
use Phenogram\Bindings\Types\PaidMessagePriceChanged;
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
use Phenogram\Bindings\Types\StarAmount;
use Phenogram\Bindings\Types\StarTransaction;
use Phenogram\Bindings\Types\StarTransactions;
use Phenogram\Bindings\Types\Sticker;
use Phenogram\Bindings\Types\StickerSet;
use Phenogram\Bindings\Types\Story;
use Phenogram\Bindings\Types\StoryArea;
use Phenogram\Bindings\Types\StoryAreaPosition;
use Phenogram\Bindings\Types\StoryAreaTypeLink;
use Phenogram\Bindings\Types\StoryAreaTypeLocation;
use Phenogram\Bindings\Types\StoryAreaTypeSuggestedReaction;
use Phenogram\Bindings\Types\StoryAreaTypeUniqueGift;
use Phenogram\Bindings\Types\StoryAreaTypeWeather;
use Phenogram\Bindings\Types\SuccessfulPayment;
use Phenogram\Bindings\Types\SuggestedPostApprovalFailed;
use Phenogram\Bindings\Types\SuggestedPostApproved;
use Phenogram\Bindings\Types\SuggestedPostDeclined;
use Phenogram\Bindings\Types\SuggestedPostInfo;
use Phenogram\Bindings\Types\SuggestedPostPaid;
use Phenogram\Bindings\Types\SuggestedPostParameters;
use Phenogram\Bindings\Types\SuggestedPostPrice;
use Phenogram\Bindings\Types\SuggestedPostRefunded;
use Phenogram\Bindings\Types\SwitchInlineQueryChosenChat;
use Phenogram\Bindings\Types\TextQuote;
use Phenogram\Bindings\Types\TransactionPartnerAffiliateProgram;
use Phenogram\Bindings\Types\TransactionPartnerChat;
use Phenogram\Bindings\Types\TransactionPartnerFragment;
use Phenogram\Bindings\Types\TransactionPartnerOther;
use Phenogram\Bindings\Types\TransactionPartnerTelegramAds;
use Phenogram\Bindings\Types\TransactionPartnerTelegramApi;
use Phenogram\Bindings\Types\TransactionPartnerUser;
use Phenogram\Bindings\Types\UniqueGift;
use Phenogram\Bindings\Types\UniqueGiftBackdrop;
use Phenogram\Bindings\Types\UniqueGiftBackdropColors;
use Phenogram\Bindings\Types\UniqueGiftColors;
use Phenogram\Bindings\Types\UniqueGiftInfo;
use Phenogram\Bindings\Types\UniqueGiftModel;
use Phenogram\Bindings\Types\UniqueGiftSymbol;
use Phenogram\Bindings\Types\Update;
use Phenogram\Bindings\Types\User;
use Phenogram\Bindings\Types\UserChatBoosts;
use Phenogram\Bindings\Types\UserProfilePhotos;
use Phenogram\Bindings\Types\UserRating;
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

class Factory implements FactoryInterface
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
    ): UpdateInterface {
        return new Update(
            updateId: $updateId,
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
    ): WebhookInfoInterface {
        return new WebhookInfo(
            url: $url,
            hasCustomCertificate: $hasCustomCertificate,
            pendingUpdateCount: $pendingUpdateCount,
            ipAddress: $ipAddress,
            lastErrorDate: $lastErrorDate,
            lastErrorMessage: $lastErrorMessage,
            lastSynchronizationErrorDate: $lastSynchronizationErrorDate,
            maxConnections: $maxConnections,
            allowedUpdates: $allowedUpdates,
        );
    }

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
        ?bool $hasTopicsEnabled,
    ): UserInterface {
        return new User(
            id: $id,
            isBot: $isBot,
            firstName: $firstName,
            lastName: $lastName,
            username: $username,
            languageCode: $languageCode,
            isPremium: $isPremium,
            addedToAttachmentMenu: $addedToAttachmentMenu,
            canJoinGroups: $canJoinGroups,
            canReadAllGroupMessages: $canReadAllGroupMessages,
            supportsInlineQueries: $supportsInlineQueries,
            canConnectToBusiness: $canConnectToBusiness,
            hasMainWebApp: $hasMainWebApp,
            hasTopicsEnabled: $hasTopicsEnabled,
        );
    }

    public function makeChat(
        int $id,
        string $type,
        ?string $title,
        ?string $username,
        ?string $firstName,
        ?string $lastName,
        ?bool $isForum,
        ?bool $isDirectMessages,
    ): ChatInterface {
        return new Chat(
            id: $id,
            type: $type,
            title: $title,
            username: $username,
            firstName: $firstName,
            lastName: $lastName,
            isForum: $isForum,
            isDirectMessages: $isDirectMessages,
        );
    }

    public function makeChatFullInfo(
        int $id,
        string $type,
        int $accentColorId,
        int $maxReactionCount,
        AcceptedGiftTypesInterface $acceptedGiftTypes,
        ?string $title,
        ?string $username,
        ?string $firstName,
        ?string $lastName,
        ?bool $isForum,
        ?bool $isDirectMessages,
        ?ChatPhotoInterface $photo,
        ?array $activeUsernames,
        ?BirthdateInterface $birthdate,
        ?BusinessIntroInterface $businessIntro,
        ?BusinessLocationInterface $businessLocation,
        ?BusinessOpeningHoursInterface $businessOpeningHours,
        ?ChatInterface $personalChat,
        ?ChatInterface $parentChat,
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
        ?UserRatingInterface $rating,
        ?UniqueGiftColorsInterface $uniqueGiftColors,
        ?int $paidMessageStarCount,
    ): ChatFullInfoInterface {
        return new ChatFullInfo(
            id: $id,
            type: $type,
            accentColorId: $accentColorId,
            maxReactionCount: $maxReactionCount,
            acceptedGiftTypes: $acceptedGiftTypes,
            title: $title,
            username: $username,
            firstName: $firstName,
            lastName: $lastName,
            isForum: $isForum,
            isDirectMessages: $isDirectMessages,
            photo: $photo,
            activeUsernames: $activeUsernames,
            birthdate: $birthdate,
            businessIntro: $businessIntro,
            businessLocation: $businessLocation,
            businessOpeningHours: $businessOpeningHours,
            personalChat: $personalChat,
            parentChat: $parentChat,
            availableReactions: $availableReactions,
            backgroundCustomEmojiId: $backgroundCustomEmojiId,
            profileAccentColorId: $profileAccentColorId,
            profileBackgroundCustomEmojiId: $profileBackgroundCustomEmojiId,
            emojiStatusCustomEmojiId: $emojiStatusCustomEmojiId,
            emojiStatusExpirationDate: $emojiStatusExpirationDate,
            bio: $bio,
            hasPrivateForwards: $hasPrivateForwards,
            hasRestrictedVoiceAndVideoMessages: $hasRestrictedVoiceAndVideoMessages,
            joinToSendMessages: $joinToSendMessages,
            joinByRequest: $joinByRequest,
            description: $description,
            inviteLink: $inviteLink,
            pinnedMessage: $pinnedMessage,
            permissions: $permissions,
            canSendPaidMedia: $canSendPaidMedia,
            slowModeDelay: $slowModeDelay,
            unrestrictBoostCount: $unrestrictBoostCount,
            messageAutoDeleteTime: $messageAutoDeleteTime,
            hasAggressiveAntiSpamEnabled: $hasAggressiveAntiSpamEnabled,
            hasHiddenMembers: $hasHiddenMembers,
            hasProtectedContent: $hasProtectedContent,
            hasVisibleHistory: $hasVisibleHistory,
            stickerSetName: $stickerSetName,
            canSetStickerSet: $canSetStickerSet,
            customEmojiStickerSetName: $customEmojiStickerSetName,
            linkedChatId: $linkedChatId,
            location: $location,
            rating: $rating,
            uniqueGiftColors: $uniqueGiftColors,
            paidMessageStarCount: $paidMessageStarCount,
        );
    }

    public function makeMessage(
        int $messageId,
        int $date,
        ChatInterface $chat,
        ?int $messageThreadId,
        ?DirectMessagesTopicInterface $directMessagesTopic,
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
        ?int $replyToChecklistTaskId,
        ?UserInterface $viaBot,
        ?int $editDate,
        ?bool $hasProtectedContent,
        ?bool $isFromOffline,
        ?bool $isPaidPost,
        ?string $mediaGroupId,
        ?string $authorSignature,
        ?int $paidStarCount,
        ?string $text,
        ?array $entities,
        ?LinkPreviewOptionsInterface $linkPreviewOptions,
        ?SuggestedPostInfoInterface $suggestedPostInfo,
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
        ?ChecklistInterface $checklist,
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
        ?GiftInfoInterface $gift,
        ?UniqueGiftInfoInterface $uniqueGift,
        ?GiftInfoInterface $giftUpgradeSent,
        ?string $connectedWebsite,
        ?WriteAccessAllowedInterface $writeAccessAllowed,
        ?PassportDataInterface $passportData,
        ?ProximityAlertTriggeredInterface $proximityAlertTriggered,
        ?ChatBoostAddedInterface $boostAdded,
        ?ChatBackgroundInterface $chatBackgroundSet,
        ?ChecklistTasksDoneInterface $checklistTasksDone,
        ?ChecklistTasksAddedInterface $checklistTasksAdded,
        ?DirectMessagePriceChangedInterface $directMessagePriceChanged,
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
        ?PaidMessagePriceChangedInterface $paidMessagePriceChanged,
        ?SuggestedPostApprovedInterface $suggestedPostApproved,
        ?SuggestedPostApprovalFailedInterface $suggestedPostApprovalFailed,
        ?SuggestedPostDeclinedInterface $suggestedPostDeclined,
        ?SuggestedPostPaidInterface $suggestedPostPaid,
        ?SuggestedPostRefundedInterface $suggestedPostRefunded,
        ?VideoChatScheduledInterface $videoChatScheduled,
        ?VideoChatStartedInterface $videoChatStarted,
        ?VideoChatEndedInterface $videoChatEnded,
        ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited,
        ?WebAppDataInterface $webAppData,
        ?InlineKeyboardMarkupInterface $replyMarkup,
    ): MessageInterface {
        return new Message(
            messageId: $messageId,
            date: $date,
            chat: $chat,
            messageThreadId: $messageThreadId,
            directMessagesTopic: $directMessagesTopic,
            from: $from,
            senderChat: $senderChat,
            senderBoostCount: $senderBoostCount,
            senderBusinessBot: $senderBusinessBot,
            businessConnectionId: $businessConnectionId,
            forwardOrigin: $forwardOrigin,
            isTopicMessage: $isTopicMessage,
            isAutomaticForward: $isAutomaticForward,
            replyToMessage: $replyToMessage,
            externalReply: $externalReply,
            quote: $quote,
            replyToStory: $replyToStory,
            replyToChecklistTaskId: $replyToChecklistTaskId,
            viaBot: $viaBot,
            editDate: $editDate,
            hasProtectedContent: $hasProtectedContent,
            isFromOffline: $isFromOffline,
            isPaidPost: $isPaidPost,
            mediaGroupId: $mediaGroupId,
            authorSignature: $authorSignature,
            paidStarCount: $paidStarCount,
            text: $text,
            entities: $entities,
            linkPreviewOptions: $linkPreviewOptions,
            suggestedPostInfo: $suggestedPostInfo,
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
            checklist: $checklist,
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
            giftUpgradeSent: $giftUpgradeSent,
            connectedWebsite: $connectedWebsite,
            writeAccessAllowed: $writeAccessAllowed,
            passportData: $passportData,
            proximityAlertTriggered: $proximityAlertTriggered,
            boostAdded: $boostAdded,
            chatBackgroundSet: $chatBackgroundSet,
            checklistTasksDone: $checklistTasksDone,
            checklistTasksAdded: $checklistTasksAdded,
            directMessagePriceChanged: $directMessagePriceChanged,
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
            suggestedPostApproved: $suggestedPostApproved,
            suggestedPostApprovalFailed: $suggestedPostApprovalFailed,
            suggestedPostDeclined: $suggestedPostDeclined,
            suggestedPostPaid: $suggestedPostPaid,
            suggestedPostRefunded: $suggestedPostRefunded,
            videoChatScheduled: $videoChatScheduled,
            videoChatStarted: $videoChatStarted,
            videoChatEnded: $videoChatEnded,
            videoChatParticipantsInvited: $videoChatParticipantsInvited,
            webAppData: $webAppData,
            replyMarkup: $replyMarkup,
        );
    }

    public function makeMessageId(int $messageId): MessageIdInterface
    {
        return new MessageId(
            messageId: $messageId,
        );
    }

    public function makeInaccessibleMessage(ChatInterface $chat, int $messageId, int $date): InaccessibleMessageInterface
    {
        return new InaccessibleMessage(
            chat: $chat,
            messageId: $messageId,
            date: $date,
        );
    }

    public function makeMessageEntity(
        string $type,
        int $offset,
        int $length,
        ?string $url,
        ?UserInterface $user,
        ?string $language,
        ?string $customEmojiId,
    ): MessageEntityInterface {
        return new MessageEntity(
            type: $type,
            offset: $offset,
            length: $length,
            url: $url,
            user: $user,
            language: $language,
            customEmojiId: $customEmojiId,
        );
    }

    public function makeTextQuote(string $text, int $position, ?array $entities, ?bool $isManual): TextQuoteInterface
    {
        return new TextQuote(
            text: $text,
            position: $position,
            entities: $entities,
            isManual: $isManual,
        );
    }

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
        ?ChecklistInterface $checklist,
        ?ContactInterface $contact,
        ?DiceInterface $dice,
        ?GameInterface $game,
        ?GiveawayInterface $giveaway,
        ?GiveawayWinnersInterface $giveawayWinners,
        ?InvoiceInterface $invoice,
        ?LocationInterface $location,
        ?PollInterface $poll,
        ?VenueInterface $venue,
    ): ExternalReplyInfoInterface {
        return new ExternalReplyInfo(
            origin: $origin,
            chat: $chat,
            messageId: $messageId,
            linkPreviewOptions: $linkPreviewOptions,
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
            hasMediaSpoiler: $hasMediaSpoiler,
            checklist: $checklist,
            contact: $contact,
            dice: $dice,
            game: $game,
            giveaway: $giveaway,
            giveawayWinners: $giveawayWinners,
            invoice: $invoice,
            location: $location,
            poll: $poll,
            venue: $venue,
        );
    }

    public function makeReplyParameters(
        int $messageId,
        int|string|null $chatId,
        ?bool $allowSendingWithoutReply,
        ?string $quote,
        ?string $quoteParseMode,
        ?array $quoteEntities,
        ?int $quotePosition,
        ?int $checklistTaskId,
    ): ReplyParametersInterface {
        return new ReplyParameters(
            messageId: $messageId,
            chatId: $chatId,
            allowSendingWithoutReply: $allowSendingWithoutReply,
            quote: $quote,
            quoteParseMode: $quoteParseMode,
            quoteEntities: $quoteEntities,
            quotePosition: $quotePosition,
            checklistTaskId: $checklistTaskId,
        );
    }

    public function makeMessageOriginUser(string $type, int $date, UserInterface $senderUser): MessageOriginUserInterface
    {
        return new MessageOriginUser(
            type: $type,
            date: $date,
            senderUser: $senderUser,
        );
    }

    public function makeMessageOriginHiddenUser(
        string $type,
        int $date,
        string $senderUserName,
    ): MessageOriginHiddenUserInterface {
        return new MessageOriginHiddenUser(
            type: $type,
            date: $date,
            senderUserName: $senderUserName,
        );
    }

    public function makeMessageOriginChat(
        string $type,
        int $date,
        ChatInterface $senderChat,
        ?string $authorSignature,
    ): MessageOriginChatInterface {
        return new MessageOriginChat(
            type: $type,
            date: $date,
            senderChat: $senderChat,
            authorSignature: $authorSignature,
        );
    }

    public function makeMessageOriginChannel(
        string $type,
        int $date,
        ChatInterface $chat,
        int $messageId,
        ?string $authorSignature,
    ): MessageOriginChannelInterface {
        return new MessageOriginChannel(
            type: $type,
            date: $date,
            chat: $chat,
            messageId: $messageId,
            authorSignature: $authorSignature,
        );
    }

    public function makePhotoSize(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        ?int $fileSize,
    ): PhotoSizeInterface {
        return new PhotoSize(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            width: $width,
            height: $height,
            fileSize: $fileSize,
        );
    }

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
    ): AnimationInterface {
        return new Animation(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            width: $width,
            height: $height,
            duration: $duration,
            thumbnail: $thumbnail,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }

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
    ): AudioInterface {
        return new Audio(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            duration: $duration,
            performer: $performer,
            title: $title,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
            thumbnail: $thumbnail,
        );
    }

    public function makeDocument(
        string $fileId,
        string $fileUniqueId,
        ?PhotoSizeInterface $thumbnail,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
    ): DocumentInterface {
        return new Document(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            thumbnail: $thumbnail,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }

    public function makeStory(ChatInterface $chat, int $id): StoryInterface
    {
        return new Story(
            chat: $chat,
            id: $id,
        );
    }

    public function makeVideo(
        string $fileId,
        string $fileUniqueId,
        int $width,
        int $height,
        int $duration,
        ?PhotoSizeInterface $thumbnail,
        ?array $cover,
        ?int $startTimestamp,
        ?string $fileName,
        ?string $mimeType,
        ?int $fileSize,
    ): VideoInterface {
        return new Video(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            width: $width,
            height: $height,
            duration: $duration,
            thumbnail: $thumbnail,
            cover: $cover,
            startTimestamp: $startTimestamp,
            fileName: $fileName,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }

    public function makeVideoNote(
        string $fileId,
        string $fileUniqueId,
        int $length,
        int $duration,
        ?PhotoSizeInterface $thumbnail,
        ?int $fileSize,
    ): VideoNoteInterface {
        return new VideoNote(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            length: $length,
            duration: $duration,
            thumbnail: $thumbnail,
            fileSize: $fileSize,
        );
    }

    public function makeVoice(
        string $fileId,
        string $fileUniqueId,
        int $duration,
        ?string $mimeType,
        ?int $fileSize,
    ): VoiceInterface {
        return new Voice(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            duration: $duration,
            mimeType: $mimeType,
            fileSize: $fileSize,
        );
    }

    public function makePaidMediaInfo(int $starCount, array $paidMedia): PaidMediaInfoInterface
    {
        return new PaidMediaInfo(
            starCount: $starCount,
            paidMedia: $paidMedia,
        );
    }

    public function makePaidMediaPreview(
        string $type,
        ?int $width,
        ?int $height,
        ?int $duration,
    ): PaidMediaPreviewInterface {
        return new PaidMediaPreview(
            type: $type,
            width: $width,
            height: $height,
            duration: $duration,
        );
    }

    public function makePaidMediaPhoto(string $type, array $photo): PaidMediaPhotoInterface
    {
        return new PaidMediaPhoto(
            type: $type,
            photo: $photo,
        );
    }

    public function makePaidMediaVideo(string $type, VideoInterface $video): PaidMediaVideoInterface
    {
        return new PaidMediaVideo(
            type: $type,
            video: $video,
        );
    }

    public function makeContact(
        string $phoneNumber,
        string $firstName,
        ?string $lastName,
        ?int $userId,
        ?string $vcard,
    ): ContactInterface {
        return new Contact(
            phoneNumber: $phoneNumber,
            firstName: $firstName,
            lastName: $lastName,
            userId: $userId,
            vcard: $vcard,
        );
    }

    public function makeDice(string $emoji, int $value): DiceInterface
    {
        return new Dice(
            emoji: $emoji,
            value: $value,
        );
    }

    public function makePollOption(string $text, int $voterCount, ?array $textEntities): PollOptionInterface
    {
        return new PollOption(
            text: $text,
            voterCount: $voterCount,
            textEntities: $textEntities,
        );
    }

    public function makeInputPollOption(
        string $text,
        ?string $textParseMode,
        ?array $textEntities,
    ): InputPollOptionInterface {
        return new InputPollOption(
            text: $text,
            textParseMode: $textParseMode,
            textEntities: $textEntities,
        );
    }

    public function makePollAnswer(
        string $pollId,
        array $optionIds,
        ?ChatInterface $voterChat,
        ?UserInterface $user,
    ): PollAnswerInterface {
        return new PollAnswer(
            pollId: $pollId,
            optionIds: $optionIds,
            voterChat: $voterChat,
            user: $user,
        );
    }

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
    ): PollInterface {
        return new Poll(
            id: $id,
            question: $question,
            options: $options,
            totalVoterCount: $totalVoterCount,
            isClosed: $isClosed,
            isAnonymous: $isAnonymous,
            type: $type,
            allowsMultipleAnswers: $allowsMultipleAnswers,
            questionEntities: $questionEntities,
            correctOptionId: $correctOptionId,
            explanation: $explanation,
            explanationEntities: $explanationEntities,
            openPeriod: $openPeriod,
            closeDate: $closeDate,
        );
    }

    public function makeChecklistTask(
        int $id,
        string $text,
        ?array $textEntities,
        ?UserInterface $completedByUser,
        ?ChatInterface $completedByChat,
        ?int $completionDate,
    ): ChecklistTaskInterface {
        return new ChecklistTask(
            id: $id,
            text: $text,
            textEntities: $textEntities,
            completedByUser: $completedByUser,
            completedByChat: $completedByChat,
            completionDate: $completionDate,
        );
    }

    public function makeChecklist(
        string $title,
        array $tasks,
        ?array $titleEntities,
        ?bool $othersCanAddTasks,
        ?bool $othersCanMarkTasksAsDone,
    ): ChecklistInterface {
        return new Checklist(
            title: $title,
            tasks: $tasks,
            titleEntities: $titleEntities,
            othersCanAddTasks: $othersCanAddTasks,
            othersCanMarkTasksAsDone: $othersCanMarkTasksAsDone,
        );
    }

    public function makeInputChecklistTask(
        int $id,
        string $text,
        ?string $parseMode,
        ?array $textEntities,
    ): InputChecklistTaskInterface {
        return new InputChecklistTask(
            id: $id,
            text: $text,
            parseMode: $parseMode,
            textEntities: $textEntities,
        );
    }

    public function makeInputChecklist(
        string $title,
        array $tasks,
        ?string $parseMode,
        ?array $titleEntities,
        ?bool $othersCanAddTasks,
        ?bool $othersCanMarkTasksAsDone,
    ): InputChecklistInterface {
        return new InputChecklist(
            title: $title,
            tasks: $tasks,
            parseMode: $parseMode,
            titleEntities: $titleEntities,
            othersCanAddTasks: $othersCanAddTasks,
            othersCanMarkTasksAsDone: $othersCanMarkTasksAsDone,
        );
    }

    public function makeChecklistTasksDone(
        ?MessageInterface $checklistMessage,
        ?array $markedAsDoneTaskIds,
        ?array $markedAsNotDoneTaskIds,
    ): ChecklistTasksDoneInterface {
        return new ChecklistTasksDone(
            checklistMessage: $checklistMessage,
            markedAsDoneTaskIds: $markedAsDoneTaskIds,
            markedAsNotDoneTaskIds: $markedAsNotDoneTaskIds,
        );
    }

    public function makeChecklistTasksAdded(
        array $tasks,
        ?MessageInterface $checklistMessage,
    ): ChecklistTasksAddedInterface {
        return new ChecklistTasksAdded(
            tasks: $tasks,
            checklistMessage: $checklistMessage,
        );
    }

    public function makeLocation(
        float $latitude,
        float $longitude,
        ?float $horizontalAccuracy,
        ?int $livePeriod,
        ?int $heading,
        ?int $proximityAlertRadius,
    ): LocationInterface {
        return new Location(
            latitude: $latitude,
            longitude: $longitude,
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
        );
    }

    public function makeVenue(
        LocationInterface $location,
        string $title,
        string $address,
        ?string $foursquareId,
        ?string $foursquareType,
        ?string $googlePlaceId,
        ?string $googlePlaceType,
    ): VenueInterface {
        return new Venue(
            location: $location,
            title: $title,
            address: $address,
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
        );
    }

    public function makeWebAppData(string $data, string $buttonText): WebAppDataInterface
    {
        return new WebAppData(
            data: $data,
            buttonText: $buttonText,
        );
    }

    public function makeProximityAlertTriggered(
        UserInterface $traveler,
        UserInterface $watcher,
        int $distance,
    ): ProximityAlertTriggeredInterface {
        return new ProximityAlertTriggered(
            traveler: $traveler,
            watcher: $watcher,
            distance: $distance,
        );
    }

    public function makeMessageAutoDeleteTimerChanged(int $messageAutoDeleteTime): MessageAutoDeleteTimerChangedInterface
    {
        return new MessageAutoDeleteTimerChanged(
            messageAutoDeleteTime: $messageAutoDeleteTime,
        );
    }

    public function makeChatBoostAdded(int $boostCount): ChatBoostAddedInterface
    {
        return new ChatBoostAdded(
            boostCount: $boostCount,
        );
    }

    public function makeBackgroundFillSolid(string $type, int $color): BackgroundFillSolidInterface
    {
        return new BackgroundFillSolid(
            type: $type,
            color: $color,
        );
    }

    public function makeBackgroundFillGradient(
        string $type,
        int $topColor,
        int $bottomColor,
        int $rotationAngle,
    ): BackgroundFillGradientInterface {
        return new BackgroundFillGradient(
            type: $type,
            topColor: $topColor,
            bottomColor: $bottomColor,
            rotationAngle: $rotationAngle,
        );
    }

    public function makeBackgroundFillFreeformGradient(
        string $type,
        array $colors,
    ): BackgroundFillFreeformGradientInterface {
        return new BackgroundFillFreeformGradient(
            type: $type,
            colors: $colors,
        );
    }

    public function makeBackgroundTypeFill(
        string $type,
        Types\Interfaces\BackgroundFillInterface $fill,
        int $darkThemeDimming,
    ): BackgroundTypeFillInterface {
        return new BackgroundTypeFill(
            type: $type,
            fill: $fill,
            darkThemeDimming: $darkThemeDimming,
        );
    }

    public function makeBackgroundTypeWallpaper(
        string $type,
        DocumentInterface $document,
        int $darkThemeDimming,
        ?bool $isBlurred,
        ?bool $isMoving,
    ): BackgroundTypeWallpaperInterface {
        return new BackgroundTypeWallpaper(
            type: $type,
            document: $document,
            darkThemeDimming: $darkThemeDimming,
            isBlurred: $isBlurred,
            isMoving: $isMoving,
        );
    }

    public function makeBackgroundTypePattern(
        string $type,
        DocumentInterface $document,
        Types\Interfaces\BackgroundFillInterface $fill,
        int $intensity,
        ?bool $isInverted,
        ?bool $isMoving,
    ): BackgroundTypePatternInterface {
        return new BackgroundTypePattern(
            type: $type,
            document: $document,
            fill: $fill,
            intensity: $intensity,
            isInverted: $isInverted,
            isMoving: $isMoving,
        );
    }

    public function makeBackgroundTypeChatTheme(string $type, string $themeName): BackgroundTypeChatThemeInterface
    {
        return new BackgroundTypeChatTheme(
            type: $type,
            themeName: $themeName,
        );
    }

    public function makeChatBackground(Types\Interfaces\BackgroundTypeInterface $type): ChatBackgroundInterface
    {
        return new ChatBackground(
            type: $type,
        );
    }

    public function makeForumTopicCreated(
        string $name,
        int $iconColor,
        ?string $iconCustomEmojiId,
        ?bool $isNameImplicit,
    ): ForumTopicCreatedInterface {
        return new ForumTopicCreated(
            name: $name,
            iconColor: $iconColor,
            iconCustomEmojiId: $iconCustomEmojiId,
            isNameImplicit: $isNameImplicit,
        );
    }

    public function makeForumTopicClosed(): ForumTopicClosedInterface
    {
        return new ForumTopicClosed();
    }

    public function makeForumTopicEdited(?string $name, ?string $iconCustomEmojiId): ForumTopicEditedInterface
    {
        return new ForumTopicEdited(
            name: $name,
            iconCustomEmojiId: $iconCustomEmojiId,
        );
    }

    public function makeForumTopicReopened(): ForumTopicReopenedInterface
    {
        return new ForumTopicReopened();
    }

    public function makeGeneralForumTopicHidden(): GeneralForumTopicHiddenInterface
    {
        return new GeneralForumTopicHidden();
    }

    public function makeGeneralForumTopicUnhidden(): GeneralForumTopicUnhiddenInterface
    {
        return new GeneralForumTopicUnhidden();
    }

    public function makeSharedUser(
        int $userId,
        ?string $firstName,
        ?string $lastName,
        ?string $username,
        ?array $photo,
    ): SharedUserInterface {
        return new SharedUser(
            userId: $userId,
            firstName: $firstName,
            lastName: $lastName,
            username: $username,
            photo: $photo,
        );
    }

    public function makeUsersShared(int $requestId, array $users): UsersSharedInterface
    {
        return new UsersShared(
            requestId: $requestId,
            users: $users,
        );
    }

    public function makeChatShared(
        int $requestId,
        int $chatId,
        ?string $title,
        ?string $username,
        ?array $photo,
    ): ChatSharedInterface {
        return new ChatShared(
            requestId: $requestId,
            chatId: $chatId,
            title: $title,
            username: $username,
            photo: $photo,
        );
    }

    public function makeWriteAccessAllowed(
        ?bool $fromRequest,
        ?string $webAppName,
        ?bool $fromAttachmentMenu,
    ): WriteAccessAllowedInterface {
        return new WriteAccessAllowed(
            fromRequest: $fromRequest,
            webAppName: $webAppName,
            fromAttachmentMenu: $fromAttachmentMenu,
        );
    }

    public function makeVideoChatScheduled(int $startDate): VideoChatScheduledInterface
    {
        return new VideoChatScheduled(
            startDate: $startDate,
        );
    }

    public function makeVideoChatStarted(): VideoChatStartedInterface
    {
        return new VideoChatStarted();
    }

    public function makeVideoChatEnded(int $duration): VideoChatEndedInterface
    {
        return new VideoChatEnded(
            duration: $duration,
        );
    }

    public function makeVideoChatParticipantsInvited(array $users): VideoChatParticipantsInvitedInterface
    {
        return new VideoChatParticipantsInvited(
            users: $users,
        );
    }

    public function makePaidMessagePriceChanged(int $paidMessageStarCount): PaidMessagePriceChangedInterface
    {
        return new PaidMessagePriceChanged(
            paidMessageStarCount: $paidMessageStarCount,
        );
    }

    public function makeDirectMessagePriceChanged(
        bool $areDirectMessagesEnabled,
        ?int $directMessageStarCount,
    ): DirectMessagePriceChangedInterface {
        return new DirectMessagePriceChanged(
            areDirectMessagesEnabled: $areDirectMessagesEnabled,
            directMessageStarCount: $directMessageStarCount,
        );
    }

    public function makeSuggestedPostApproved(
        int $sendDate,
        ?MessageInterface $suggestedPostMessage,
        ?SuggestedPostPriceInterface $price,
    ): SuggestedPostApprovedInterface {
        return new SuggestedPostApproved(
            sendDate: $sendDate,
            suggestedPostMessage: $suggestedPostMessage,
            price: $price,
        );
    }

    public function makeSuggestedPostApprovalFailed(
        SuggestedPostPriceInterface $price,
        ?MessageInterface $suggestedPostMessage,
    ): SuggestedPostApprovalFailedInterface {
        return new SuggestedPostApprovalFailed(
            price: $price,
            suggestedPostMessage: $suggestedPostMessage,
        );
    }

    public function makeSuggestedPostDeclined(
        ?MessageInterface $suggestedPostMessage,
        ?string $comment,
    ): SuggestedPostDeclinedInterface {
        return new SuggestedPostDeclined(
            suggestedPostMessage: $suggestedPostMessage,
            comment: $comment,
        );
    }

    public function makeSuggestedPostPaid(
        string $currency,
        ?MessageInterface $suggestedPostMessage,
        ?int $amount,
        ?StarAmountInterface $starAmount,
    ): SuggestedPostPaidInterface {
        return new SuggestedPostPaid(
            currency: $currency,
            suggestedPostMessage: $suggestedPostMessage,
            amount: $amount,
            starAmount: $starAmount,
        );
    }

    public function makeSuggestedPostRefunded(
        string $reason,
        ?MessageInterface $suggestedPostMessage,
    ): SuggestedPostRefundedInterface {
        return new SuggestedPostRefunded(
            reason: $reason,
            suggestedPostMessage: $suggestedPostMessage,
        );
    }

    public function makeGiveawayCreated(?int $prizeStarCount): GiveawayCreatedInterface
    {
        return new GiveawayCreated(
            prizeStarCount: $prizeStarCount,
        );
    }

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
    ): GiveawayInterface {
        return new Giveaway(
            chats: $chats,
            winnersSelectionDate: $winnersSelectionDate,
            winnerCount: $winnerCount,
            onlyNewMembers: $onlyNewMembers,
            hasPublicWinners: $hasPublicWinners,
            prizeDescription: $prizeDescription,
            countryCodes: $countryCodes,
            prizeStarCount: $prizeStarCount,
            premiumSubscriptionMonthCount: $premiumSubscriptionMonthCount,
        );
    }

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
    ): GiveawayWinnersInterface {
        return new GiveawayWinners(
            chat: $chat,
            giveawayMessageId: $giveawayMessageId,
            winnersSelectionDate: $winnersSelectionDate,
            winnerCount: $winnerCount,
            winners: $winners,
            additionalChatCount: $additionalChatCount,
            prizeStarCount: $prizeStarCount,
            premiumSubscriptionMonthCount: $premiumSubscriptionMonthCount,
            unclaimedPrizeCount: $unclaimedPrizeCount,
            onlyNewMembers: $onlyNewMembers,
            wasRefunded: $wasRefunded,
            prizeDescription: $prizeDescription,
        );
    }

    public function makeGiveawayCompleted(
        int $winnerCount,
        ?int $unclaimedPrizeCount,
        ?MessageInterface $giveawayMessage,
        ?bool $isStarGiveaway,
    ): GiveawayCompletedInterface {
        return new GiveawayCompleted(
            winnerCount: $winnerCount,
            unclaimedPrizeCount: $unclaimedPrizeCount,
            giveawayMessage: $giveawayMessage,
            isStarGiveaway: $isStarGiveaway,
        );
    }

    public function makeLinkPreviewOptions(
        ?bool $isDisabled,
        ?string $url,
        ?bool $preferSmallMedia,
        ?bool $preferLargeMedia,
        ?bool $showAboveText,
    ): LinkPreviewOptionsInterface {
        return new LinkPreviewOptions(
            isDisabled: $isDisabled,
            url: $url,
            preferSmallMedia: $preferSmallMedia,
            preferLargeMedia: $preferLargeMedia,
            showAboveText: $showAboveText,
        );
    }

    public function makeSuggestedPostPrice(string $currency, int $amount): SuggestedPostPriceInterface
    {
        return new SuggestedPostPrice(
            currency: $currency,
            amount: $amount,
        );
    }

    public function makeSuggestedPostInfo(
        string $state,
        ?SuggestedPostPriceInterface $price,
        ?int $sendDate,
    ): SuggestedPostInfoInterface {
        return new SuggestedPostInfo(
            state: $state,
            price: $price,
            sendDate: $sendDate,
        );
    }

    public function makeSuggestedPostParameters(
        ?SuggestedPostPriceInterface $price,
        ?int $sendDate,
    ): SuggestedPostParametersInterface {
        return new SuggestedPostParameters(
            price: $price,
            sendDate: $sendDate,
        );
    }

    public function makeDirectMessagesTopic(int $topicId, ?UserInterface $user): DirectMessagesTopicInterface
    {
        return new DirectMessagesTopic(
            topicId: $topicId,
            user: $user,
        );
    }

    public function makeUserProfilePhotos(int $totalCount, array $photos): UserProfilePhotosInterface
    {
        return new UserProfilePhotos(
            totalCount: $totalCount,
            photos: $photos,
        );
    }

    public function makeFile(string $fileId, string $fileUniqueId, ?int $fileSize, ?string $filePath): FileInterface
    {
        return new File(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            fileSize: $fileSize,
            filePath: $filePath,
        );
    }

    public function makeWebAppInfo(string $url): WebAppInfoInterface
    {
        return new WebAppInfo(
            url: $url,
        );
    }

    public function makeReplyKeyboardMarkup(
        array $keyboard,
        ?bool $isPersistent,
        ?bool $resizeKeyboard,
        ?bool $oneTimeKeyboard,
        ?string $inputFieldPlaceholder,
        ?bool $selective,
    ): ReplyKeyboardMarkupInterface {
        return new ReplyKeyboardMarkup(
            keyboard: $keyboard,
            isPersistent: $isPersistent,
            resizeKeyboard: $resizeKeyboard,
            oneTimeKeyboard: $oneTimeKeyboard,
            inputFieldPlaceholder: $inputFieldPlaceholder,
            selective: $selective,
        );
    }

    public function makeKeyboardButton(
        string $text,
        ?KeyboardButtonRequestUsersInterface $requestUsers,
        ?KeyboardButtonRequestChatInterface $requestChat,
        ?bool $requestContact,
        ?bool $requestLocation,
        ?KeyboardButtonPollTypeInterface $requestPoll,
        ?WebAppInfoInterface $webApp,
    ): KeyboardButtonInterface {
        return new KeyboardButton(
            text: $text,
            requestUsers: $requestUsers,
            requestChat: $requestChat,
            requestContact: $requestContact,
            requestLocation: $requestLocation,
            requestPoll: $requestPoll,
            webApp: $webApp,
        );
    }

    public function makeKeyboardButtonRequestUsers(
        int $requestId,
        ?bool $userIsBot,
        ?bool $userIsPremium,
        ?int $maxQuantity,
        ?bool $requestName,
        ?bool $requestUsername,
        ?bool $requestPhoto,
    ): KeyboardButtonRequestUsersInterface {
        return new KeyboardButtonRequestUsers(
            requestId: $requestId,
            userIsBot: $userIsBot,
            userIsPremium: $userIsPremium,
            maxQuantity: $maxQuantity,
            requestName: $requestName,
            requestUsername: $requestUsername,
            requestPhoto: $requestPhoto,
        );
    }

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
    ): KeyboardButtonRequestChatInterface {
        return new KeyboardButtonRequestChat(
            requestId: $requestId,
            chatIsChannel: $chatIsChannel,
            chatIsForum: $chatIsForum,
            chatHasUsername: $chatHasUsername,
            chatIsCreated: $chatIsCreated,
            userAdministratorRights: $userAdministratorRights,
            botAdministratorRights: $botAdministratorRights,
            botIsMember: $botIsMember,
            requestTitle: $requestTitle,
            requestUsername: $requestUsername,
            requestPhoto: $requestPhoto,
        );
    }

    public function makeKeyboardButtonPollType(?string $type): KeyboardButtonPollTypeInterface
    {
        return new KeyboardButtonPollType(
            type: $type,
        );
    }

    public function makeReplyKeyboardRemove(bool $removeKeyboard, ?bool $selective): ReplyKeyboardRemoveInterface
    {
        return new ReplyKeyboardRemove(
            removeKeyboard: $removeKeyboard,
            selective: $selective,
        );
    }

    public function makeInlineKeyboardMarkup(array $inlineKeyboard): InlineKeyboardMarkupInterface
    {
        return new InlineKeyboardMarkup(
            inlineKeyboard: $inlineKeyboard,
        );
    }

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
    ): InlineKeyboardButtonInterface {
        return new InlineKeyboardButton(
            text: $text,
            url: $url,
            callbackData: $callbackData,
            webApp: $webApp,
            loginUrl: $loginUrl,
            switchInlineQuery: $switchInlineQuery,
            switchInlineQueryCurrentChat: $switchInlineQueryCurrentChat,
            switchInlineQueryChosenChat: $switchInlineQueryChosenChat,
            copyText: $copyText,
            callbackGame: $callbackGame,
            pay: $pay,
        );
    }

    public function makeLoginUrl(
        string $url,
        ?string $forwardText,
        ?string $botUsername,
        ?bool $requestWriteAccess,
    ): LoginUrlInterface {
        return new LoginUrl(
            url: $url,
            forwardText: $forwardText,
            botUsername: $botUsername,
            requestWriteAccess: $requestWriteAccess,
        );
    }

    public function makeSwitchInlineQueryChosenChat(
        ?string $query,
        ?bool $allowUserChats,
        ?bool $allowBotChats,
        ?bool $allowGroupChats,
        ?bool $allowChannelChats,
    ): SwitchInlineQueryChosenChatInterface {
        return new SwitchInlineQueryChosenChat(
            query: $query,
            allowUserChats: $allowUserChats,
            allowBotChats: $allowBotChats,
            allowGroupChats: $allowGroupChats,
            allowChannelChats: $allowChannelChats,
        );
    }

    public function makeCopyTextButton(string $text): CopyTextButtonInterface
    {
        return new CopyTextButton(
            text: $text,
        );
    }

    public function makeCallbackQuery(
        string $id,
        UserInterface $from,
        string $chatInstance,
        ?Types\Interfaces\MaybeInaccessibleMessageInterface $message,
        ?string $inlineMessageId,
        ?string $data,
        ?string $gameShortName,
    ): CallbackQueryInterface {
        return new CallbackQuery(
            id: $id,
            from: $from,
            chatInstance: $chatInstance,
            message: $message,
            inlineMessageId: $inlineMessageId,
            data: $data,
            gameShortName: $gameShortName,
        );
    }

    public function makeForceReply(
        bool $forceReply,
        ?string $inputFieldPlaceholder,
        ?bool $selective,
    ): ForceReplyInterface {
        return new ForceReply(
            forceReply: $forceReply,
            inputFieldPlaceholder: $inputFieldPlaceholder,
            selective: $selective,
        );
    }

    public function makeChatPhoto(
        string $smallFileId,
        string $smallFileUniqueId,
        string $bigFileId,
        string $bigFileUniqueId,
    ): ChatPhotoInterface {
        return new ChatPhoto(
            smallFileId: $smallFileId,
            smallFileUniqueId: $smallFileUniqueId,
            bigFileId: $bigFileId,
            bigFileUniqueId: $bigFileUniqueId,
        );
    }

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
    ): ChatInviteLinkInterface {
        return new ChatInviteLink(
            inviteLink: $inviteLink,
            creator: $creator,
            createsJoinRequest: $createsJoinRequest,
            isPrimary: $isPrimary,
            isRevoked: $isRevoked,
            name: $name,
            expireDate: $expireDate,
            memberLimit: $memberLimit,
            pendingJoinRequestCount: $pendingJoinRequestCount,
            subscriptionPeriod: $subscriptionPeriod,
            subscriptionPrice: $subscriptionPrice,
        );
    }

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
        ?bool $canManageDirectMessages,
    ): ChatAdministratorRightsInterface {
        return new ChatAdministratorRights(
            isAnonymous: $isAnonymous,
            canManageChat: $canManageChat,
            canDeleteMessages: $canDeleteMessages,
            canManageVideoChats: $canManageVideoChats,
            canRestrictMembers: $canRestrictMembers,
            canPromoteMembers: $canPromoteMembers,
            canChangeInfo: $canChangeInfo,
            canInviteUsers: $canInviteUsers,
            canPostStories: $canPostStories,
            canEditStories: $canEditStories,
            canDeleteStories: $canDeleteStories,
            canPostMessages: $canPostMessages,
            canEditMessages: $canEditMessages,
            canPinMessages: $canPinMessages,
            canManageTopics: $canManageTopics,
            canManageDirectMessages: $canManageDirectMessages,
        );
    }

    public function makeChatMemberUpdated(
        ChatInterface $chat,
        UserInterface $from,
        int $date,
        Types\Interfaces\ChatMemberInterface $oldChatMember,
        Types\Interfaces\ChatMemberInterface $newChatMember,
        ?ChatInviteLinkInterface $inviteLink,
        ?bool $viaJoinRequest,
        ?bool $viaChatFolderInviteLink,
    ): ChatMemberUpdatedInterface {
        return new ChatMemberUpdated(
            chat: $chat,
            from: $from,
            date: $date,
            oldChatMember: $oldChatMember,
            newChatMember: $newChatMember,
            inviteLink: $inviteLink,
            viaJoinRequest: $viaJoinRequest,
            viaChatFolderInviteLink: $viaChatFolderInviteLink,
        );
    }

    public function makeChatMemberOwner(
        string $status,
        UserInterface $user,
        bool $isAnonymous,
        ?string $customTitle,
    ): ChatMemberOwnerInterface {
        return new ChatMemberOwner(
            status: $status,
            user: $user,
            isAnonymous: $isAnonymous,
            customTitle: $customTitle,
        );
    }

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
        ?bool $canManageDirectMessages,
        ?string $customTitle,
    ): ChatMemberAdministratorInterface {
        return new ChatMemberAdministrator(
            status: $status,
            user: $user,
            canBeEdited: $canBeEdited,
            isAnonymous: $isAnonymous,
            canManageChat: $canManageChat,
            canDeleteMessages: $canDeleteMessages,
            canManageVideoChats: $canManageVideoChats,
            canRestrictMembers: $canRestrictMembers,
            canPromoteMembers: $canPromoteMembers,
            canChangeInfo: $canChangeInfo,
            canInviteUsers: $canInviteUsers,
            canPostStories: $canPostStories,
            canEditStories: $canEditStories,
            canDeleteStories: $canDeleteStories,
            canPostMessages: $canPostMessages,
            canEditMessages: $canEditMessages,
            canPinMessages: $canPinMessages,
            canManageTopics: $canManageTopics,
            canManageDirectMessages: $canManageDirectMessages,
            customTitle: $customTitle,
        );
    }

    public function makeChatMemberMember(string $status, UserInterface $user, ?int $untilDate): ChatMemberMemberInterface
    {
        return new ChatMemberMember(
            status: $status,
            user: $user,
            untilDate: $untilDate,
        );
    }

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
    ): ChatMemberRestrictedInterface {
        return new ChatMemberRestricted(
            status: $status,
            user: $user,
            isMember: $isMember,
            canSendMessages: $canSendMessages,
            canSendAudios: $canSendAudios,
            canSendDocuments: $canSendDocuments,
            canSendPhotos: $canSendPhotos,
            canSendVideos: $canSendVideos,
            canSendVideoNotes: $canSendVideoNotes,
            canSendVoiceNotes: $canSendVoiceNotes,
            canSendPolls: $canSendPolls,
            canSendOtherMessages: $canSendOtherMessages,
            canAddWebPagePreviews: $canAddWebPagePreviews,
            canChangeInfo: $canChangeInfo,
            canInviteUsers: $canInviteUsers,
            canPinMessages: $canPinMessages,
            canManageTopics: $canManageTopics,
            untilDate: $untilDate,
        );
    }

    public function makeChatMemberLeft(string $status, UserInterface $user): ChatMemberLeftInterface
    {
        return new ChatMemberLeft(
            status: $status,
            user: $user,
        );
    }

    public function makeChatMemberBanned(string $status, UserInterface $user, int $untilDate): ChatMemberBannedInterface
    {
        return new ChatMemberBanned(
            status: $status,
            user: $user,
            untilDate: $untilDate,
        );
    }

    public function makeChatJoinRequest(
        ChatInterface $chat,
        UserInterface $from,
        int $userChatId,
        int $date,
        ?string $bio,
        ?ChatInviteLinkInterface $inviteLink,
    ): ChatJoinRequestInterface {
        return new ChatJoinRequest(
            chat: $chat,
            from: $from,
            userChatId: $userChatId,
            date: $date,
            bio: $bio,
            inviteLink: $inviteLink,
        );
    }

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
    ): ChatPermissionsInterface {
        return new ChatPermissions(
            canSendMessages: $canSendMessages,
            canSendAudios: $canSendAudios,
            canSendDocuments: $canSendDocuments,
            canSendPhotos: $canSendPhotos,
            canSendVideos: $canSendVideos,
            canSendVideoNotes: $canSendVideoNotes,
            canSendVoiceNotes: $canSendVoiceNotes,
            canSendPolls: $canSendPolls,
            canSendOtherMessages: $canSendOtherMessages,
            canAddWebPagePreviews: $canAddWebPagePreviews,
            canChangeInfo: $canChangeInfo,
            canInviteUsers: $canInviteUsers,
            canPinMessages: $canPinMessages,
            canManageTopics: $canManageTopics,
        );
    }

    public function makeBirthdate(int $day, int $month, ?int $year): BirthdateInterface
    {
        return new Birthdate(
            day: $day,
            month: $month,
            year: $year,
        );
    }

    public function makeBusinessIntro(
        ?string $title,
        ?string $message,
        ?StickerInterface $sticker,
    ): BusinessIntroInterface {
        return new BusinessIntro(
            title: $title,
            message: $message,
            sticker: $sticker,
        );
    }

    public function makeBusinessLocation(string $address, ?LocationInterface $location): BusinessLocationInterface
    {
        return new BusinessLocation(
            address: $address,
            location: $location,
        );
    }

    public function makeBusinessOpeningHoursInterval(
        int $openingMinute,
        int $closingMinute,
    ): BusinessOpeningHoursIntervalInterface {
        return new BusinessOpeningHoursInterval(
            openingMinute: $openingMinute,
            closingMinute: $closingMinute,
        );
    }

    public function makeBusinessOpeningHours(string $timeZoneName, array $openingHours): BusinessOpeningHoursInterface
    {
        return new BusinessOpeningHours(
            timeZoneName: $timeZoneName,
            openingHours: $openingHours,
        );
    }

    public function makeUserRating(
        int $level,
        int $rating,
        int $currentLevelRating,
        ?int $nextLevelRating,
    ): UserRatingInterface {
        return new UserRating(
            level: $level,
            rating: $rating,
            currentLevelRating: $currentLevelRating,
            nextLevelRating: $nextLevelRating,
        );
    }

    public function makeStoryAreaPosition(
        float $xPercentage,
        float $yPercentage,
        float $widthPercentage,
        float $heightPercentage,
        float $rotationAngle,
        float $cornerRadiusPercentage,
    ): StoryAreaPositionInterface {
        return new StoryAreaPosition(
            xPercentage: $xPercentage,
            yPercentage: $yPercentage,
            widthPercentage: $widthPercentage,
            heightPercentage: $heightPercentage,
            rotationAngle: $rotationAngle,
            cornerRadiusPercentage: $cornerRadiusPercentage,
        );
    }

    public function makeLocationAddress(
        string $countryCode,
        ?string $state,
        ?string $city,
        ?string $street,
    ): LocationAddressInterface {
        return new LocationAddress(
            countryCode: $countryCode,
            state: $state,
            city: $city,
            street: $street,
        );
    }

    public function makeStoryAreaTypeLocation(
        string $type,
        float $latitude,
        float $longitude,
        ?LocationAddressInterface $address,
    ): StoryAreaTypeLocationInterface {
        return new StoryAreaTypeLocation(
            type: $type,
            latitude: $latitude,
            longitude: $longitude,
            address: $address,
        );
    }

    public function makeStoryAreaTypeSuggestedReaction(
        string $type,
        Types\Interfaces\ReactionTypeInterface $reactionType,
        ?bool $isDark,
        ?bool $isFlipped,
    ): StoryAreaTypeSuggestedReactionInterface {
        return new StoryAreaTypeSuggestedReaction(
            type: $type,
            reactionType: $reactionType,
            isDark: $isDark,
            isFlipped: $isFlipped,
        );
    }

    public function makeStoryAreaTypeLink(string $type, string $url): StoryAreaTypeLinkInterface
    {
        return new StoryAreaTypeLink(
            type: $type,
            url: $url,
        );
    }

    public function makeStoryAreaTypeWeather(
        string $type,
        float $temperature,
        string $emoji,
        int $backgroundColor,
    ): StoryAreaTypeWeatherInterface {
        return new StoryAreaTypeWeather(
            type: $type,
            temperature: $temperature,
            emoji: $emoji,
            backgroundColor: $backgroundColor,
        );
    }

    public function makeStoryAreaTypeUniqueGift(string $type, string $name): StoryAreaTypeUniqueGiftInterface
    {
        return new StoryAreaTypeUniqueGift(
            type: $type,
            name: $name,
        );
    }

    public function makeStoryArea(
        StoryAreaPositionInterface $position,
        Types\Interfaces\StoryAreaTypeInterface $type,
    ): StoryAreaInterface {
        return new StoryArea(
            position: $position,
            type: $type,
        );
    }

    public function makeChatLocation(LocationInterface $location, string $address): ChatLocationInterface
    {
        return new ChatLocation(
            location: $location,
            address: $address,
        );
    }

    public function makeReactionTypeEmoji(string $type, string $emoji): ReactionTypeEmojiInterface
    {
        return new ReactionTypeEmoji(
            type: $type,
            emoji: $emoji,
        );
    }

    public function makeReactionTypeCustomEmoji(string $type, string $customEmojiId): ReactionTypeCustomEmojiInterface
    {
        return new ReactionTypeCustomEmoji(
            type: $type,
            customEmojiId: $customEmojiId,
        );
    }

    public function makeReactionTypePaid(string $type): ReactionTypePaidInterface
    {
        return new ReactionTypePaid(
            type: $type,
        );
    }

    public function makeReactionCount(
        Types\Interfaces\ReactionTypeInterface $type,
        int $totalCount,
    ): ReactionCountInterface {
        return new ReactionCount(
            type: $type,
            totalCount: $totalCount,
        );
    }

    public function makeMessageReactionUpdated(
        ChatInterface $chat,
        int $messageId,
        int $date,
        array $oldReaction,
        array $newReaction,
        ?UserInterface $user,
        ?ChatInterface $actorChat,
    ): MessageReactionUpdatedInterface {
        return new MessageReactionUpdated(
            chat: $chat,
            messageId: $messageId,
            date: $date,
            oldReaction: $oldReaction,
            newReaction: $newReaction,
            user: $user,
            actorChat: $actorChat,
        );
    }

    public function makeMessageReactionCountUpdated(
        ChatInterface $chat,
        int $messageId,
        int $date,
        array $reactions,
    ): MessageReactionCountUpdatedInterface {
        return new MessageReactionCountUpdated(
            chat: $chat,
            messageId: $messageId,
            date: $date,
            reactions: $reactions,
        );
    }

    public function makeForumTopic(
        int $messageThreadId,
        string $name,
        int $iconColor,
        ?string $iconCustomEmojiId,
        ?bool $isNameImplicit,
    ): ForumTopicInterface {
        return new ForumTopic(
            messageThreadId: $messageThreadId,
            name: $name,
            iconColor: $iconColor,
            iconCustomEmojiId: $iconCustomEmojiId,
            isNameImplicit: $isNameImplicit,
        );
    }

    public function makeGiftBackground(int $centerColor, int $edgeColor, int $textColor): GiftBackgroundInterface
    {
        return new GiftBackground(
            centerColor: $centerColor,
            edgeColor: $edgeColor,
            textColor: $textColor,
        );
    }

    public function makeGift(
        string $id,
        StickerInterface $sticker,
        int $starCount,
        ?int $upgradeStarCount,
        ?bool $isPremium,
        ?bool $hasColors,
        ?int $totalCount,
        ?int $remainingCount,
        ?int $personalTotalCount,
        ?int $personalRemainingCount,
        ?GiftBackgroundInterface $background,
        ?int $uniqueGiftVariantCount,
        ?ChatInterface $publisherChat,
    ): GiftInterface {
        return new Gift(
            id: $id,
            sticker: $sticker,
            starCount: $starCount,
            upgradeStarCount: $upgradeStarCount,
            isPremium: $isPremium,
            hasColors: $hasColors,
            totalCount: $totalCount,
            remainingCount: $remainingCount,
            personalTotalCount: $personalTotalCount,
            personalRemainingCount: $personalRemainingCount,
            background: $background,
            uniqueGiftVariantCount: $uniqueGiftVariantCount,
            publisherChat: $publisherChat,
        );
    }

    public function makeGifts(array $gifts): GiftsInterface
    {
        return new Gifts(
            gifts: $gifts,
        );
    }

    public function makeUniqueGiftModel(
        string $name,
        StickerInterface $sticker,
        int $rarityPerMille,
    ): UniqueGiftModelInterface {
        return new UniqueGiftModel(
            name: $name,
            sticker: $sticker,
            rarityPerMille: $rarityPerMille,
        );
    }

    public function makeUniqueGiftSymbol(
        string $name,
        StickerInterface $sticker,
        int $rarityPerMille,
    ): UniqueGiftSymbolInterface {
        return new UniqueGiftSymbol(
            name: $name,
            sticker: $sticker,
            rarityPerMille: $rarityPerMille,
        );
    }

    public function makeUniqueGiftBackdropColors(
        int $centerColor,
        int $edgeColor,
        int $symbolColor,
        int $textColor,
    ): UniqueGiftBackdropColorsInterface {
        return new UniqueGiftBackdropColors(
            centerColor: $centerColor,
            edgeColor: $edgeColor,
            symbolColor: $symbolColor,
            textColor: $textColor,
        );
    }

    public function makeUniqueGiftBackdrop(
        string $name,
        UniqueGiftBackdropColorsInterface $colors,
        int $rarityPerMille,
    ): UniqueGiftBackdropInterface {
        return new UniqueGiftBackdrop(
            name: $name,
            colors: $colors,
            rarityPerMille: $rarityPerMille,
        );
    }

    public function makeUniqueGiftColors(
        string $modelCustomEmojiId,
        string $symbolCustomEmojiId,
        int $lightThemeMainColor,
        array $lightThemeOtherColors,
        int $darkThemeMainColor,
        array $darkThemeOtherColors,
    ): UniqueGiftColorsInterface {
        return new UniqueGiftColors(
            modelCustomEmojiId: $modelCustomEmojiId,
            symbolCustomEmojiId: $symbolCustomEmojiId,
            lightThemeMainColor: $lightThemeMainColor,
            lightThemeOtherColors: $lightThemeOtherColors,
            darkThemeMainColor: $darkThemeMainColor,
            darkThemeOtherColors: $darkThemeOtherColors,
        );
    }

    public function makeUniqueGift(
        string $giftId,
        string $baseName,
        string $name,
        int $number,
        UniqueGiftModelInterface $model,
        UniqueGiftSymbolInterface $symbol,
        UniqueGiftBackdropInterface $backdrop,
        ?bool $isPremium,
        ?bool $isFromBlockchain,
        ?UniqueGiftColorsInterface $colors,
        ?ChatInterface $publisherChat,
    ): UniqueGiftInterface {
        return new UniqueGift(
            giftId: $giftId,
            baseName: $baseName,
            name: $name,
            number: $number,
            model: $model,
            symbol: $symbol,
            backdrop: $backdrop,
            isPremium: $isPremium,
            isFromBlockchain: $isFromBlockchain,
            colors: $colors,
            publisherChat: $publisherChat,
        );
    }

    public function makeGiftInfo(
        GiftInterface $gift,
        ?string $ownedGiftId,
        ?int $convertStarCount,
        ?int $prepaidUpgradeStarCount,
        ?bool $isUpgradeSeparate,
        ?bool $canBeUpgraded,
        ?string $text,
        ?array $entities,
        ?bool $isPrivate,
        ?int $uniqueGiftNumber,
    ): GiftInfoInterface {
        return new GiftInfo(
            gift: $gift,
            ownedGiftId: $ownedGiftId,
            convertStarCount: $convertStarCount,
            prepaidUpgradeStarCount: $prepaidUpgradeStarCount,
            isUpgradeSeparate: $isUpgradeSeparate,
            canBeUpgraded: $canBeUpgraded,
            text: $text,
            entities: $entities,
            isPrivate: $isPrivate,
            uniqueGiftNumber: $uniqueGiftNumber,
        );
    }

    public function makeUniqueGiftInfo(
        UniqueGiftInterface $gift,
        string $origin,
        ?string $lastResaleCurrency,
        ?int $lastResaleAmount,
        ?string $ownedGiftId,
        ?int $transferStarCount,
        ?int $nextTransferDate,
    ): UniqueGiftInfoInterface {
        return new UniqueGiftInfo(
            gift: $gift,
            origin: $origin,
            lastResaleCurrency: $lastResaleCurrency,
            lastResaleAmount: $lastResaleAmount,
            ownedGiftId: $ownedGiftId,
            transferStarCount: $transferStarCount,
            nextTransferDate: $nextTransferDate,
        );
    }

    public function makeOwnedGiftRegular(
        string $type,
        GiftInterface $gift,
        int $sendDate,
        ?string $ownedGiftId,
        ?UserInterface $senderUser,
        ?string $text,
        ?array $entities,
        ?bool $isPrivate,
        ?bool $isSaved,
        ?bool $canBeUpgraded,
        ?bool $wasRefunded,
        ?int $convertStarCount,
        ?int $prepaidUpgradeStarCount,
        ?bool $isUpgradeSeparate,
        ?int $uniqueGiftNumber,
    ): OwnedGiftRegularInterface {
        return new OwnedGiftRegular(
            type: $type,
            gift: $gift,
            sendDate: $sendDate,
            ownedGiftId: $ownedGiftId,
            senderUser: $senderUser,
            text: $text,
            entities: $entities,
            isPrivate: $isPrivate,
            isSaved: $isSaved,
            canBeUpgraded: $canBeUpgraded,
            wasRefunded: $wasRefunded,
            convertStarCount: $convertStarCount,
            prepaidUpgradeStarCount: $prepaidUpgradeStarCount,
            isUpgradeSeparate: $isUpgradeSeparate,
            uniqueGiftNumber: $uniqueGiftNumber,
        );
    }

    public function makeOwnedGiftUnique(
        string $type,
        UniqueGiftInterface $gift,
        int $sendDate,
        ?string $ownedGiftId,
        ?UserInterface $senderUser,
        ?bool $isSaved,
        ?bool $canBeTransferred,
        ?int $transferStarCount,
        ?int $nextTransferDate,
    ): OwnedGiftUniqueInterface {
        return new OwnedGiftUnique(
            type: $type,
            gift: $gift,
            sendDate: $sendDate,
            ownedGiftId: $ownedGiftId,
            senderUser: $senderUser,
            isSaved: $isSaved,
            canBeTransferred: $canBeTransferred,
            transferStarCount: $transferStarCount,
            nextTransferDate: $nextTransferDate,
        );
    }

    public function makeOwnedGifts(int $totalCount, array $gifts, ?string $nextOffset): OwnedGiftsInterface
    {
        return new OwnedGifts(
            totalCount: $totalCount,
            gifts: $gifts,
            nextOffset: $nextOffset,
        );
    }

    public function makeAcceptedGiftTypes(
        bool $unlimitedGifts,
        bool $limitedGifts,
        bool $uniqueGifts,
        bool $premiumSubscription,
        bool $giftsFromChannels,
    ): AcceptedGiftTypesInterface {
        return new AcceptedGiftTypes(
            unlimitedGifts: $unlimitedGifts,
            limitedGifts: $limitedGifts,
            uniqueGifts: $uniqueGifts,
            premiumSubscription: $premiumSubscription,
            giftsFromChannels: $giftsFromChannels,
        );
    }

    public function makeStarAmount(int $amount, ?int $nanostarAmount): StarAmountInterface
    {
        return new StarAmount(
            amount: $amount,
            nanostarAmount: $nanostarAmount,
        );
    }

    public function makeBotCommand(string $command, string $description): BotCommandInterface
    {
        return new BotCommand(
            command: $command,
            description: $description,
        );
    }

    public function makeBotCommandScopeDefault(string $type): BotCommandScopeDefaultInterface
    {
        return new BotCommandScopeDefault(
            type: $type,
        );
    }

    public function makeBotCommandScopeAllPrivateChats(string $type): BotCommandScopeAllPrivateChatsInterface
    {
        return new BotCommandScopeAllPrivateChats(
            type: $type,
        );
    }

    public function makeBotCommandScopeAllGroupChats(string $type): BotCommandScopeAllGroupChatsInterface
    {
        return new BotCommandScopeAllGroupChats(
            type: $type,
        );
    }

    public function makeBotCommandScopeAllChatAdministrators(string $type): BotCommandScopeAllChatAdministratorsInterface
    {
        return new BotCommandScopeAllChatAdministrators(
            type: $type,
        );
    }

    public function makeBotCommandScopeChat(int|string $chatId, string $type): BotCommandScopeChatInterface
    {
        return new BotCommandScopeChat(
            chatId: $chatId,
            type: $type,
        );
    }

    public function makeBotCommandScopeChatAdministrators(
        int|string $chatId,
        string $type,
    ): BotCommandScopeChatAdministratorsInterface {
        return new BotCommandScopeChatAdministrators(
            chatId: $chatId,
            type: $type,
        );
    }

    public function makeBotCommandScopeChatMember(
        int|string $chatId,
        int $userId,
        string $type,
    ): BotCommandScopeChatMemberInterface {
        return new BotCommandScopeChatMember(
            chatId: $chatId,
            userId: $userId,
            type: $type,
        );
    }

    public function makeBotName(string $name): BotNameInterface
    {
        return new BotName(
            name: $name,
        );
    }

    public function makeBotDescription(string $description): BotDescriptionInterface
    {
        return new BotDescription(
            description: $description,
        );
    }

    public function makeBotShortDescription(string $shortDescription): BotShortDescriptionInterface
    {
        return new BotShortDescription(
            shortDescription: $shortDescription,
        );
    }

    public function makeMenuButtonCommands(string $type): MenuButtonCommandsInterface
    {
        return new MenuButtonCommands(
            type: $type,
        );
    }

    public function makeMenuButtonWebApp(
        string $text,
        WebAppInfoInterface $webApp,
        string $type,
    ): MenuButtonWebAppInterface {
        return new MenuButtonWebApp(
            text: $text,
            webApp: $webApp,
            type: $type,
        );
    }

    public function makeMenuButtonDefault(string $type): MenuButtonDefaultInterface
    {
        return new MenuButtonDefault(
            type: $type,
        );
    }

    public function makeChatBoostSourcePremium(string $source, UserInterface $user): ChatBoostSourcePremiumInterface
    {
        return new ChatBoostSourcePremium(
            source: $source,
            user: $user,
        );
    }

    public function makeChatBoostSourceGiftCode(string $source, UserInterface $user): ChatBoostSourceGiftCodeInterface
    {
        return new ChatBoostSourceGiftCode(
            source: $source,
            user: $user,
        );
    }

    public function makeChatBoostSourceGiveaway(
        string $source,
        int $giveawayMessageId,
        ?UserInterface $user,
        ?int $prizeStarCount,
        ?bool $isUnclaimed,
    ): ChatBoostSourceGiveawayInterface {
        return new ChatBoostSourceGiveaway(
            source: $source,
            giveawayMessageId: $giveawayMessageId,
            user: $user,
            prizeStarCount: $prizeStarCount,
            isUnclaimed: $isUnclaimed,
        );
    }

    public function makeChatBoost(
        string $boostId,
        int $addDate,
        int $expirationDate,
        Types\Interfaces\ChatBoostSourceInterface $source,
    ): ChatBoostInterface {
        return new ChatBoost(
            boostId: $boostId,
            addDate: $addDate,
            expirationDate: $expirationDate,
            source: $source,
        );
    }

    public function makeChatBoostUpdated(ChatInterface $chat, ChatBoostInterface $boost): ChatBoostUpdatedInterface
    {
        return new ChatBoostUpdated(
            chat: $chat,
            boost: $boost,
        );
    }

    public function makeChatBoostRemoved(
        ChatInterface $chat,
        string $boostId,
        int $removeDate,
        Types\Interfaces\ChatBoostSourceInterface $source,
    ): ChatBoostRemovedInterface {
        return new ChatBoostRemoved(
            chat: $chat,
            boostId: $boostId,
            removeDate: $removeDate,
            source: $source,
        );
    }

    public function makeUserChatBoosts(array $boosts): UserChatBoostsInterface
    {
        return new UserChatBoosts(
            boosts: $boosts,
        );
    }

    public function makeBusinessBotRights(
        ?bool $canReply,
        ?bool $canReadMessages,
        ?bool $canDeleteSentMessages,
        ?bool $canDeleteAllMessages,
        ?bool $canEditName,
        ?bool $canEditBio,
        ?bool $canEditProfilePhoto,
        ?bool $canEditUsername,
        ?bool $canChangeGiftSettings,
        ?bool $canViewGiftsAndStars,
        ?bool $canConvertGiftsToStars,
        ?bool $canTransferAndUpgradeGifts,
        ?bool $canTransferStars,
        ?bool $canManageStories,
    ): BusinessBotRightsInterface {
        return new BusinessBotRights(
            canReply: $canReply,
            canReadMessages: $canReadMessages,
            canDeleteSentMessages: $canDeleteSentMessages,
            canDeleteAllMessages: $canDeleteAllMessages,
            canEditName: $canEditName,
            canEditBio: $canEditBio,
            canEditProfilePhoto: $canEditProfilePhoto,
            canEditUsername: $canEditUsername,
            canChangeGiftSettings: $canChangeGiftSettings,
            canViewGiftsAndStars: $canViewGiftsAndStars,
            canConvertGiftsToStars: $canConvertGiftsToStars,
            canTransferAndUpgradeGifts: $canTransferAndUpgradeGifts,
            canTransferStars: $canTransferStars,
            canManageStories: $canManageStories,
        );
    }

    public function makeBusinessConnection(
        string $id,
        UserInterface $user,
        int $userChatId,
        int $date,
        bool $isEnabled,
        ?BusinessBotRightsInterface $rights,
    ): BusinessConnectionInterface {
        return new BusinessConnection(
            id: $id,
            user: $user,
            userChatId: $userChatId,
            date: $date,
            isEnabled: $isEnabled,
            rights: $rights,
        );
    }

    public function makeBusinessMessagesDeleted(
        string $businessConnectionId,
        ChatInterface $chat,
        array $messageIds,
    ): BusinessMessagesDeletedInterface {
        return new BusinessMessagesDeleted(
            businessConnectionId: $businessConnectionId,
            chat: $chat,
            messageIds: $messageIds,
        );
    }

    public function makeResponseParameters(?int $migrateToChatId, ?int $retryAfter): ResponseParametersInterface
    {
        return new ResponseParameters(
            migrateToChatId: $migrateToChatId,
            retryAfter: $retryAfter,
        );
    }

    public function makeInputMediaPhoto(
        string $media,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?bool $hasSpoiler,
    ): InputMediaPhotoInterface {
        return new InputMediaPhoto(
            media: $media,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            hasSpoiler: $hasSpoiler,
        );
    }

    public function makeInputMediaVideo(
        string $media,
        string $type,
        ?string $thumbnail,
        ?string $cover,
        ?int $startTimestamp,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supportsStreaming,
        ?bool $hasSpoiler,
    ): InputMediaVideoInterface {
        return new InputMediaVideo(
            media: $media,
            type: $type,
            thumbnail: $thumbnail,
            cover: $cover,
            startTimestamp: $startTimestamp,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            width: $width,
            height: $height,
            duration: $duration,
            supportsStreaming: $supportsStreaming,
            hasSpoiler: $hasSpoiler,
        );
    }

    public function makeInputMediaAnimation(
        string $media,
        string $type,
        ?string $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $showCaptionAboveMedia,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $hasSpoiler,
    ): InputMediaAnimationInterface {
        return new InputMediaAnimation(
            media: $media,
            type: $type,
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            width: $width,
            height: $height,
            duration: $duration,
            hasSpoiler: $hasSpoiler,
        );
    }

    public function makeInputMediaAudio(
        string $media,
        string $type,
        ?string $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?int $duration,
        ?string $performer,
        ?string $title,
    ): InputMediaAudioInterface {
        return new InputMediaAudio(
            media: $media,
            type: $type,
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            duration: $duration,
            performer: $performer,
            title: $title,
        );
    }

    public function makeInputMediaDocument(
        string $media,
        string $type,
        ?string $thumbnail,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?bool $disableContentTypeDetection,
    ): InputMediaDocumentInterface {
        return new InputMediaDocument(
            media: $media,
            type: $type,
            thumbnail: $thumbnail,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            disableContentTypeDetection: $disableContentTypeDetection,
        );
    }

    public function makeInputPaidMediaPhoto(string $media, string $type): InputPaidMediaPhotoInterface
    {
        return new InputPaidMediaPhoto(
            media: $media,
            type: $type,
        );
    }

    public function makeInputPaidMediaVideo(
        string $media,
        string $type,
        ?string $thumbnail,
        ?string $cover,
        ?int $startTimestamp,
        ?int $width,
        ?int $height,
        ?int $duration,
        ?bool $supportsStreaming,
    ): InputPaidMediaVideoInterface {
        return new InputPaidMediaVideo(
            media: $media,
            type: $type,
            thumbnail: $thumbnail,
            cover: $cover,
            startTimestamp: $startTimestamp,
            width: $width,
            height: $height,
            duration: $duration,
            supportsStreaming: $supportsStreaming,
        );
    }

    public function makeInputProfilePhotoStatic(string $photo, string $type): InputProfilePhotoStaticInterface
    {
        return new InputProfilePhotoStatic(
            photo: $photo,
            type: $type,
        );
    }

    public function makeInputProfilePhotoAnimated(
        string $animation,
        string $type,
        ?float $mainFrameTimestamp,
    ): InputProfilePhotoAnimatedInterface {
        return new InputProfilePhotoAnimated(
            animation: $animation,
            type: $type,
            mainFrameTimestamp: $mainFrameTimestamp,
        );
    }

    public function makeInputStoryContentPhoto(string $photo, string $type): InputStoryContentPhotoInterface
    {
        return new InputStoryContentPhoto(
            photo: $photo,
            type: $type,
        );
    }

    public function makeInputStoryContentVideo(
        string $video,
        string $type,
        ?float $duration,
        ?float $coverFrameTimestamp,
        ?bool $isAnimation,
    ): InputStoryContentVideoInterface {
        return new InputStoryContentVideo(
            video: $video,
            type: $type,
            duration: $duration,
            coverFrameTimestamp: $coverFrameTimestamp,
            isAnimation: $isAnimation,
        );
    }

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
    ): StickerInterface {
        return new Sticker(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            type: $type,
            width: $width,
            height: $height,
            isAnimated: $isAnimated,
            isVideo: $isVideo,
            thumbnail: $thumbnail,
            emoji: $emoji,
            setName: $setName,
            premiumAnimation: $premiumAnimation,
            maskPosition: $maskPosition,
            customEmojiId: $customEmojiId,
            needsRepainting: $needsRepainting,
            fileSize: $fileSize,
        );
    }

    public function makeStickerSet(
        string $name,
        string $title,
        string $stickerType,
        array $stickers,
        ?PhotoSizeInterface $thumbnail,
    ): StickerSetInterface {
        return new StickerSet(
            name: $name,
            title: $title,
            stickerType: $stickerType,
            stickers: $stickers,
            thumbnail: $thumbnail,
        );
    }

    public function makeMaskPosition(string $point, float $xShift, float $yShift, float $scale): MaskPositionInterface
    {
        return new MaskPosition(
            point: $point,
            xShift: $xShift,
            yShift: $yShift,
            scale: $scale,
        );
    }

    public function makeInputSticker(
        string $sticker,
        string $format,
        array $emojiList,
        ?MaskPositionInterface $maskPosition,
        ?array $keywords,
    ): InputStickerInterface {
        return new InputSticker(
            sticker: $sticker,
            format: $format,
            emojiList: $emojiList,
            maskPosition: $maskPosition,
            keywords: $keywords,
        );
    }

    public function makeInlineQuery(
        string $id,
        UserInterface $from,
        string $query,
        string $offset,
        ?string $chatType,
        ?LocationInterface $location,
    ): InlineQueryInterface {
        return new InlineQuery(
            id: $id,
            from: $from,
            query: $query,
            offset: $offset,
            chatType: $chatType,
            location: $location,
        );
    }

    public function makeInlineQueryResultsButton(
        string $text,
        ?WebAppInfoInterface $webApp,
        ?string $startParameter,
    ): InlineQueryResultsButtonInterface {
        return new InlineQueryResultsButton(
            text: $text,
            webApp: $webApp,
            startParameter: $startParameter,
        );
    }

    public function makeInlineQueryResultArticle(
        string $id,
        string $title,
        Types\Interfaces\InputMessageContentInterface $inputMessageContent,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?string $url,
        ?string $description,
        ?string $thumbnailUrl,
        ?int $thumbnailWidth,
        ?int $thumbnailHeight,
    ): InlineQueryResultArticleInterface {
        return new InlineQueryResultArticle(
            id: $id,
            title: $title,
            inputMessageContent: $inputMessageContent,
            type: $type,
            replyMarkup: $replyMarkup,
            url: $url,
            description: $description,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }

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
    ): InlineQueryResultPhotoInterface {
        return new InlineQueryResultPhoto(
            id: $id,
            photoUrl: $photoUrl,
            thumbnailUrl: $thumbnailUrl,
            type: $type,
            photoWidth: $photoWidth,
            photoHeight: $photoHeight,
            title: $title,
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultGifInterface {
        return new InlineQueryResultGif(
            id: $id,
            gifUrl: $gifUrl,
            thumbnailUrl: $thumbnailUrl,
            type: $type,
            gifWidth: $gifWidth,
            gifHeight: $gifHeight,
            gifDuration: $gifDuration,
            thumbnailMimeType: $thumbnailMimeType,
            title: $title,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultMpeg4GifInterface {
        return new InlineQueryResultMpeg4Gif(
            id: $id,
            mpeg4Url: $mpeg4Url,
            thumbnailUrl: $thumbnailUrl,
            type: $type,
            mpeg4Width: $mpeg4Width,
            mpeg4Height: $mpeg4Height,
            mpeg4Duration: $mpeg4Duration,
            thumbnailMimeType: $thumbnailMimeType,
            title: $title,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultVideoInterface {
        return new InlineQueryResultVideo(
            id: $id,
            videoUrl: $videoUrl,
            mimeType: $mimeType,
            thumbnailUrl: $thumbnailUrl,
            title: $title,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            videoWidth: $videoWidth,
            videoHeight: $videoHeight,
            videoDuration: $videoDuration,
            description: $description,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultAudioInterface {
        return new InlineQueryResultAudio(
            id: $id,
            audioUrl: $audioUrl,
            title: $title,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            performer: $performer,
            audioDuration: $audioDuration,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultVoiceInterface {
        return new InlineQueryResultVoice(
            id: $id,
            voiceUrl: $voiceUrl,
            title: $title,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            voiceDuration: $voiceDuration,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultDocumentInterface {
        return new InlineQueryResultDocument(
            id: $id,
            title: $title,
            documentUrl: $documentUrl,
            mimeType: $mimeType,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            description: $description,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }

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
    ): InlineQueryResultLocationInterface {
        return new InlineQueryResultLocation(
            id: $id,
            latitude: $latitude,
            longitude: $longitude,
            title: $title,
            type: $type,
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }

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
    ): InlineQueryResultVenueInterface {
        return new InlineQueryResultVenue(
            id: $id,
            latitude: $latitude,
            longitude: $longitude,
            title: $title,
            address: $address,
            type: $type,
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }

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
    ): InlineQueryResultContactInterface {
        return new InlineQueryResultContact(
            id: $id,
            phoneNumber: $phoneNumber,
            firstName: $firstName,
            type: $type,
            lastName: $lastName,
            vcard: $vcard,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
            thumbnailUrl: $thumbnailUrl,
            thumbnailWidth: $thumbnailWidth,
            thumbnailHeight: $thumbnailHeight,
        );
    }

    public function makeInlineQueryResultGame(
        string $id,
        string $gameShortName,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
    ): InlineQueryResultGameInterface {
        return new InlineQueryResultGame(
            id: $id,
            gameShortName: $gameShortName,
            type: $type,
            replyMarkup: $replyMarkup,
        );
    }

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
    ): InlineQueryResultCachedPhotoInterface {
        return new InlineQueryResultCachedPhoto(
            id: $id,
            photoFileId: $photoFileId,
            type: $type,
            title: $title,
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultCachedGifInterface {
        return new InlineQueryResultCachedGif(
            id: $id,
            gifFileId: $gifFileId,
            type: $type,
            title: $title,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultCachedMpeg4GifInterface {
        return new InlineQueryResultCachedMpeg4Gif(
            id: $id,
            mpeg4FileId: $mpeg4FileId,
            type: $type,
            title: $title,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

    public function makeInlineQueryResultCachedSticker(
        string $id,
        string $stickerFileId,
        string $type,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedStickerInterface {
        return new InlineQueryResultCachedSticker(
            id: $id,
            stickerFileId: $stickerFileId,
            type: $type,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultCachedDocumentInterface {
        return new InlineQueryResultCachedDocument(
            id: $id,
            title: $title,
            documentFileId: $documentFileId,
            type: $type,
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultCachedVideoInterface {
        return new InlineQueryResultCachedVideo(
            id: $id,
            videoFileId: $videoFileId,
            title: $title,
            type: $type,
            description: $description,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            showCaptionAboveMedia: $showCaptionAboveMedia,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

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
    ): InlineQueryResultCachedVoiceInterface {
        return new InlineQueryResultCachedVoice(
            id: $id,
            voiceFileId: $voiceFileId,
            title: $title,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

    public function makeInlineQueryResultCachedAudio(
        string $id,
        string $audioFileId,
        string $type,
        ?string $caption,
        ?string $parseMode,
        ?array $captionEntities,
        ?InlineKeyboardMarkupInterface $replyMarkup,
        ?Types\Interfaces\InputMessageContentInterface $inputMessageContent,
    ): InlineQueryResultCachedAudioInterface {
        return new InlineQueryResultCachedAudio(
            id: $id,
            audioFileId: $audioFileId,
            type: $type,
            caption: $caption,
            parseMode: $parseMode,
            captionEntities: $captionEntities,
            replyMarkup: $replyMarkup,
            inputMessageContent: $inputMessageContent,
        );
    }

    public function makeInputTextMessageContent(
        string $messageText,
        ?string $parseMode,
        ?array $entities,
        ?LinkPreviewOptionsInterface $linkPreviewOptions,
    ): InputTextMessageContentInterface {
        return new InputTextMessageContent(
            messageText: $messageText,
            parseMode: $parseMode,
            entities: $entities,
            linkPreviewOptions: $linkPreviewOptions,
        );
    }

    public function makeInputLocationMessageContent(
        float $latitude,
        float $longitude,
        ?float $horizontalAccuracy,
        ?int $livePeriod,
        ?int $heading,
        ?int $proximityAlertRadius,
    ): InputLocationMessageContentInterface {
        return new InputLocationMessageContent(
            latitude: $latitude,
            longitude: $longitude,
            horizontalAccuracy: $horizontalAccuracy,
            livePeriod: $livePeriod,
            heading: $heading,
            proximityAlertRadius: $proximityAlertRadius,
        );
    }

    public function makeInputVenueMessageContent(
        float $latitude,
        float $longitude,
        string $title,
        string $address,
        ?string $foursquareId,
        ?string $foursquareType,
        ?string $googlePlaceId,
        ?string $googlePlaceType,
    ): InputVenueMessageContentInterface {
        return new InputVenueMessageContent(
            latitude: $latitude,
            longitude: $longitude,
            title: $title,
            address: $address,
            foursquareId: $foursquareId,
            foursquareType: $foursquareType,
            googlePlaceId: $googlePlaceId,
            googlePlaceType: $googlePlaceType,
        );
    }

    public function makeInputContactMessageContent(
        string $phoneNumber,
        string $firstName,
        ?string $lastName,
        ?string $vcard,
    ): InputContactMessageContentInterface {
        return new InputContactMessageContent(
            phoneNumber: $phoneNumber,
            firstName: $firstName,
            lastName: $lastName,
            vcard: $vcard,
        );
    }

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
    ): InputInvoiceMessageContentInterface {
        return new InputInvoiceMessageContent(
            title: $title,
            description: $description,
            payload: $payload,
            currency: $currency,
            prices: $prices,
            providerToken: $providerToken,
            maxTipAmount: $maxTipAmount,
            suggestedTipAmounts: $suggestedTipAmounts,
            providerData: $providerData,
            photoUrl: $photoUrl,
            photoSize: $photoSize,
            photoWidth: $photoWidth,
            photoHeight: $photoHeight,
            needName: $needName,
            needPhoneNumber: $needPhoneNumber,
            needEmail: $needEmail,
            needShippingAddress: $needShippingAddress,
            sendPhoneNumberToProvider: $sendPhoneNumberToProvider,
            sendEmailToProvider: $sendEmailToProvider,
            isFlexible: $isFlexible,
        );
    }

    public function makeChosenInlineResult(
        string $resultId,
        UserInterface $from,
        string $query,
        ?LocationInterface $location,
        ?string $inlineMessageId,
    ): ChosenInlineResultInterface {
        return new ChosenInlineResult(
            resultId: $resultId,
            from: $from,
            query: $query,
            location: $location,
            inlineMessageId: $inlineMessageId,
        );
    }

    public function makeSentWebAppMessage(?string $inlineMessageId): SentWebAppMessageInterface
    {
        return new SentWebAppMessage(
            inlineMessageId: $inlineMessageId,
        );
    }

    public function makePreparedInlineMessage(string $id, int $expirationDate): PreparedInlineMessageInterface
    {
        return new PreparedInlineMessage(
            id: $id,
            expirationDate: $expirationDate,
        );
    }

    public function makeLabeledPrice(string $label, int $amount): LabeledPriceInterface
    {
        return new LabeledPrice(
            label: $label,
            amount: $amount,
        );
    }

    public function makeInvoice(
        string $title,
        string $description,
        string $startParameter,
        string $currency,
        int $totalAmount,
    ): InvoiceInterface {
        return new Invoice(
            title: $title,
            description: $description,
            startParameter: $startParameter,
            currency: $currency,
            totalAmount: $totalAmount,
        );
    }

    public function makeShippingAddress(
        string $countryCode,
        string $state,
        string $city,
        string $streetLine1,
        string $streetLine2,
        string $postCode,
    ): ShippingAddressInterface {
        return new ShippingAddress(
            countryCode: $countryCode,
            state: $state,
            city: $city,
            streetLine1: $streetLine1,
            streetLine2: $streetLine2,
            postCode: $postCode,
        );
    }

    public function makeOrderInfo(
        ?string $name,
        ?string $phoneNumber,
        ?string $email,
        ?ShippingAddressInterface $shippingAddress,
    ): OrderInfoInterface {
        return new OrderInfo(
            name: $name,
            phoneNumber: $phoneNumber,
            email: $email,
            shippingAddress: $shippingAddress,
        );
    }

    public function makeShippingOption(string $id, string $title, array $prices): ShippingOptionInterface
    {
        return new ShippingOption(
            id: $id,
            title: $title,
            prices: $prices,
        );
    }

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
    ): SuccessfulPaymentInterface {
        return new SuccessfulPayment(
            currency: $currency,
            totalAmount: $totalAmount,
            invoicePayload: $invoicePayload,
            telegramPaymentChargeId: $telegramPaymentChargeId,
            providerPaymentChargeId: $providerPaymentChargeId,
            subscriptionExpirationDate: $subscriptionExpirationDate,
            isRecurring: $isRecurring,
            isFirstRecurring: $isFirstRecurring,
            shippingOptionId: $shippingOptionId,
            orderInfo: $orderInfo,
        );
    }

    public function makeRefundedPayment(
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        string $telegramPaymentChargeId,
        ?string $providerPaymentChargeId,
    ): RefundedPaymentInterface {
        return new RefundedPayment(
            currency: $currency,
            totalAmount: $totalAmount,
            invoicePayload: $invoicePayload,
            telegramPaymentChargeId: $telegramPaymentChargeId,
            providerPaymentChargeId: $providerPaymentChargeId,
        );
    }

    public function makeShippingQuery(
        string $id,
        UserInterface $from,
        string $invoicePayload,
        ShippingAddressInterface $shippingAddress,
    ): ShippingQueryInterface {
        return new ShippingQuery(
            id: $id,
            from: $from,
            invoicePayload: $invoicePayload,
            shippingAddress: $shippingAddress,
        );
    }

    public function makePreCheckoutQuery(
        string $id,
        UserInterface $from,
        string $currency,
        int $totalAmount,
        string $invoicePayload,
        ?string $shippingOptionId,
        ?OrderInfoInterface $orderInfo,
    ): PreCheckoutQueryInterface {
        return new PreCheckoutQuery(
            id: $id,
            from: $from,
            currency: $currency,
            totalAmount: $totalAmount,
            invoicePayload: $invoicePayload,
            shippingOptionId: $shippingOptionId,
            orderInfo: $orderInfo,
        );
    }

    public function makePaidMediaPurchased(UserInterface $from, string $paidMediaPayload): PaidMediaPurchasedInterface
    {
        return new PaidMediaPurchased(
            from: $from,
            paidMediaPayload: $paidMediaPayload,
        );
    }

    public function makeRevenueWithdrawalStatePending(string $type): RevenueWithdrawalStatePendingInterface
    {
        return new RevenueWithdrawalStatePending(
            type: $type,
        );
    }

    public function makeRevenueWithdrawalStateSucceeded(
        string $type,
        int $date,
        string $url,
    ): RevenueWithdrawalStateSucceededInterface {
        return new RevenueWithdrawalStateSucceeded(
            type: $type,
            date: $date,
            url: $url,
        );
    }

    public function makeRevenueWithdrawalStateFailed(string $type): RevenueWithdrawalStateFailedInterface
    {
        return new RevenueWithdrawalStateFailed(
            type: $type,
        );
    }

    public function makeAffiliateInfo(
        int $commissionPerMille,
        int $amount,
        ?UserInterface $affiliateUser,
        ?ChatInterface $affiliateChat,
        ?int $nanostarAmount,
    ): AffiliateInfoInterface {
        return new AffiliateInfo(
            commissionPerMille: $commissionPerMille,
            amount: $amount,
            affiliateUser: $affiliateUser,
            affiliateChat: $affiliateChat,
            nanostarAmount: $nanostarAmount,
        );
    }

    public function makeTransactionPartnerUser(
        string $type,
        string $transactionType,
        UserInterface $user,
        ?AffiliateInfoInterface $affiliate,
        ?string $invoicePayload,
        ?int $subscriptionPeriod,
        ?array $paidMedia,
        ?string $paidMediaPayload,
        ?GiftInterface $gift,
        ?int $premiumSubscriptionDuration,
    ): TransactionPartnerUserInterface {
        return new TransactionPartnerUser(
            type: $type,
            transactionType: $transactionType,
            user: $user,
            affiliate: $affiliate,
            invoicePayload: $invoicePayload,
            subscriptionPeriod: $subscriptionPeriod,
            paidMedia: $paidMedia,
            paidMediaPayload: $paidMediaPayload,
            gift: $gift,
            premiumSubscriptionDuration: $premiumSubscriptionDuration,
        );
    }

    public function makeTransactionPartnerChat(
        string $type,
        ChatInterface $chat,
        ?GiftInterface $gift,
    ): TransactionPartnerChatInterface {
        return new TransactionPartnerChat(
            type: $type,
            chat: $chat,
            gift: $gift,
        );
    }

    public function makeTransactionPartnerAffiliateProgram(
        string $type,
        int $commissionPerMille,
        ?UserInterface $sponsorUser,
    ): TransactionPartnerAffiliateProgramInterface {
        return new TransactionPartnerAffiliateProgram(
            type: $type,
            commissionPerMille: $commissionPerMille,
            sponsorUser: $sponsorUser,
        );
    }

    public function makeTransactionPartnerFragment(
        string $type,
        ?Types\Interfaces\RevenueWithdrawalStateInterface $withdrawalState,
    ): TransactionPartnerFragmentInterface {
        return new TransactionPartnerFragment(
            type: $type,
            withdrawalState: $withdrawalState,
        );
    }

    public function makeTransactionPartnerTelegramAds(string $type): TransactionPartnerTelegramAdsInterface
    {
        return new TransactionPartnerTelegramAds(
            type: $type,
        );
    }

    public function makeTransactionPartnerTelegramApi(
        string $type,
        int $requestCount,
    ): TransactionPartnerTelegramApiInterface {
        return new TransactionPartnerTelegramApi(
            type: $type,
            requestCount: $requestCount,
        );
    }

    public function makeTransactionPartnerOther(string $type): TransactionPartnerOtherInterface
    {
        return new TransactionPartnerOther(
            type: $type,
        );
    }

    public function makeStarTransaction(
        string $id,
        int $amount,
        int $date,
        ?int $nanostarAmount,
        ?Types\Interfaces\TransactionPartnerInterface $source,
        ?Types\Interfaces\TransactionPartnerInterface $receiver,
    ): StarTransactionInterface {
        return new StarTransaction(
            id: $id,
            amount: $amount,
            date: $date,
            nanostarAmount: $nanostarAmount,
            source: $source,
            receiver: $receiver,
        );
    }

    public function makeStarTransactions(array $transactions): StarTransactionsInterface
    {
        return new StarTransactions(
            transactions: $transactions,
        );
    }

    public function makePassportData(array $data, EncryptedCredentialsInterface $credentials): PassportDataInterface
    {
        return new PassportData(
            data: $data,
            credentials: $credentials,
        );
    }

    public function makePassportFile(
        string $fileId,
        string $fileUniqueId,
        int $fileSize,
        int $fileDate,
    ): PassportFileInterface {
        return new PassportFile(
            fileId: $fileId,
            fileUniqueId: $fileUniqueId,
            fileSize: $fileSize,
            fileDate: $fileDate,
        );
    }

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
    ): EncryptedPassportElementInterface {
        return new EncryptedPassportElement(
            type: $type,
            hash: $hash,
            data: $data,
            phoneNumber: $phoneNumber,
            email: $email,
            files: $files,
            frontSide: $frontSide,
            reverseSide: $reverseSide,
            selfie: $selfie,
            translation: $translation,
        );
    }

    public function makeEncryptedCredentials(string $data, string $hash, string $secret): EncryptedCredentialsInterface
    {
        return new EncryptedCredentials(
            data: $data,
            hash: $hash,
            secret: $secret,
        );
    }

    public function makePassportElementErrorDataField(
        string $type,
        string $fieldName,
        string $dataHash,
        string $message,
        string $source,
    ): PassportElementErrorDataFieldInterface {
        return new PassportElementErrorDataField(
            type: $type,
            fieldName: $fieldName,
            dataHash: $dataHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorFrontSide(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorFrontSideInterface {
        return new PassportElementErrorFrontSide(
            type: $type,
            fileHash: $fileHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorReverseSide(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorReverseSideInterface {
        return new PassportElementErrorReverseSide(
            type: $type,
            fileHash: $fileHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorSelfie(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorSelfieInterface {
        return new PassportElementErrorSelfie(
            type: $type,
            fileHash: $fileHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorFile(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorFileInterface {
        return new PassportElementErrorFile(
            type: $type,
            fileHash: $fileHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorFiles(
        string $type,
        array $fileHashes,
        string $message,
        string $source,
    ): PassportElementErrorFilesInterface {
        return new PassportElementErrorFiles(
            type: $type,
            fileHashes: $fileHashes,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorTranslationFile(
        string $type,
        string $fileHash,
        string $message,
        string $source,
    ): PassportElementErrorTranslationFileInterface {
        return new PassportElementErrorTranslationFile(
            type: $type,
            fileHash: $fileHash,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorTranslationFiles(
        string $type,
        array $fileHashes,
        string $message,
        string $source,
    ): PassportElementErrorTranslationFilesInterface {
        return new PassportElementErrorTranslationFiles(
            type: $type,
            fileHashes: $fileHashes,
            message: $message,
            source: $source,
        );
    }

    public function makePassportElementErrorUnspecified(
        string $type,
        string $elementHash,
        string $message,
        string $source,
    ): PassportElementErrorUnspecifiedInterface {
        return new PassportElementErrorUnspecified(
            type: $type,
            elementHash: $elementHash,
            message: $message,
            source: $source,
        );
    }

    public function makeGame(
        string $title,
        string $description,
        array $photo,
        ?string $text,
        ?array $textEntities,
        ?AnimationInterface $animation,
    ): GameInterface {
        return new Game(
            title: $title,
            description: $description,
            photo: $photo,
            text: $text,
            textEntities: $textEntities,
            animation: $animation,
        );
    }

    public function makeCallbackGame(): CallbackGameInterface
    {
        return new CallbackGame();
    }

    public function makeGameHighScore(int $position, UserInterface $user, int $score): GameHighScoreInterface
    {
        return new GameHighScore(
            position: $position,
            user: $user,
            score: $score,
        );
    }
}
