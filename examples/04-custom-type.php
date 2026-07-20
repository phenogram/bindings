<?php

declare(strict_types=1);

use Phenogram\Bindings\Factory;
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Types\ChatLocation;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;

require dirname(__DIR__) . '/vendor/autoload.php';

final class UppercaseChatLocation extends ChatLocation
{
    public string $address {
        get => strtoupper($this->address);
    }
}

final class CustomFactory extends Factory
{
    public function makeChatLocation(
        LocationInterface $location,
        string $address,
    ): ChatLocationInterface {
        return new UppercaseChatLocation(
            location: $location,
            address: $address,
        );
    }
}

$location = (new Serializer(new CustomFactory()))->deserialize(
    data: [
        'location' => [
            'latitude' => 55.1599,
            'longitude' => 61.4026,
        ],
        'address' => 'Chelyabinsk',
    ],
    type: ChatLocationInterface::class,
);

if (!$location instanceof UppercaseChatLocation || 'CHELYABINSK' !== $location->address) {
    throw new RuntimeException('The custom factory did not create the expected type.');
}

printf("Custom address: %s.\n", $location->address);
