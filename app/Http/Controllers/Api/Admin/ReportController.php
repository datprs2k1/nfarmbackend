<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Services\ReportService\ReportService;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    protected $ReportService;

    public function __construct(ReportService $ReportService)
    {
        $this->ReportService = $ReportService;
    }

    public function getOrder(Request $request)
    {
        return $this->ReportService->getOrderReport($request);
    }

    public function getRevenue(Request $request)
    {
        return $this->ReportService->getRevenueReport($request);
    }
}
