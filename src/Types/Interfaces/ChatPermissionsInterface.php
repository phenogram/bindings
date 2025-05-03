<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes actions that a non-administrator user is allowed to take in a chat.
 */
interface ChatPermissionsInterface extends TypeInterface
{
    /** @var bool|null $canSendMessages Optional. True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
    public ?bool $canSendMessages { set; get; }

    /** @var bool|null $canSendAudios Optional. True, if the user is allowed to send audios */
    public ?bool $canSendAudios { set; get; }

    /** @var bool|null $canSendDocuments Optional. True, if the user is allowed to send documents */
    public ?bool $canSendDocuments { set; get; }

    /** @var bool|null $canSendPhotos Optional. True, if the user is allowed to send photos */
    public ?bool $canSendPhotos { set; get; }

    /** @var bool|null $canSendVideos Optional. True, if the user is allowed to send videos */
    public ?bool $canSendVideos { set; get; }

    /** @var bool|null $canSendVideoNotes Optional. True, if the user is allowed to send video notes */
    public ?bool $canSendVideoNotes { set; get; }

    /** @var bool|null $canSendVoiceNotes Optional. True, if the user is allowed to send voice notes */
    public ?bool $canSendVoiceNotes { set; get; }

    /** @var bool|null $canSendPolls Optional. True, if the user is allowed to send polls */
    public ?bool $canSendPolls { set; get; }

    /** @var bool|null $canSendOtherMessages Optional. True, if the user is allowed to send animations, games, stickers and use inline bots */
    public ?bool $canSendOtherMessages { set; get; }

    /** @var bool|null $canAddWebPagePreviews Optional. True, if the user is allowed to add web page previews to their messages */
    public ?bool $canAddWebPagePreviews { set; get; }

    /** @var bool|null $canChangeInfo Optional. True, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups */
    public ?bool $canChangeInfo { set; get; }

    /** @var bool|null $canInviteUsers Optional. True, if the user is allowed to invite new users to the chat */
    public ?bool $canInviteUsers { set; get; }

    /** @var bool|null $canPinMessages Optional. True, if the user is allowed to pin messages. Ignored in public supergroups */
    public ?bool $canPinMessages { set; get; }

    /** @var bool|null $canManageTopics Optional. True, if the user is allowed to create forum topics. If omitted defaults to the value of can_pin_messages */
    public ?bool $canManageTopics { set; get; }
}
