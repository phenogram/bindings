<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an answer of a user in a non-anonymous poll.
 */
interface PollAnswerInterface extends TypeInterface
{
    /** @var string $pollId Unique poll identifier */
    public string $pollId { set; }

    /** @var ChatInterface|null $voterChat Optional. The chat that changed the answer to the poll, if the voter is anonymous */
    public ?ChatInterface $voterChat { set; }

    /** @var UserInterface|null $user Optional. The user that changed the answer to the poll, if the voter isn't anonymous */
    public ?UserInterface $user { set; }

    /** @var array<int> $optionIds 0-based identifiers of chosen answer options. May be empty if the vote was retracted. */
    public array $optionIds { set; }
}
