<?php

namespace App\Transformers;

use App\Enums\User\UserStatusEnum;
use App\Enums\User\VerifyEnum;
use App\Models\UserModel;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
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
    public function transform(UserModel $entry)
    {
        return [
            'id' => $entry->id,
            'avatar' => $entry->avatar,
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
}
