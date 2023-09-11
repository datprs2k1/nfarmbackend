<?php

namespace App\Transformers;

use App\Models\CategoryModel;
use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
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
    public function transform(CategoryModel $entry)
    {
        return [
            //
            "id" => $entry->id,
            "name" => $entry->name,
            "has_child" => $entry->has_child,
            "childrens" => @$entry->childrens
        ];
    }
}
