<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Price\PriceStoreRequest;
use App\Http\Requests\Price\PriceUpdateRequest;
use App\Services\PriceService\PriceService;

class PriceController extends Controller
{
    protected $entryService;

    public function __construct(PriceService $entryService)
    {
        $this->entryService = $entryService;
    }

    public function get()
    {
        return $this->entryService->get();
    }

    public function show($id)
    {
        return $this->entryService->show($id);
    }

    public function store(PriceStoreRequest $request)
    {
        return $this->entryService->store($request);
    }

    public function update($id, PriceUpdateRequest $request)
    {
        return $this->entryService->update($id, $request);
    }

    public function destroy($id)
    {
        return $this->entryService->destroy($id);
    }
}
