<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes an HTML widget.
 */
class Widget implements Interfaces\WidgetInterface
{
    /**
     * @param string      $html       HTML code of the widget
     * @param string|null $id         Optional. Unique identifier of the shared widget, which can be used to send the widget again using the method sendSharedWidget; omitted if the widget isn't shared
     * @param int|null    $width      Optional. Width of the widget in logical pixels; omitted if the widget must occupy the whole width of the message bubble
     * @param int|null    $height     Optional. Height of the widget in logical pixels; omitted if the height of the widget isn't fixed
     * @param string|null $publicData Optional. Public data of the widget, which is available wherever the widget is shown. All messages with a shared widget have the same public data.
     * @param string|null $chatData   Optional. Data of the widget, which is specific to the message
     */
    public function __construct(
        public string $html,
        public ?string $id = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $publicData = null,
        public ?string $chatData = null,
    ) {
    }
}
