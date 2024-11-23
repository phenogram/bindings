<?php

declare(strict_types=1);

namespace Phenogram\Bindings\Tests\Readme;

use Phenogram\Bindings\Api;
use Phenogram\Bindings\Factory;
use Phenogram\Bindings\Serializer;
use Phenogram\Bindings\Tests\TestCase;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;
use Phenogram\Bindings\Types\Interfaces\UserInterface;
use Phenogram\Bindings\Types\User;

class MyChatLocation extends \Phenogram\Bindings\Types\ChatLocation
{
    public string $address {
        get => $this->normalizeAddress($this->address);
    }

    private function normalizeAddress(string $address): string
    {
        return mb_strtoupper($address);
    }
}

class MyFactory extends Factory
{
    public function makeChatLocation(
        LocationInterface $location,
        string $address
    ): ChatLocationInterface
    {
        return new MyChatLocation(
            location: $location,
            address: $address,
        );
    }
}

class ReadmeFactoryTest extends TestCase
{
    public function testRedefineChatLocation(): void
    {
        $serializer = new Serializer(
            factory: new MyFactory()
        );

        $chatLocationData = [
            'location' => [
                'latitude' => 1.0,
                'longitude' => 2.0,
            ],
            'address' => 'Chelyabinsk',
        ];

        $chatLocation = $serializer->deserialize(
            data: $chatLocationData,
            type: ChatLocationInterface::class,
        );

        self::assertEquals('CHELYABINSK', $chatLocation->address);
    }
}