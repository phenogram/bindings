<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the rights of a business bot.
 */
interface BusinessBotRightsInterface extends TypeInterface
{
    /** @var bool|null $canReply Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours */
    public ?bool $canReply { set; get; }

    /** @var bool|null $canReadMessages Optional. True, if the bot can mark incoming private messages as read */
    public ?bool $canReadMessages { set; get; }

    /** @var bool|null $canDeleteOutgoingMessages Optional. True, if the bot can delete messages sent by the bot */
    public ?bool $canDeleteOutgoingMessages { set; get; }

    /** @var bool|null $canDeleteAllMessages Optional. True, if the bot can delete all private messages in managed chats */
    public ?bool $canDeleteAllMessages { set; get; }

    /** @var bool|null $canEditName Optional. True, if the bot can edit the first and last name of the business account */
    public ?bool $canEditName { set; get; }

    /** @var bool|null $canEditBio Optional. True, if the bot can edit the bio of the business account */
    public ?bool $canEditBio { set; get; }

    /** @var bool|null $canEditProfilePhoto Optional. True, if the bot can edit the profile photo of the business account */
    public ?bool $canEditProfilePhoto { set; get; }

    /** @var bool|null $canEditUsername Optional. True, if the bot can edit the username of the business account */
    public ?bool $canEditUsername { set; get; }

    /** @var bool|null $canChangeGiftSettings Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account */
    public ?bool $canChangeGiftSettings { set; get; }

    /** @var bool|null $canViewGiftsAndStars Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account */
    public ?bool $canViewGiftsAndStars { set; get; }

    /** @var bool|null $canConvertGiftsToStars Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars */
    public ?bool $canConvertGiftsToStars { set; get; }

    /** @var bool|null $canTransferAndUpgradeGifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account */
    public ?bool $canTransferAndUpgradeGifts { set; get; }

    /** @var bool|null $canTransferStars Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts */
    public ?bool $canTransferStars { set; get; }

    /** @var bool|null $canManageStories Optional. True, if the bot can post, edit and delete stories on behalf of the business account */
    public ?bool $canManageStories { set; get; }
}
