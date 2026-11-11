<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\TonWalletCardInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeDataInterface;
use Phenogram\Bindings\Types\WidgetQueryTypeData;

class WidgetQueryTypeDataFactory extends AbstractFactory
{
    /**
     * Creates a new WidgetQueryTypeData instance with default fake data.
     *
     * @param string|null                 $type       Optional. Type of the query, always “data”
     * @param TonWalletCardInterface|null $walletCard Optional. Optional. TON wallet card of the user who sent the query, if it was sent to the bot along with the query
     */
    public static function make(
        ?string $type = null,
        ?TonWalletCardInterface $walletCard = null,
    ): WidgetQueryTypeDataInterface {
        return self::factory()->makeWidgetQueryTypeData(
            type: $type ?? 'data',
            walletCard: $walletCard,
        );
    }
}
