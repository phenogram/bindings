<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents an inline keyboard button that copies specified text to the clipboard.
 */
interface CopyTextButtonInterface extends TypeInterface
{
	/** @var string $text The text to be copied to the clipboard; 1-256 characters */
	public string $text { set; get; }
}
