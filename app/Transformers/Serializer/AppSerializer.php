<?php

namespace App\Transformers\Serializer;
use League\Fractal\Serializer\ArraySerializer;

class AppSerializer extends ArraySerializer
{

    public function collection(?string $resourceKey, array $data): array
    {
        return ['data' => $data];
    }

    public function item(?string $resourceKey, array $data): array
    {
        return $data;
    }

    public function null(): ?array
    {
        return [];
    }
}
