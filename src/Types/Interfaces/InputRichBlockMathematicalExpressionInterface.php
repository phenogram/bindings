<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A block with a mathematical expression in LaTeX format, corresponding to the custom HTML tag <tg-math-block>.
 */
interface InputRichBlockMathematicalExpressionInterface extends TypeInterface
{
    /** @var string $type Type of the block, always “mathematical_expression” */
    public string $type { set; get; }

    /** @var string $expression The mathematical expression in LaTeX format */
    public string $expression { set; get; }
}
