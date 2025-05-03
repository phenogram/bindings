<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is a .PNG or .TGV (gzipped subset of SVG with MIME type “application/x-tgwallpattern”) pattern to be combined with the background fill chosen by the user.
 */
interface BackgroundTypePatternInterface extends TypeInterface
{
    /** @var string $type Type of the background, always “pattern” */
    public string $type { set; get; }

    /** @var DocumentInterface $document Document with the pattern */
    public DocumentInterface $document { set; get; }

    /** @var BackgroundFillInterface $fill The background fill that is combined with the pattern */
    public BackgroundFillInterface $fill { set; get; }

    /** @var int $intensity Intensity of the pattern when it is shown above the filled background; 0-100 */
    public int $intensity { set; get; }

    /** @var bool|null $isInverted Optional. True, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only */
    public ?bool $isInverted { set; get; }

    /** @var bool|null $isMoving Optional. True, if the background moves slightly when the device is tilted */
    public ?bool $isMoving { set; get; }
}
