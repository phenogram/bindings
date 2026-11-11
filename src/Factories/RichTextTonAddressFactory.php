<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextTonAddressInterface;
use Phenogram\Bindings\Types\RichTextTonAddress;

class RichTextTonAddressFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextTonAddress instance with default fake data.
     *
     * @param string|null                                                              $type    Optional. Type of the rich text, always “ton_address”
     * @param \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text    Optional. Text of the address
     * @param string|null                                                              $address Optional. The address
     */
    public static function make(
        ?string $type = null,
        \Phenogram\Bindings\Types\Interfaces\RichTextInterface|string|array|null $text = null,
        ?string $address = null,
    ): RichTextTonAddressInterface {
        return self::factory()->makeRichTextTonAddress(
            type: $type ?? 'ton_address',
            text: $text ?? self::fake()->sentence(),
            address: $address ?? self::fake()->text(50),
        );
    }
}
