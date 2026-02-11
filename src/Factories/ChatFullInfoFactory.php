<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\AcceptedGiftTypesFactory as AcceptedGiftTypes;
use Phenogram\Bindings\Factories\AudioFactory as Audio;
use Phenogram\Bindings\Factories\ChatFactory as Chat;
use Phenogram\Bindings\Factories\MessageFactory as Message;
use Phenogram\Bindings\Types\ChatFullInfo;
use Phenogram\Bindings\Types\Interfaces\AcceptedGiftTypesInterface;
use Phenogram\Bindings\Types\Interfaces\AudioInterface;
use Phenogram\Bindings\Types\Interfaces\BirthdateInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessIntroInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessLocationInterface;
use Phenogram\Bindings\Types\Interfaces\BusinessOpeningHoursInterface;
use Phenogram\Bindings\Types\Interfaces\ChatFullInfoInterface;
use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\ChatPermissionsInterface;
use Phenogram\Bindings\Types\Interfaces\ChatPhotoInterface;
use Phenogram\Bindings\Types\Interfaces\MessageInterface;
use Phenogram\Bindings\Types\Interfaces\UniqueGiftColorsInterface;
use Phenogram\Bindings\Types\Interfaces\UserRatingInterface;

class ChatFullInfoFactory extends AbstractFactory
{
    /**
     * Creates a new ChatFullInfo instance with default fake data.
     *
     * @param int|null                           $id                                 Optional. Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
     * @param string|null                        $type                               Optional. Type of the chat, can be either “private”, “group”, “supergroup” or “channel”
     * @param string|null                        $title                              Optional. Optional. Title, for supergroups, channels and group chats
     * @param string|null                        $username                           Optional. Optional. Username, for private chats, supergroups and channels if available
     * @param string|null                        $firstName                          Optional. Optional. First name of the other party in a private chat
     * @param string|null                        $lastName                           Optional. Optional. Last name of the other party in a private chat
     * @param bool|null                          $isForum                            Optional. Optional. True, if the supergroup chat is a forum (has topics enabled)
     * @param bool|null                          $isDirectMessages                   Optional. Optional. True, if the chat is the direct messages chat of a channel
     * @param int|null                           $accentColorId                      Optional. Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See accent colors for more details.
     * @param int|null                           $maxReactionCount                   Optional. The maximum number of reactions that can be set on a message in the chat
     * @param ChatPhotoInterface|null            $photo                              Optional. Optional. Chat photo
     * @param array|null                         $activeUsernames                    Optional. Optional. If non-empty, the list of all active chat usernames; for private chats, supergroups and channels
     * @param BirthdateInterface|null            $birthdate                          Optional. Optional. For private chats, the date of birth of the user
     * @param BusinessIntroInterface|null        $businessIntro                      Optional. Optional. For private chats with business accounts, the intro of the business
     * @param BusinessLocationInterface|null     $businessLocation                   Optional. Optional. For private chats with business accounts, the location of the business
     * @param BusinessOpeningHoursInterface|null $businessOpeningHours               Optional. Optional. For private chats with business accounts, the opening hours of the business
     * @param ChatInterface|null                 $personalChat                       Optional. Optional. For private chats, the personal channel of the user
     * @param ChatInterface|null                 $parentChat                         Optional. Optional. Information about the corresponding channel chat; for direct messages chats only
     * @param array|null                         $availableReactions                 Optional. Optional. List of available reactions allowed in the chat. If omitted, then all emoji reactions are allowed.
     * @param string|null                        $backgroundCustomEmojiId            Optional. Optional. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background
     * @param int|null                           $profileAccentColorId               Optional. Optional. Identifier of the accent color for the chat's profile background. See profile accent colors for more details.
     * @param string|null                        $profileBackgroundCustomEmojiId     Optional. Optional. Custom emoji identifier of the emoji chosen by the chat for its profile background
     * @param string|null                        $emojiStatusCustomEmojiId           Optional. Optional. Custom emoji identifier of the emoji status of the chat or the other party in a private chat
     * @param int|null                           $emojiStatusExpirationDate          Optional. Optional. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any
     * @param string|null                        $bio                                Optional. Optional. Bio of the other party in a private chat
     * @param bool|null                          $hasPrivateForwards                 Optional. Optional. True, if privacy settings of the other party in the private chat allows to use tg://user?id= links only in chats with the user
     * @param bool|null                          $hasRestrictedVoiceAndVideoMessages Optional. Optional. True, if the privacy settings of the other party restrict sending voice and video note messages in the private chat
     * @param bool|null                          $joinToSendMessages                 Optional. Optional. True, if users need to join the supergroup before they can send messages
     * @param bool|null                          $joinByRequest                      Optional. Optional. True, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators
     * @param string|null                        $description                        Optional. Optional. Description, for groups, supergroups and channel chats
     * @param string|null                        $inviteLink                         Optional. Optional. Primary invite link, for groups, supergroups and channel chats
     * @param MessageInterface|null              $pinnedMessage                      Optional. Optional. The most recent pinned message (by sending date)
     * @param ChatPermissionsInterface|null      $permissions                        Optional. Optional. Default chat member permissions, for groups and supergroups
     * @param AcceptedGiftTypesInterface|null    $acceptedGiftTypes                  Optional. Information about types of gifts that are accepted by the chat or by the corresponding user for private chats
     * @param bool|null                          $canSendPaidMedia                   Optional. Optional. True, if paid media messages can be sent or forwarded to the channel chat. The field is available only for channel chats.
     * @param int|null                           $slowModeDelay                      Optional. Optional. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds
     * @param int|null                           $unrestrictBoostCount               Optional. Optional. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions
     * @param int|null                           $messageAutoDeleteTime              Optional. Optional. The time after which all messages sent to the chat will be automatically deleted; in seconds
     * @param bool|null                          $hasAggressiveAntiSpamEnabled       Optional. Optional. True, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.
     * @param bool|null                          $hasHiddenMembers                   Optional. Optional. True, if non-administrators can only get the list of bots and administrators in the chat
     * @param bool|null                          $hasProtectedContent                Optional. Optional. True, if messages from the chat can't be forwarded to other chats
     * @param bool|null                          $hasVisibleHistory                  Optional. Optional. True, if new chat members will have access to old messages; available only to chat administrators
     * @param string|null                        $stickerSetName                     Optional. Optional. For supergroups, name of the group sticker set
     * @param bool|null                          $canSetStickerSet                   Optional. Optional. True, if the bot can change the group sticker set
     * @param string|null                        $customEmojiStickerSetName          Optional. Optional. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.
     * @param int|null                           $linkedChatId                       Optional. Optional. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.
     * @param ChatLocationInterface|null         $location                           Optional. Optional. For supergroups, the location to which the supergroup is connected
     * @param UserRatingInterface|null           $rating                             Optional. Optional. For private chats, the rating of the user if any
     * @param AudioInterface|null                $firstProfileAudio                  Optional. Optional. For private chats, the first audio added to the profile of the user
     * @param UniqueGiftColorsInterface|null     $uniqueGiftColors                   Optional. Optional. The color scheme based on a unique gift that must be used for the chat's name, message replies and link previews
     * @param int|null                           $paidMessageStarCount               Optional. Optional. The number of Telegram Stars a general user have to pay to send a message to the chat
     */
    public static function make(
        ?int $id = null,
        ?string $type = null,
        ?string $title = null,
        ?string $username = null,
        ?string $firstName = null,
        ?string $lastName = null,
        ?bool $isForum = null,
        ?bool $isDirectMessages = null,
        ?int $accentColorId = null,
        ?int $maxReactionCount = null,
        ?ChatPhotoInterface $photo = null,
        ?array $activeUsernames = null,
        ?BirthdateInterface $birthdate = null,
        ?BusinessIntroInterface $businessIntro = null,
        ?BusinessLocationInterface $businessLocation = null,
        ?BusinessOpeningHoursInterface $businessOpeningHours = null,
        ?ChatInterface $personalChat = null,
        ?ChatInterface $parentChat = null,
        ?array $availableReactions = null,
        ?string $backgroundCustomEmojiId = null,
        ?int $profileAccentColorId = null,
        ?string $profileBackgroundCustomEmojiId = null,
        ?string $emojiStatusCustomEmojiId = null,
        ?int $emojiStatusExpirationDate = null,
        ?string $bio = null,
        ?bool $hasPrivateForwards = null,
        ?bool $hasRestrictedVoiceAndVideoMessages = null,
        ?bool $joinToSendMessages = null,
        ?bool $joinByRequest = null,
        ?string $description = null,
        ?string $inviteLink = null,
        ?MessageInterface $pinnedMessage = null,
        ?ChatPermissionsInterface $permissions = null,
        ?AcceptedGiftTypesInterface $acceptedGiftTypes = null,
        ?bool $canSendPaidMedia = null,
        ?int $slowModeDelay = null,
        ?int $unrestrictBoostCount = null,
        ?int $messageAutoDeleteTime = null,
        ?bool $hasAggressiveAntiSpamEnabled = null,
        ?bool $hasHiddenMembers = null,
        ?bool $hasProtectedContent = null,
        ?bool $hasVisibleHistory = null,
        ?string $stickerSetName = null,
        ?bool $canSetStickerSet = null,
        ?string $customEmojiStickerSetName = null,
        ?int $linkedChatId = null,
        ?ChatLocationInterface $location = null,
        ?UserRatingInterface $rating = null,
        ?AudioInterface $firstProfileAudio = null,
        ?UniqueGiftColorsInterface $uniqueGiftColors = null,
        ?int $paidMessageStarCount = null,
    ): ChatFullInfoInterface {
        return self::factory()->makeChatFullInfo(
            id: $id ?? self::fake()->numberBetween(100000, 999999999),
            type: $type ?? self::fake()->word(),
            title: $title,
            username: $username,
            firstName: $firstName,
            lastName: $lastName,
            isForum: $isForum,
            isDirectMessages: $isDirectMessages,
            accentColorId: $accentColorId ?? self::fake()->numberBetween(100000, 999999999),
            maxReactionCount: $maxReactionCount ?? self::fake()->randomNumber(),
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
            acceptedGiftTypes: $acceptedGiftTypes ?? AcceptedGiftTypes::make(),
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
            firstProfileAudio: $firstProfileAudio,
            uniqueGiftColors: $uniqueGiftColors,
            paidMessageStarCount: $paidMessageStarCount,
        );
    }
}
