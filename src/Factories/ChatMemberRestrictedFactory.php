<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\ChatMemberRestricted;
use Phenogram\Bindings\Types\Interfaces\ChatMemberRestrictedInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

class ChatMemberRestrictedFactory extends AbstractFactory
{
    /**
     * Creates a new ChatMemberRestricted instance with default fake data.
     *
     * @param string|null        $status                Optional. The member's status in the chat, always “restricted”
     * @param UserInterface|null $user                  Optional. Information about the user
     * @param bool|null          $isMember              Optional. True, if the user is a member of the chat at the moment of the request
     * @param bool|null          $canSendMessages       Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param bool|null          $canSendAudios         Optional. True, if the user is allowed to send audios
     * @param bool|null          $canSendDocuments      Optional. True, if the user is allowed to send documents
     * @param bool|null          $canSendPhotos         Optional. True, if the user is allowed to send photos
     * @param bool|null          $canSendVideos         Optional. True, if the user is allowed to send videos
     * @param bool|null          $canSendVideoNotes     Optional. True, if the user is allowed to send video notes
     * @param bool|null          $canSendVoiceNotes     Optional. True, if the user is allowed to send voice notes
     * @param bool|null          $canSendPolls          Optional. True, if the user is allowed to send polls and checklists
     * @param bool|null          $canSendOtherMessages  Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool|null          $canAddWebPagePreviews Optional. True, if the user is allowed to add web page previews to their messages
     * @param bool|null          $canChangeInfo         Optional. True, if the user is allowed to change the chat title, photo and other settings
     * @param bool|null          $canInviteUsers        Optional. True, if the user is allowed to invite new users to the chat
     * @param bool|null          $canPinMessages        Optional. True, if the user is allowed to pin messages
     * @param bool|null          $canManageTopics       Optional. True, if the user is allowed to create forum topics
     * @param int|null           $untilDate             Optional. Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever
     */
    public static function make(
        ?string $status = null,
        ?UserInterface $user = null,
        ?bool $isMember = null,
        ?bool $canSendMessages = null,
        ?bool $canSendAudios = null,
        ?bool $canSendDocuments = null,
        ?bool $canSendPhotos = null,
        ?bool $canSendVideos = null,
        ?bool $canSendVideoNotes = null,
        ?bool $canSendVoiceNotes = null,
        ?bool $canSendPolls = null,
        ?bool $canSendOtherMessages = null,
        ?bool $canAddWebPagePreviews = null,
        ?bool $canChangeInfo = null,
        ?bool $canInviteUsers = null,
        ?bool $canPinMessages = null,
        ?bool $canManageTopics = null,
        ?int $untilDate = null,
    ): ChatMemberRestrictedInterface {
        return self::factory()->makeChatMemberRestricted(
            status: $status ?? self::fake()->randomElement(['creator', 'administrator', 'member', 'restricted', 'left', 'kicked']),
            user: $user ?? User::make(),
            isMember: $isMember ?? self::fake()->boolean(),
            canSendMessages: $canSendMessages ?? self::fake()->boolean(),
            canSendAudios: $canSendAudios ?? self::fake()->boolean(),
            canSendDocuments: $canSendDocuments ?? self::fake()->boolean(),
            canSendPhotos: $canSendPhotos ?? self::fake()->boolean(),
            canSendVideos: $canSendVideos ?? self::fake()->boolean(),
            canSendVideoNotes: $canSendVideoNotes ?? self::fake()->boolean(),
            canSendVoiceNotes: $canSendVoiceNotes ?? self::fake()->boolean(),
            canSendPolls: $canSendPolls ?? self::fake()->boolean(),
            canSendOtherMessages: $canSendOtherMessages ?? self::fake()->boolean(),
            canAddWebPagePreviews: $canAddWebPagePreviews ?? self::fake()->boolean(),
            canChangeInfo: $canChangeInfo ?? self::fake()->boolean(),
            canInviteUsers: $canInviteUsers ?? self::fake()->boolean(),
            canPinMessages: $canPinMessages ?? self::fake()->boolean(),
            canManageTopics: $canManageTopics ?? self::fake()->boolean(),
            untilDate: $untilDate ?? self::fake()->unixTime(),
        );
    }
}
