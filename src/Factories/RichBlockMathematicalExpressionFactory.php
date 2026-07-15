<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichBlockMathematicalExpressionInterface;
use Phenogram\Bindings\Types\RichBlockMathematicalExpression;

class RichBlockMathematicalExpressionFactory extends AbstractFactory
{
    /**
     * Creates a new RichBlockMathematicalExpression instance with default fake data.
     *
     * @param string|null $type       Optional. Type of the block, always “mathematical_expression”
     * @param string|null $expression Optional. The mathematical expression in LaTeX format
     */
    public static function make(
        ?string $type = null,
        ?string $expression = null,
    ): RichBlockMathematicalExpressionInterface {
        return self::factory()->makeRichBlockMathematicalExpression(
            type: $type ?? self::fake()->word(),
            expression: $expression ?? self::fake()->text(50),
        );
    }
}
