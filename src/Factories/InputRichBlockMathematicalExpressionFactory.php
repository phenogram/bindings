<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\InputRichBlockMathematicalExpression;
use Phenogram\Bindings\Types\Interfaces\InputRichBlockMathematicalExpressionInterface;

class InputRichBlockMathematicalExpressionFactory extends AbstractFactory
{
    /**
     * Creates a new InputRichBlockMathematicalExpression instance with default fake data.
     *
     * @param string|null $type       Optional. Type of the block, always “mathematical_expression”
     * @param string|null $expression Optional. The mathematical expression in LaTeX format
     */
    public static function make(
        ?string $type = null,
        ?string $expression = null,
    ): InputRichBlockMathematicalExpressionInterface {
        return self::factory()->makeInputRichBlockMathematicalExpression(
            type: $type ?? self::fake()->word(),
            expression: $expression ?? self::fake()->text(50),
        );
    }
}
