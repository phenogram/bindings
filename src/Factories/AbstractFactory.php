<?php

namespace Phenogram\Bindings\Factories;

use Faker\Generator;
use Phenogram\Bindings\Factory;
use Phenogram\Bindings\FactoryInterface;

abstract class AbstractFactory
{
    private static Generator $faker;
    private static FactoryInterface $factory;

    protected static function fake(): Generator
    {
        if (!isset(self::$faker)) {
            self::$faker = \Faker\Factory::create();
        }

        return self::$faker;
    }

    protected static function factory(): FactoryInterface
    {
        if (!isset(self::$factory)) {
            self::$factory = new Factory();
        }

        return self::$factory;
    }

    public static function setFactory(FactoryInterface $factory): void
    {
        if (isset(self::$factory)) {
            throw new \RuntimeException('Factory already set');
        }

        self::$factory = $factory;
    }
}
