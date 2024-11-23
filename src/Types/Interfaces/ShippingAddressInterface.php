<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a shipping address.
 */
interface ShippingAddressInterface extends TypeInterface
{
	/** @var string $countryCode Two-letter ISO 3166-1 alpha-2 country code */
	public string $countryCode { set; get; }

	/** @var string $state State, if applicable */
	public string $state { set; get; }

	/** @var string $city City */
	public string $city { set; get; }

	/** @var string $streetLine1 First line for the address */
	public string $streetLine1 { set; get; }

	/** @var string $streetLine2 Second line for the address */
	public string $streetLine2 { set; get; }

	/** @var string $postCode Address post code */
	public string $postCode { set; get; }
}
