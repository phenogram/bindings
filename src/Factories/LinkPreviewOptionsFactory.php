<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\LinkPreviewOptionsInterface;
use Phenogram\Bindings\Types\LinkPreviewOptions;

class LinkPreviewOptionsFactory extends AbstractFactory
{
    /**
     * Creates a new LinkPreviewOptions instance with default fake data.
     *
     * @param bool|null   $isDisabled       Optional. Optional. True, if the link preview is disabled
     * @param string|null $url              Optional. Optional. URL to use for the link preview. If empty, then the first URL found in the message text will be used
     * @param bool|null   $preferSmallMedia Optional. Optional. True, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null   $preferLargeMedia Optional. Optional. True, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview
     * @param bool|null   $showAboveText    Optional. Optional. True, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text
     */
    public static function make(
        ?bool $isDisabled = null,
        ?string $url = null,
        ?bool $preferSmallMedia = null,
        ?bool $preferLargeMedia = null,
        ?bool $showAboveText = null,
    ): LinkPreviewOptionsInterface {
        return self::factory()->makeLinkPreviewOptions(
            isDisabled: $isDisabled,
            url: $url,
            preferSmallMedia: $preferSmallMedia,
            preferLargeMedia: $preferLargeMedia,
            showAboveText: $showAboveText,
        );
    }
}
