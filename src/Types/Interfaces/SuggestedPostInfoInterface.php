<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains information about a suggested post.
 */
interface SuggestedPostInfoInterface extends TypeInterface
{
    /** @var string $state State of the suggested post. Currently, it can be one of “pending”, “approved”, “declined”. */
    public string $state { set; get; }

    /** @var SuggestedPostPriceInterface|null $price Optional. Proposed price of the post. If the field is omitted, then the post is unpaid. */
    public ?SuggestedPostPriceInterface $price { set; get; }

    /** @var int|null $sendDate Optional. Proposed send date of the post. If the field is omitted, then the post can be published at any time within 30 days at the sole discretion of the user or administrator who approves it. */
    public ?int $sendDate { set; get; }
}
