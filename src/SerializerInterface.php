<?php

namespace Phenogram\Bindings;

interface SerializerInterface
{
    public function serialize(array $data): string;

    public function deserialize(string $data, string $type, bool $isArray = false): mixed;
}
