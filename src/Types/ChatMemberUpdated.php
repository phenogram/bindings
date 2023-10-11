<?php

namespace Shanginn\TelegramBotApiBindings\Types;

/**
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated implements TypeInterface
{
    /**
     * @param Chat                $chat                    Chat the user belongs to
     * @param User                $from                    Performer of the action, which resulted in the change
     * @param int                 $date                    Date the change was done in Unix time
     * @param ChatMember          $oldChatMember           Previous information about the chat member
     * @param ChatMember          $newChatMember           New information about the chat member
     * @param ChatInviteLink|null $inviteLink              Optional. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
     * @param bool|null           $viaChatFolderInviteLink Optional. True, if the user joined the chat via a chat folder invite link
     */
    public function __construct(
        public Chat $chat,
        public User $from,
        public int $date,
        public ChatMember $oldChatMember,
        public ChatMember $newChatMember,
        public ?ChatInviteLink $inviteLink = null,
        public ?bool $viaChatFolderInviteLink = null,
    ) {
    }

    public static function fromResponseResult(array $result): self
    {
        $requiredFields = [
            'chat',
            'from',
            'date',
            'old_chat_member',
            'new_chat_member',
        ];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (!isset($data[$field])) {
                $missingFields[] = $field;
            }
        }

        if (count($missingFields) > 0) {
            throw new \InvalidArgumentException(sprintf('Class %s missing some fields from the result array: %s', static::class, implode(', ', $missingFields)));
        }

        return new self(
            chat: \Shanginn\TelegramBotApiBindings\Types\Chat::fromResponseResult($result['chat']),
            from: \Shanginn\TelegramBotApiBindings\Types\User::fromResponseResult($result['from']),
            date: $result['date'],
            oldChatMember: \Shanginn\TelegramBotApiBindings\Types\ChatMember::fromResponseResult($result['old_chat_member']),
            newChatMember: \Shanginn\TelegramBotApiBindings\Types\ChatMember::fromResponseResult($result['new_chat_member']),
            inviteLink: $result['invite_link'] !== null
                ? \Shanginn\TelegramBotApiBindings\Types\ChatInviteLink::fromResponseResult($result['invite_link'])
                : null,
            viaChatFolderInviteLink: $result['via_chat_folder_invite_link'] ?? null,
        );
    }
}
