<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Types\Interfaces\RichTextMathematicalExpressionInterface;
use Phenogram\Bindings\Types\RichTextMathematicalExpression;

class RichTextMathematicalExpressionFactory extends AbstractFactory
{
    /**
     * Creates a new RichTextMathematicalExpression instance with default fake data.
     *
     * @param string|null $type       Optional. Type of the rich text, always “mathematical_expression”
     * @param string|null $expression Optional. The expression in LaTeX format
     */
    public static function make(
        ?string $type = null,
        ?string $expression = null,
    ): RichTextMathematicalExpressionInterface {
        return self::factory()->makeRichTextMathematicalExpression(
            type: $type ?? self::fake()->word(),
            expression: $expression ?? self::fake()->text(50),
        );
    }
}
