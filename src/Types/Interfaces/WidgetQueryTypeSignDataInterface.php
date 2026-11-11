<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The query contains data signed by a TON wallet of the user who sent the query. The data is signed for the domain bot<bot_id>, where <bot_id> is the identifier of the bot.
 */
interface WidgetQueryTypeSignDataInterface extends TypeInterface
{
    /** @var string $type Type of the query, always “sign_data” */
    public string $type { set; get; }

    /** @var WidgetQueryWalletInterface $wallet The wallet that signed the data */
    public WidgetQueryWalletInterface $wallet { set; get; }

    /** @var string $signData JSON-serialized signed data */
    public string $signData { set; get; }
}
