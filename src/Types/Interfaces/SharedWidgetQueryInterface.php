<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an incoming query from a forwarded message with a shared widget created by the bot. Use answerWidgetQuery to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 */
interface SharedWidgetQueryInterface extends TypeInterface
{
    /** @var string $id Unique identifier for this query */
    public string $id { set; get; }

    /** @var UserInterface $from Sender */
    public UserInterface $from { set; get; }

    /** @var WidgetQueryTypeInterface $type Type of the query */
    public WidgetQueryTypeInterface $type { set; get; }

    /** @var string $data Data of the query, 1-64 bytes */
    public string $data { set; get; }

    /** @var string $widgetId Unique identifier of the shared widget, which sent the query */
    public string $widgetId { set; get; }
}
