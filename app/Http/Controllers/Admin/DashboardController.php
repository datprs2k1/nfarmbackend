<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Dashboard\DashboardStatusEnum;
use App\Enums\Dashboard\DashboardTypeEnum;
use App\Enums\Order\OrderStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\OrderModel;
use App\Models\PostModel;
use App\Models\ProductModel;
use App\Models\UserModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DashboardController extends Controller
{
    protected $title;
    public function __construct()
    {
    }

    public function index()
    {
        $title = "AAA";

        $product = ProductModel::all()->count();
        $post = PostModel::all()->count();
        $order = OrderModel::all()->count();
        $paid = OrderModel::where('status', OrderStatusEnum::PAYED)->count();
        $pending = OrderModel::where('status', OrderStatusEnum::PENDING)->count();
        $revenueTotal = OrderModel::where('status', OrderStatusEnum::PAYED)->sum('total');
        $revenueMonth = OrderModel::whereBetween('updated_at', [
            Carbon::now()->startOfMonth(),
            Carbon::now()->endOfMonth()
        ])->where('status', OrderStatusEnum::PAYED)->sum('total');
        $user = UserModel::all()->count();

        return view('admin.pages.dashboard.index', compact('title', 'product', 'post', 'order', 'user', 'paid', 'pending', 'revenueMonth', 'revenueTotal'));
    }
}
