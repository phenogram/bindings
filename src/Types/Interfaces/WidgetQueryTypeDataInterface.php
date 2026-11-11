<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The query contains data for the bot.
 */
interface WidgetQueryTypeDataInterface extends TypeInterface
{
    /** @var string $type Type of the query, always “data” */
    public string $type { set; get; }

    /** @var TonWalletCardInterface|null $walletCard Optional. TON wallet card of the user who sent the query, if it was sent to the bot along with the query */
    public ?TonWalletCardInterface $walletCard { set; get; }
}
