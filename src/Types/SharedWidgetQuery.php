<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface;

/**
 * This object represents an incoming query from a forwarded message with a shared widget created by the bot. Use answerWidgetQuery to answer the query. Each user can send at most 5 queries per 5 seconds to the bot from all its widgets.
 */
class SharedWidgetQuery implements Interfaces\SharedWidgetQueryInterface
{
    /**
     * @param string                   $id       Unique identifier for this query
     * @param UserInterface            $from     Sender
     * @param WidgetQueryTypeInterface $type     Type of the query
     * @param string                   $data     Data of the query, 1-64 bytes
     * @param string                   $widgetId Unique identifier of the shared widget, which sent the query
     */
    public function __construct(
        public string $id,
        public UserInterface $from,
        public WidgetQueryTypeInterface $type,
        public string $data,
        public string $widgetId,
    ) {
    }
}
