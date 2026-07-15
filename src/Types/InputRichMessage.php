<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\InputRichBlockInterface;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageMediaInterface;

/**
 * Describes a rich message to be sent. Exactly one of the fields html, markdown, or blocks must be used.
 */
class InputRichMessage implements Interfaces\InputRichMessageInterface
{
    /**
     * @param array<InputRichBlockInterface>|null        $blocks              Optional. Content of the rich message to send described as a list of blocks
     * @param string|null                                $html                Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param string|null                                $markdown            Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param array<InputRichMessageMediaInterface>|null $media               Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links
     * @param bool|null                                  $isRtl               Optional. Pass True if the rich message must be shown right-to-left
     * @param bool|null                                  $skipEntityDetection Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
     */
    public function __construct(
        public ?array $blocks = null,
        public ?string $html = null,
        public ?string $markdown = null,
        public ?array $media = null,
        public ?bool $isRtl = null,
        public ?bool $skipEntityDetection = null,
    ) {
    }
}
