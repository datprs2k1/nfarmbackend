<?php

namespace App\Services\_Abstract;
use App\Services\_Exception\AppServiceException;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class TransactionService extends BaseService
{
    /**
     * @param $callback
     * @throws AppServiceException
     */
    public function addCallback($callback)
    {
        try {
            DB::beginTransaction();
            $result = $callback();

            DB::commit();
            return $result;
        }catch (AppServiceException|Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            throw new AppServiceException($exception->getMessage());
        }
    }
}
