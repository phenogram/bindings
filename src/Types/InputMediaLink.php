<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents an HTTP link to be sent.
 */
class InputMediaLink extends InputPollOptionMedia implements Interfaces\InputMediaLinkInterface
{
    /**
     * @param string $url  HTTP URL of the link
     * @param string $type Type of the media, must be link
     */
    public function __construct(
        public string $url,
        public string $type = 'link',
    ) {
    }
}
