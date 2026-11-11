<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\TonWalletCardInterface;

/**
 * The query contains data for the bot.
 */
class WidgetQueryTypeData extends WidgetQueryType implements Interfaces\WidgetQueryTypeDataInterface
{
    /**
     * @param string                      $type       Type of the query, always “data”
     * @param TonWalletCardInterface|null $walletCard Optional. TON wallet card of the user who sent the query, if it was sent to the bot along with the query
     */
    public function __construct(
        public string $type,
        public ?TonWalletCardInterface $walletCard = null,
    ) {
    }
}
