<?php

namespace Phenogram\Bindings\Types;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 */
class InputRichBlockMathematicalExpression extends InputRichBlock implements Interfaces\InputRichBlockMathematicalExpressionInterface
{
    /**
     * @param string $type       Type of the block, always “mathematical_expression”
     * @param string $expression The mathematical expression in LaTeX format
     */
    public function __construct(
        public string $type,
        public string $expression,
    ) {
    }
}
