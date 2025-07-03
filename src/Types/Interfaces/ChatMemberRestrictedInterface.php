<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
interface ChatMemberRestrictedInterface extends TypeInterface
{
    /** @var string $status The member's status in the chat, always “restricted” */
    public string $status { set; get; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; get; }

    /** @var bool $isMember True, if the user is a member of the chat at the moment of the request */
    public bool $isMember { set; get; }

    /** @var bool $canSendMessages True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
    public bool $canSendMessages { set; get; }

    /** @var bool $canSendAudios True, if the user is allowed to send audios */
    public bool $canSendAudios { set; get; }

    /** @var bool $canSendDocuments True, if the user is allowed to send documents */
    public bool $canSendDocuments { set; get; }

    /** @var bool $canSendPhotos True, if the user is allowed to send photos */
    public bool $canSendPhotos { set; get; }

    /** @var bool $canSendVideos True, if the user is allowed to send videos */
    public bool $canSendVideos { set; get; }

    /** @var bool $canSendVideoNotes True, if the user is allowed to send video notes */
    public bool $canSendVideoNotes { set; get; }

    /** @var bool $canSendVoiceNotes True, if the user is allowed to send voice notes */
    public bool $canSendVoiceNotes { set; get; }

    /** @var bool $canSendPolls True, if the user is allowed to send polls and checklists */
    public bool $canSendPolls { set; get; }

    /** @var bool $canSendOtherMessages True, if the user is allowed to send animations, games, stickers and use inline bots */
    public bool $canSendOtherMessages { set; get; }

    /** @var bool $canAddWebPagePreviews True, if the user is allowed to add web page previews to their messages */
    public bool $canAddWebPagePreviews { set; get; }

    /** @var bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings */
    public bool $canChangeInfo { set; get; }

    /** @var bool $canInviteUsers True, if the user is allowed to invite new users to the chat */
    public bool $canInviteUsers { set; get; }

    /** @var bool $canPinMessages True, if the user is allowed to pin messages */
    public bool $canPinMessages { set; get; }

    /** @var bool $canManageTopics True, if the user is allowed to create forum topics */
    public bool $canManageTopics { set; get; }

    /** @var int $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever */
    public int $untilDate { set; get; }
}
