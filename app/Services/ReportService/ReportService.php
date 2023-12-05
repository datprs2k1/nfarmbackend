<?php

namespace App\Services\ReportService;

use App\Enums\Order\OrderStatusEnum;
use App\Enums\Report\OrderReportTypeEnum;
use App\Repositories\Order\IOrderRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Trait\SaveFileTrait;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class ReportService extends BaseService
{
    use SaveFileTrait;
    protected $orderRepository;
    protected $cartRepository;
    function __construct(IOrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getOrderReport($request)
    {

        $entries = $this->orderRepository->getModel()->get();

        $total = $entries->count();
        $pending = $entries->where('status', OrderStatusEnum::PENDING)->count();
        $paid = $entries->where('status', OrderStatusEnum::PAYED)->count();

        return $this->sendSuccessResponse([
            'Chờ thanh toán' => $pending,
            'Đã thanh toán' => $paid,
        ]);
    }

    public function getRevenueReport($request)
    {

        $type = $request->get('type') || OrderReportTypeEnum::TODAY;

        $startDate = Carbon::now()->subMonths(11)->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        $period = CarbonPeriod::create($startDate, '1 month', $endDate);

        $entries = $this->orderRepository
            ->where('status', OrderStatusEnum::PAYED)
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        $entries = $entries->groupBy(function ($group) {
            return $group->created_at->format('m/y');
        });

        $entries = $entries->map(function ($entry) {
            return $entry->sum('total');
        });

        $data = [];

        foreach ($period as $month) {
            $data[$month->format('m/y')] = 0;
        }

        $data = collect($data)->merge($entries);

        return $this->sendSuccessResponse($data);
    }
}
