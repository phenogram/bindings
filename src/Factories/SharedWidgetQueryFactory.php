<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\UserFactory as User;
use Phenogram\Bindings\Types\Interfaces\SharedWidgetQueryInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\SharedWidgetQuery;

class SharedWidgetQueryFactory extends AbstractFactory
{
    /**
     * Creates a new SharedWidgetQuery instance with default fake data.
     *
     * @param string|null                                                        $id       Optional. Unique identifier for this query
     * @param UserInterface|null                                                 $from     Optional. Sender
     * @param \Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface|null $type     Optional. Type of the query
     * @param string|null                                                        $data     Optional. Data of the query, 1-64 bytes
     * @param string|null                                                        $widgetId Optional. Unique identifier of the shared widget, which sent the query
     */
    public static function make(
        ?string $id = null,
        ?UserInterface $from = null,
        ?\Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeInterface $type = null,
        ?string $data = null,
        ?string $widgetId = null,
    ): SharedWidgetQueryInterface {
        return self::factory()->makeSharedWidgetQuery(
            id: $id ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
            from: $from ?? User::make(),
            type: $type ?? WidgetQueryTypeDataFactory::make(),
            data: $data ?? self::fake()->text(50),
            widgetId: $widgetId ?? self::fake()->bothify('?#?#?#?#?#?#?#???'),
        );
    }
}
