<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\BusinessBotRights;
use Phenogram\Bindings\Types\Interfaces\BusinessBotRightsInterface;

class BusinessBotRightsFactory extends AbstractFactory
{
    /**
     * Creates a new BusinessBotRights instance with default fake data.
     *
     * @param bool|null $canReply                   Optional. Optional. True, if the bot can send and edit messages in the private chats that had incoming messages in the last 24 hours
     * @param bool|null $canReadMessages            Optional. Optional. True, if the bot can mark incoming private messages as read
     * @param bool|null $canDeleteSentMessages      Optional. Optional. True, if the bot can delete messages sent by the bot
     * @param bool|null $canDeleteAllMessages       Optional. Optional. True, if the bot can delete all private messages in managed chats
     * @param bool|null $canEditName                Optional. Optional. True, if the bot can edit the first and last name of the business account
     * @param bool|null $canEditBio                 Optional. Optional. True, if the bot can edit the bio of the business account
     * @param bool|null $canEditProfilePhoto        Optional. Optional. True, if the bot can edit the profile photo of the business account
     * @param bool|null $canEditUsername            Optional. Optional. True, if the bot can edit the username of the business account
     * @param bool|null $canChangeGiftSettings      Optional. Optional. True, if the bot can change the privacy settings pertaining to gifts for the business account
     * @param bool|null $canViewGiftsAndStars       Optional. Optional. True, if the bot can view gifts and the amount of Telegram Stars owned by the business account
     * @param bool|null $canConvertGiftsToStars     Optional. Optional. True, if the bot can convert regular gifts owned by the business account to Telegram Stars
     * @param bool|null $canTransferAndUpgradeGifts Optional. Optional. True, if the bot can transfer and upgrade gifts owned by the business account
     * @param bool|null $canTransferStars           Optional. Optional. True, if the bot can transfer Telegram Stars received by the business account to its own account, or use them to upgrade and transfer gifts
     * @param bool|null $canManageStories           Optional. Optional. True, if the bot can post, edit and delete stories on behalf of the business account
     */
    public static function make(
        ?bool $canReply = null,
        ?bool $canReadMessages = null,
        ?bool $canDeleteSentMessages = null,
        ?bool $canDeleteAllMessages = null,
        ?bool $canEditName = null,
        ?bool $canEditBio = null,
        ?bool $canEditProfilePhoto = null,
        ?bool $canEditUsername = null,
        ?bool $canChangeGiftSettings = null,
        ?bool $canViewGiftsAndStars = null,
        ?bool $canConvertGiftsToStars = null,
        ?bool $canTransferAndUpgradeGifts = null,
        ?bool $canTransferStars = null,
        ?bool $canManageStories = null,
    ): BusinessBotRightsInterface {
        return self::factory()->makeBusinessBotRights(
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
}
