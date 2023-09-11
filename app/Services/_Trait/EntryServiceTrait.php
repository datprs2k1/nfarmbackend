<?php

namespace App\Services\_Trait;

use App\Http\Requests\_Abstract\BaseRequest;
use App\Services\_Exception\AppServiceException;
use App\Services\Common\DataHandleService;
use Illuminate\Support\Facades\Log;
trait EntryServiceTrait
{
    public function createFromRequest(BaseRequest $request)
    {
        try {
            return $this->mainRepository->create($request->fillData());
        } catch (\Exception $e)
        {
            Log::info($e->getMessage());
            throw new AppServiceException(__('messages.unknown_error'), SERVER_ERROR);
        }
    }

    public function createFromArray($arrayData)
    {
        return $this->mainRepository->create($arrayData);
    }

    public function delete($entryId)
    {
        try {
            return $this->mainRepository->delete($entryId);
        } catch (\Exception $e)
        {
            Log::info($e->getMessage());
            throw new AppServiceException(__('messages.unknown_error'), SERVER_ERROR);
        }
    }

    public function find($entryId)
    {
        return $this->mainRepository->find($entryId);
    }

    public function updateFromRequest($entryId, BaseRequest $request)
    {
        try {
            return $this->mainRepository->update($request->fillData(), $entryId);
        } catch (\Exception $e)
        {
            Log::info($e->getMessage());
            throw new AppServiceException(__('messages.unknown_error'), SERVER_ERROR);
        }
    }

    public function updateFromArray($entryId, array $array)
    {
        return $this->mainRepository->update($array, $entryId);
    }

    public function findOrFail($entryId)
    {
        return $this->mainRepository->findOrFail($entryId);
    }

    public function search()
    {
        return DataHandleService::initFromRepository($this->mainRepository)->commonListQuery()->paginate();
    }

    public function listSelect()
    {
        return DataHandleService::initFromRepository($this->mainRepository)->commonListQuery()->collection->get();
    }

    public function getModel()
    {
        return $this->mainRepository->getModel();
    }
}
