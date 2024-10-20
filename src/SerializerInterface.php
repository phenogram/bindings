<?php

namespace Phenogram\Bindings;

interface SerializerInterface
{
    public function serialize(array $data): array;

    public function deserialize(mixed $data, string $type, bool $isArray = false): mixed;
}
