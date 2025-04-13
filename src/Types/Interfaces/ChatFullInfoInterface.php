<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains full information about a chat.
 */
interface ChatFullInfoInterface extends TypeInterface
{
    /** @var int $id Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier. */
    public int $id { set; }

    /** @var string $type Type of the chat, can be either “private”, “group”, “supergroup” or “channel” */
    public string $type { set; }

    /** @var string|null $title Optional. Title, for supergroups, channels and group chats */
    public ?string $title { set; }

    /** @var string|null $username Optional. Username, for private chats, supergroups and channels if available */
    public ?string $username { set; }

    /** @var string|null $firstName Optional. First name of the other party in a private chat */
    public ?string $firstName { set; }

    /** @var string|null $lastName Optional. Last name of the other party in a private chat */
    public ?string $lastName { set; }

    /** @var bool|null $isForum Optional. True, if the supergroup chat is a forum (has topics enabled) */
    public ?bool $isForum { set; }

    /** @var int $accentColorId Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details. */
    public int $accentColorId { set; }

    /** @var int $maxReactionCount The maximum number of reactions that can be set on a message in the chat */
    public int $maxReactionCount { set; }

    /** @var ChatPhotoInterface|null $photo Optional. Chat photo */
    public ?ChatPhotoInterface $photo { set; }

    /** @var array<string>|null $activeUsernames Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels */
    public ?array $activeUsernames { set; }

    /** @var BirthdateInterface|null $birthdate Optional. For private chats, the date of birth of the user */
    public ?BirthdateInterface $birthdate { set; }

    /** @var BusinessIntroInterface|null $businessIntro Optional. For private chats with business accounts, the intro of the business */
    public ?BusinessIntroInterface $businessIntro { set; }

    /** @var BusinessLocationInterface|null $businessLocation Optional. For private chats with business accounts, the location of the business */
    public ?BusinessLocationInterface $businessLocation { set; }

    /** @var BusinessOpeningHoursInterface|null $businessOpeningHours Optional. For private chats with business accounts, the opening hours of the business */
    public ?BusinessOpeningHoursInterface $businessOpeningHours { set; }

    /** @var ChatInterface|null $personalChat Optional. For private chats, the personal channel of the user */
    public ?ChatInterface $personalChat { set; }

    /** @var array<ReactionTypeInterface>|null $availableReactions Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed. */
    public ?array $availableReactions { set; }

    /** @var string|null $backgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background */
    public ?string $backgroundCustomEmojiId { set; }

    /** @var int|null $profileAccentColorId Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details. */
    public ?int $profileAccentColorId { set; }

    /** @var string|null $profileBackgroundCustomEmojiId Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background */
    public ?string $profileBackgroundCustomEmojiId { set; }

    /** @var string|null $emojiStatusCustomEmojiId Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat */
    public ?string $emojiStatusCustomEmojiId { set; }

    /** @var int|null $emojiStatusExpirationDate Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any */
    public ?int $emojiStatusExpirationDate { set; }

    /** @var string|null $bio Optional. Bio of the other party in a private chat */
    public ?string $bio { set; }

    /** @var bool|null $hasPrivateForwards Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id=<user_id> links only in chats with the user */
    public ?bool $hasPrivateForwards { set; }

    /** @var bool|null $hasRestrictedVoiceAndVideoMessages Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat */
    public ?bool $hasRestrictedVoiceAndVideoMessages { set; }

    /** @var bool|null $joinToSendMessages Optional. True, if users need to join the supergroup before they can send messages */
    public ?bool $joinToSendMessages { set; }

    /** @var bool|null $joinByRequest Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators */
    public ?bool $joinByRequest { set; }

    /** @var string|null $description Optional. Description, for groups, supergroups and channel chats */
    public ?string $description { set; }

    /** @var string|null $inviteLink Optional. Primary invite link, for groups, supergroups and channel chats */
    public ?string $inviteLink { set; }

    /** @var MessageInterface|null $pinnedMessage Optional. The most recent pinned message (by sending date) */
    public ?MessageInterface $pinnedMessage { set; }

    /** @var ChatPermissionsInterface|null $permissions Optional. Default chat member permissions, for groups and supergroups */
    public ?ChatPermissionsInterface $permissions { set; }

    /** @var AcceptedGiftTypesInterface $acceptedGiftTypes Information about types of gifts that are accepted by the chat or by the corresponding user for private chats */
    public AcceptedGiftTypesInterface $acceptedGiftTypes { set; }

    /** @var bool|null $canSendPaidMedia Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats. */
    public ?bool $canSendPaidMedia { set; }

    /** @var int|null $slowModeDelay Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds */
    public ?int $slowModeDelay { set; }

    /** @var int|null $unrestrictBoostCount Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions */
    public ?int $unrestrictBoostCount { set; }

    /** @var int|null $messageAutoDeleteTime Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds */
    public ?int $messageAutoDeleteTime { set; }

    /** @var bool|null $hasAggressiveAntiSpamEnabled Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. */
    public ?bool $hasAggressiveAntiSpamEnabled { set; }

    /** @var bool|null $hasHiddenMembers Optional. True, if non-administrators can only get the list of bots and administrators in the chat */
    public ?bool $hasHiddenMembers { set; }

    /** @var bool|null $hasProtectedContent Optional. True, if messages from the chat can't be forwarded to other chats */
    public ?bool $hasProtectedContent { set; }

    /** @var bool|null $hasVisibleHistory Optional. True, if new chat members will have access to old messages; available only to chat administrators */
    public ?bool $hasVisibleHistory { set; }

    /** @var string|null $stickerSetName Optional. For supergroups, name of the group sticker set */
    public ?string $stickerSetName { set; }

    /** @var bool|null $canSetStickerSet Optional. True, if the bot can change the group sticker set */
    public ?bool $canSetStickerSet { set; }

    /** @var string|null $customEmojiStickerSetName Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group. */
    public ?string $customEmojiStickerSetName { set; }

    /** @var int|null $linkedChatId Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. */
    public ?int $linkedChatId { set; }

    /** @var ChatLocationInterface|null $location Optional. For supergroups, the location to which the supergroup is connected */
    public ?ChatLocationInterface $location { set; }
}
