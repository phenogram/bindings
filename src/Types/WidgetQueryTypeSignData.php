<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\WidgetQueryWalletInterface;

/**
 * The query contains data signed by a TON wallet of the user who sent the query. The data is signed for the domain bot<bot_id>, where <bot_id> is the identifier of the bot.
 */
class WidgetQueryTypeSignData extends WidgetQueryType implements Interfaces\WidgetQueryTypeSignDataInterface
{
    /**
     * @param string                     $type     Type of the query, always “sign_data”
     * @param WidgetQueryWalletInterface $wallet   The wallet that signed the data
     * @param string                     $signData JSON-serialized signed data
     */
    public function __construct(
        public string $type,
        public WidgetQueryWalletInterface $wallet,
        public string $signData,
    ) {
    }
}
