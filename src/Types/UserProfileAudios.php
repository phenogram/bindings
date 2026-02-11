<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\AudioInterface;

/**
 * This object represents the audios displayed on a user's profile.
 */
class UserProfileAudios implements Interfaces\UserProfileAudiosInterface
{
    /**
     * @param int                   $totalCount Total number of profile audios for the target user
     * @param array<AudioInterface> $audios     Requested profile audios
     */
    public function __construct(
        public int $totalCount,
        public array $audios,
    ) {
    }
}
