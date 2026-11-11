<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\WidgetQueryWalletFactory as WidgetQueryWallet;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryTypeSignDataInterface;
use Phenogram\Bindings\Types\Interfaces\WidgetQueryWalletInterface;
use Phenogram\Bindings\Types\WidgetQueryTypeSignData;

class WidgetQueryTypeSignDataFactory extends AbstractFactory
{
    /**
     * Creates a new WidgetQueryTypeSignData instance with default fake data.
     *
     * @param string|null                     $type     Optional. Type of the query, always “sign_data”
     * @param WidgetQueryWalletInterface|null $wallet   Optional. The wallet that signed the data
     * @param string|null                     $signData Optional. JSON-serialized signed data
     */
    public static function make(
        ?string $type = null,
        ?WidgetQueryWalletInterface $wallet = null,
        ?string $signData = null,
    ): WidgetQueryTypeSignDataInterface {
        return self::factory()->makeWidgetQueryTypeSignData(
            type: $type ?? 'sign_data',
            wallet: $wallet ?? WidgetQueryWallet::make(),
            signData: $signData ?? self::fake()->text(50),
        );
    }
}
