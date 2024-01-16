<?php

namespace App\Transformers;

use App\Enums\UserInfo\UserInfoStatusEnum;
use App\Models\UserInfo;
use App\Services\_Trait\SaveFile;
use League\Fractal\TransformerAbstract;

class UserInfoTransformer extends TransformerAbstract
{
    use SaveFile;
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(UserInfo $entry)
    {
        return [
            'address' => $entry->address,
            'ward' => $entry->ward,
            'district' => $entry->district,
            'province' => $entry->province,
            'identity_number' => $entry->identity_number,
            'identity_front' => $entry->identity_front ? $this->getFile($entry->identity_front, PATH_IDENTITY) : null,
            'identity_back' => $entry->identity_back ? $this->getFile($entry->identity_back, PATH_IDENTITY) : null,
            'status' => $entry->status,
            'status_text' => UserInfoStatusEnum::getDescription((int) $entry->status),
        ];
    }
}
