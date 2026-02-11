<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the audios displayed on a user's profile.
 */
interface UserProfileAudiosInterface extends TypeInterface
{
    /** @var int $totalCount Total number of profile audios for the target user */
    public int $totalCount { set; get; }

    /** @var array<AudioInterface> $audios Requested profile audios */
    public array $audios { set; get; }
}
