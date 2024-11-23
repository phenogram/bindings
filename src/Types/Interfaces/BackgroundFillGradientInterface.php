<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The background is a gradient fill.
 */
interface BackgroundFillGradientInterface extends TypeInterface
{
	/** @var string $type Type of the background fill, always “gradient” */
	public string $type { set; get; }

	/** @var int $topColor Top color of the gradient in the RGB24 format */
	public int $topColor { set; get; }

	/** @var int $bottomColor Bottom color of the gradient in the RGB24 format */
	public int $bottomColor { set; get; }

	/** @var int $rotationAngle Clockwise rotation angle of the background fill in degrees; 0-359 */
	public int $rotationAngle { set; get; }
}
