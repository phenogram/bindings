<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichMessage;
use Phenogram\Bindings\Types\Interfaces\InputRichMessageInterface;

class InputRichMessageFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichMessage instance with default fake data.
     *
     * @param array|null  $blocks              Optional. Optional. Content of the rich message to send described as a list of blocks
     * @param string|null $html                Optional. Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param string|null $markdown            Optional. Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message.
     * @param array|null  $media               Optional. Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links
     * @param bool|null   $isRtl               Optional. Optional. Pass True if the rich message must be shown right-to-left
     * @param bool|null   $skipEntityDetection Optional. Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text
     */
    public static function make(
        ?array $blocks = null,
        ?string $html = null,
        ?string $markdown = null,
        ?array $media = null,
        ?bool $isRtl = null,
        ?bool $skipEntityDetection = null,
    ): InputRichMessageInterface {
        return self::factory()->makeInputRichMessage(
            blocks: $blocks,
            html: $html,
            markdown: $markdown,
            media: $media,
            isRtl: $isRtl,
            skipEntityDetection: $skipEntityDetection,
        );
    }
}
