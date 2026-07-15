<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a rich message to be sent. Exactly one of the fields html, markdown, or blocks must be used.
 */
interface InputRichMessageInterface extends TypeInterface
{
    /** @var array<InputRichBlockInterface>|null $blocks Optional. Content of the rich message to send described as a list of blocks */
    public ?array $blocks { set; get; }

    /** @var string|null $html Optional. Content of the rich message to send described using HTML formatting. See rich message formatting options for more details. Use media field to specify the media used in the message. */
    public ?string $html { set; get; }

    /** @var string|null $markdown Optional. Content of the rich message to send described using Markdown formatting. See rich message formatting options for more details. Use media field to specify the media used in the message. */
    public ?string $markdown { set; get; }

    /** @var array<InputRichMessageMediaInterface>|null $media Optional. List of media that are specified in the markdown or html fields using tg://photo?id=, tg://video?id=, and tg://audio?id= links */
    public ?array $media { set; get; }

    /** @var bool|null $isRtl Optional. Pass True if the rich message must be shown right-to-left */
    public ?bool $isRtl { set; get; }

    /** @var bool|null $skipEntityDetection Optional. Pass True to skip automatic detection of entities (e.g., URLs, email addresses, username mentions, hashtags, cashtags, bot commands, or phone numbers) in the text */
    public ?bool $skipEntityDetection { set; get; }
}
