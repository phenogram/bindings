<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\WidgetInterface;
use Phenogram\Bindings\Types\Widget;

class WidgetFactory extends AbstractFactory
{
    /**
     * Creates a new Widget instance with default fake data.
     *
     * @param string|null $id         Optional. Optional. Unique identifier of the shared widget, which can be used to send the widget again using the method sendSharedWidget; omitted if the widget isn't shared
     * @param int|null    $width      Optional. Optional. Width of the widget in logical pixels; omitted if the widget must occupy the whole width of the message bubble
     * @param int|null    $height     Optional. Optional. Height of the widget in logical pixels; omitted if the height of the widget isn't fixed
     * @param string|null $html       Optional. HTML code of the widget
     * @param string|null $publicData Optional. Optional. Public data of the widget, which is available wherever the widget is shown. All messages with a shared widget have the same public data.
     * @param string|null $chatData   Optional. Optional. Data of the widget, which is specific to the message
     */
    public static function make(
        ?string $id = null,
        ?int $width = null,
        ?int $height = null,
        ?string $html = null,
        ?string $publicData = null,
        ?string $chatData = null,
    ): WidgetInterface {
        return self::factory()->makeWidget(
            id: $id,
            width: $width,
            height: $height,
            html: $html ?? self::fake()->text(50),
            publicData: $publicData,
            chatData: $chatData,
        );
    }
}
