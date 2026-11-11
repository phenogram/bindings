<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object describes an HTML widget.
 */
interface WidgetInterface extends TypeInterface
{
    /** @var string|null $id Optional. Unique identifier of the shared widget, which can be used to send the widget again using the method sendSharedWidget; omitted if the widget isn't shared */
    public ?string $id { set; get; }

    /** @var int|null $width Optional. Width of the widget in logical pixels; omitted if the widget must occupy the whole width of the message bubble */
    public ?int $width { set; get; }

    /** @var int|null $height Optional. Height of the widget in logical pixels; omitted if the height of the widget isn't fixed */
    public ?int $height { set; get; }

    /** @var string $html HTML code of the widget */
    public string $html { set; get; }

    /** @var string|null $publicData Optional. Public data of the widget, which is available wherever the widget is shown. All messages with a shared widget have the same public data. */
    public ?string $publicData { set; get; }

    /** @var string|null $chatData Optional. Data of the widget, which is specific to the message */
    public ?string $chatData { set; get; }
}
