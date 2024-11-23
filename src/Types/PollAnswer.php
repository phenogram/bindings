<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\ChatInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer implements Interfaces\PollAnswerInterface
{
    /**
     * @param string             $pollId    Unique poll identifier
     * @param array<int>         $optionIds 0-based identifiers of chosen answer options. May be empty if the vote was retracted.
     * @param ChatInterface|null $voterChat Optional. The chat that changed the answer to the poll, if the voter is anonymous
     * @param UserInterface|null $user      Optional. The user that changed the answer to the poll, if the voter isn't anonymous
     */
    public function __construct(
        public string $pollId,
        public array $optionIds,
        public ?ChatInterface $voterChat = null,
        public ?UserInterface $user = null,
    ) {
    }
}
