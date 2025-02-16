<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a chat member that is under certain restrictions in the chat. Supergroups only.
 */
interface ChatMemberRestrictedInterface extends TypeInterface
{
    /** @var string $status The member's status in the chat, always “restricted” */
    public string $status { set; }

    /** @var UserInterface $user Information about the user */
    public UserInterface $user { set; }

    /** @var bool $isMember True, if the user is a member of the chat at the moment of the request */
    public bool $isMember { set; }

    /** @var bool $canSendMessages True, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues */
    public bool $canSendMessages { set; }

    /** @var bool $canSendAudios True, if the user is allowed to send audios */
    public bool $canSendAudios { set; }

    /** @var bool $canSendDocuments True, if the user is allowed to send documents */
    public bool $canSendDocuments { set; }

    /** @var bool $canSendPhotos True, if the user is allowed to send photos */
    public bool $canSendPhotos { set; }

    /** @var bool $canSendVideos True, if the user is allowed to send videos */
    public bool $canSendVideos { set; }

    /** @var bool $canSendVideoNotes True, if the user is allowed to send video notes */
    public bool $canSendVideoNotes { set; }

    /** @var bool $canSendVoiceNotes True, if the user is allowed to send voice notes */
    public bool $canSendVoiceNotes { set; }

    /** @var bool $canSendPolls True, if the user is allowed to send polls */
    public bool $canSendPolls { set; }

    /** @var bool $canSendOtherMessages True, if the user is allowed to send animations, games, stickers and use inline bots */
    public bool $canSendOtherMessages { set; }

    /** @var bool $canAddWebPagePreviews True, if the user is allowed to add web page previews to their messages */
    public bool $canAddWebPagePreviews { set; }

    /** @var bool $canChangeInfo True, if the user is allowed to change the chat title, photo and other settings */
    public bool $canChangeInfo { set; }

    /** @var bool $canInviteUsers True, if the user is allowed to invite new users to the chat */
    public bool $canInviteUsers { set; }

    /** @var bool $canPinMessages True, if the user is allowed to pin messages */
    public bool $canPinMessages { set; }

    /** @var bool $canManageTopics True, if the user is allowed to create forum topics */
    public bool $canManageTopics { set; }

    /** @var int $untilDate Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever */
    public int $untilDate { set; }
}
