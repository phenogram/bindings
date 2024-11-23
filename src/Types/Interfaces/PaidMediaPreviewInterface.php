<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The paid media isn't available before the payment.
 */
interface PaidMediaPreviewInterface extends TypeInterface
{
	/** @var string $type Type of the paid media, always “preview” */
	public string $type { set; get; }

	/** @var int|null $width Optional. Media width as defined by the sender */
	public ?int $width { set; get; }

	/** @var int|null $height Optional. Media height as defined by the sender */
	public ?int $height { set; get; }

	/** @var int|null $duration Optional. Duration of the media in seconds as defined by the sender */
	public ?int $duration { set; get; }
}
