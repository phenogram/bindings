<?php

namespace Phenogram\Bindings\Types;

/**
 * A mathematical expression.
 */
class RichTextMathematicalExpression extends RichText implements Interfaces\RichTextMathematicalExpressionInterface
{
    /**
     * @param string $type       Type of the rich text, always “mathematical_expression”
     * @param string $expression The expression in LaTeX format
     */
    public function __construct(
        public string $type,
        public string $expression,
    ) {
    }
}
