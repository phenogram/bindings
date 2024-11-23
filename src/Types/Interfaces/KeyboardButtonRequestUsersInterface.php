<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object defines the criteria used to request suitable users. Information about the selected users will be shared with the bot when the corresponding button is pressed. More about requesting users »
 */
interface KeyboardButtonRequestUsersInterface extends TypeInterface
{
	/** @var int $requestId Signed 32-bit identifier of the request that will be received back in the UsersShared object. Must be unique within the message */
	public int $requestId { set; get; }

	/** @var bool|null $userIsBot Optional. Pass True to request bots, pass False to request regular users. If not specified, no additional restrictions are applied. */
	public ?bool $userIsBot { set; get; }

	/** @var bool|null $userIsPremium Optional. Pass True to request premium users, pass False to request non-premium users. If not specified, no additional restrictions are applied. */
	public ?bool $userIsPremium { set; get; }

	/** @var int|null $maxQuantity Optional. The maximum number of users to be selected; 1-10. Defaults to 1. */
	public ?int $maxQuantity { set; get; }

	/** @var bool|null $requestName Optional. Pass True to request the users' first and last names */
	public ?bool $requestName { set; get; }

	/** @var bool|null $requestUsername Optional. Pass True to request the users' usernames */
	public ?bool $requestUsername { set; get; }

	/** @var bool|null $requestPhoto Optional. Pass True to request the users' photos */
	public ?bool $requestPhoto { set; get; }
}
