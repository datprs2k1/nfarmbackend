<?php

namespace App\Services\_Abstract;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\ApiResponse;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
class TransactionService extends BaseService
{

    use ApiResponse;
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

    public function addCallbackJson($callback)
    {
        try {
            DB::beginTransaction();
            $result = $callback();
            DB::commit();
            return $this->sendSuccessResponse($result);
        }catch (AppServiceException|Exception $exception) {
            DB::rollBack();
            Log::info($exception->getMessage());
            return  $this->sendErrorResponse($exception->getMessage());
        }
    }
}
