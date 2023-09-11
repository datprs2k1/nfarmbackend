<?php

namespace App\Services\_Abstract;

use App\Services\_Trait\ApiResponse;

class BaseService
{
    use ApiResponse;

    protected $mainRepository;
}
