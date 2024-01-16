<?php

namespace App\Http\Controllers;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\_Exception\AppServiceException;
use Illuminate\Http\JsonResponse;

class ResourceController extends Controller
{

    protected $service;
    protected $storeRequest;
    protected $updateRequest;

    /**
     * @return mixed
     * @throws AppServiceException
     */
    public function store(): mixed
    {
        $request =  $this->resolveRequest($this->storeRequest);
        return $this->service->store($request);
    }

    /**
     * @param $entryId
     * @return mixed
     * @throws AppServiceException
     */
    public function update($entryId): mixed
    {
        $request =  $this->resolveRequest($this->updateRequest);

        return $this->service->update($entryId, $request);
    }

    public function destroy($entryId)
    {
        return $this->service->destroy($entryId);
    }

    public function show($entryId)
    {
        return $this->service->show($entryId);
    }

    public function index()
    {
        return $this->service->get();
    }


    /**
     * @param $request
     * @return JsonResponse|ApiBaseRequest
     * @throws AppServiceException
     */
    private function resolveRequest($request): JsonResponse|ApiBaseRequest
    {
        $request = resolve($request);
        if (!($request instanceof  ApiBaseRequest)) {
            throw new AppServiceException("request Invalid");
        }

        return  $request;
    }
}
