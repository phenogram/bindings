<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about one answer option in a poll to be sent.
 */
interface InputPollOptionInterface extends TypeInterface
{
	/** @var string $text Option text, 1-100 characters */
	public string $text { set; get; }

	/** @var string|null $textParseMode Optional. Mode for parsing entities in the text. See formatting options for more details. Currently, only custom emoji entities are allowed */
	public ?string $textParseMode { set; get; }

	/** @var array<MessageEntityInterface>|null $textEntities Optional. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of text_parse_mode */
	public ?array $textEntities { set; get; }
}
