<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes the options used for link preview generation.
 */
interface LinkPreviewOptionsInterface extends TypeInterface
{
    /** @var bool|null $isDisabled Optional. True, if the link preview is disabled */
    public ?bool $isDisabled { set; get; }

    /** @var string|null $url Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used */
    public ?string $url { set; get; }

    /** @var bool|null $preferSmallMedia Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview */
    public ?bool $preferSmallMedia { set; get; }

    /** @var bool|null $preferLargeMedia Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview */
    public ?bool $preferLargeMedia { set; get; }

    /** @var bool|null $showAboveText Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text */
    public ?bool $showAboveText { set; get; }
}
