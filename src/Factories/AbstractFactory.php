<?php

namespace Phenogram\Bindings\Factories;

use Faker\Generator;
use Phenogram\Bindings\FactoryInterface;

abstract class AbstractFactory
{
    private static Generator $faker;
    private static FactoryInterface $factory;

    protected static function fake(): Generator
    {
        if (!isset(static::$faker)) {
            static::$faker = \Faker\Factory::create();
        }

        return static::$faker;
    }

    protected static function factory(): FactoryInterface
    {
        if (!isset(static::$factory)) {
            static::$factory = new \Phenogram\Bindings\Factory();
        }

        return static::$factory;
    }

    public static function setFactory(FactoryInterface $factory): void
    {
        if (isset(static::$factory)) {
            throw new \RuntimeException('Factory already set');
        }

        static::$factory = $factory;
    }
}
