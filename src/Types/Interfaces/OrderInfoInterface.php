<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents information about an order.
 */
interface OrderInfoInterface extends TypeInterface
{
	/** @var string|null $name Optional. User name */
	public ?string $name { set; get; }

	/** @var string|null $phoneNumber Optional. User's phone number */
	public ?string $phoneNumber { set; get; }

	/** @var string|null $email Optional. User email */
	public ?string $email { set; get; }

	/** @var ShippingAddressInterface|null $shippingAddress Optional. User shipping address */
	public ?ShippingAddressInterface $shippingAddress { set; get; }
}
