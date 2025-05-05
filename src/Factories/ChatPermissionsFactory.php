<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\ChatPermissions;
use Phenogram\Bindings\Types\Interfaces\ChatPermissionsInterface;

class ChatPermissionsFactory extends AbstractFactory
{
    /**
     * Creates a new ChatPermissions instance with default fake data.
     *
     * @param bool|null $canSendMessages       Optional. Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues
     * @param bool|null $canSendAudios         Optional. Optional. True, if the user is allowed to send audios
     * @param bool|null $canSendDocuments      Optional. Optional. True, if the user is allowed to send documents
     * @param bool|null $canSendPhotos         Optional. Optional. True, if the user is allowed to send photos
     * @param bool|null $canSendVideos         Optional. Optional. True, if the user is allowed to send videos
     * @param bool|null $canSendVideoNotes     Optional. Optional. True, if the user is allowed to send video notes
     * @param bool|null $canSendVoiceNotes     Optional. Optional. True, if the user is allowed to send voice notes
     * @param bool|null $canSendPolls          Optional. Optional. True, if the user is allowed to send polls
     * @param bool|null $canSendOtherMessages  Optional. Optional. True, if the user is allowed to send animations, games, stickers and use inline bots
     * @param bool|null $canAddWebPagePreviews Optional. Optional. True, if the user is allowed to add web page previews to their messages
     * @param bool|null $canChangeInfo         Optional. Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
     * @param bool|null $canInviteUsers        Optional. Optional. True, if the user is allowed to invite new users to the chat
     * @param bool|null $canPinMessages        Optional. Optional. True, if the user is allowed to pin messages. Ignored in public supergroups
     * @param bool|null $canManageTopics       Optional. Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages
     */
    public static function make(
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
    ): ChatPermissionsInterface {
        return self::factory()->makeChatPermissions(
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
}
