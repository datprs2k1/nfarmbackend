<?php

namespace App\Transformers;

use App\Enums\User\UserStatusEnum;
use App\Enums\User\VerifyEnum;
use App\Models\UserModel;
use App\Services\_Trait\SaveFile;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
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
        'info'
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(UserModel $entry)
    {
        return [
            'id' => $entry->id,
            'avatar' => $entry->avatar ? $this->getFile($entry->avatar, PATH_AVATAR) : null,
            'name'=> $entry->name,
            'email'=> $entry->email,
            'phone'=> $entry->phone,
            'gender' => $entry->gender,
            'role_id' => $entry->role_id,
            'role' => $entry->getRoleNames()[0],
            'status' => $entry->status,
            'status_text' => UserStatusEnum::getDescription((int) $entry->status),
        ];
    }

    public function includeInfo(UserModel $entry)
    {
        return $this->item($entry->info, new UserInfoTransformer) ?? $this->null();
    }
}
