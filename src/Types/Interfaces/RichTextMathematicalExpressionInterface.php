<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * A mathematical expression.
 */
interface RichTextMathematicalExpressionInterface extends TypeInterface
{
    /** @var string $type Type of the rich text, always “mathematical_expression” */
    public string $type { set; get; }

    /** @var string $expression The expression in LaTeX format */
    public string $expression { set; get; }
}
