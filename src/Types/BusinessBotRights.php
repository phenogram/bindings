<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents the rights of a business bot.
 */
class BusinessBotRights implements Interfaces\BusinessBotRightsInterface
{
    /**
     * @param bool|null $canReply                   Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     * @param bool|null $canReadMessages            Optional. True, if the bot can mark incoming private messages as read
     * @param bool|null $canDeleteSentMessages      Optional. True, if the bot can delete messages sent by the bot
     * @param bool|null $canDeleteAllMessages       Optional. True, if the bot can delete all private messages in managed chats
     * @param bool|null $canEditName                Optional. True, if the bot can edit the first and last name of the business account
     * @param bool|null $canEditBio                 Optional. True, if the bot can edit the bio of the business account
     * @param bool|null $canEditProfilePhoto        Optional. True, if the bot can edit the profile photo of the business account
     * @param bool|null $canEditUsername            Optional. True, if the bot can edit the username of the business account
     * @param bool|null $canChangeGiftSettings      Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
     * @param bool|null $canViewGiftsAndStars       Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     * @param bool|null $canConvertGiftsToStars     Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
     * @param bool|null $canTransferAndUpgradeGifts Optional. True, if the bot can transfer and upgrade gifts owned by the business account
     * @param bool|null $canTransferStars           Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     * @param bool|null $canManageStories           Optional. True, if the bot can post, edit and delete stories on behalf of the business account
     */
    public function __construct(
        public ?bool $canReply = null,
        public ?bool $canReadMessages = null,
        public ?bool $canDeleteSentMessages = null,
        public ?bool $canDeleteAllMessages = null,
        public ?bool $canEditName = null,
        public ?bool $canEditBio = null,
        public ?bool $canEditProfilePhoto = null,
        public ?bool $canEditUsername = null,
        public ?bool $canChangeGiftSettings = null,
        public ?bool $canViewGiftsAndStars = null,
        public ?bool $canConvertGiftsToStars = null,
        public ?bool $canTransferAndUpgradeGifts = null,
        public ?bool $canTransferStars = null,
        public ?bool $canManageStories = null,
    ) {
    }
}
