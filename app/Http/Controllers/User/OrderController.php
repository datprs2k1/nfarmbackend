<?php

namespace App\Http\Controllers\User;

use App\Enums\Category\CategoryTypeEnum;
use App\Enums\Order\OrderStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\CartModel;
use App\Models\OrderModel;
use App\Services\CategoryService\CategoryService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function list()
    {
        $entries = OrderModel::where('user_id', auth()->user()->id)->get();

        $entries->each(function ($entry) {
            $entry->statusText = OrderStatusEnum::getDescription((int) $entry->status);
        });
        return view('pages.order.list', compact('entries'));
    }

    public function checkout()
    {
        $entries = CartModel::with([
            "price" => [
                'product'
            ]
        ])
            ->where('user_id', auth()->user()->id)
            ->get();

        $entries->each(function ($entry) {
            $entry->total = $entry->quantity * $entry->price->price;
            $entry->totalText = number_format((float)$entry->price->price * $entry->quantity, 0, ',', '.') . ' VNĐ';
            $entry->price->price = number_format((float)$entry->price->price, 0, ',', '.') . ' VNĐ';
        });

        $total = number_format((float) $entries->sum('total'), 0, ',', '.') . ' VNĐ';


        return view('pages.checkout.index', compact('entries', 'total'));
    }

    public function show($id)
    {
        $entry = OrderModel::with([
            'orderDetails' => [
                'price' => [
                    'product'
                ]
            ]
        ])->where('id', $id)->first();

        $entry->statusText = OrderStatusEnum::getDescription((int) $entry->status);

        return view('pages.order.detail', compact('entry'));
    }

    public function payment($id)
    {
        $entry = OrderModel::where('id', $id)->first();

        $vnp_TmnCode = "7Z5KK1NQ"; //Mã website tại VNPAY
        $vnp_HashSecret = "KRECGZVJAYMJAHVZSGJOUYFCVMZUGOQY"; //Chuỗi bí mật
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_Returnurl = "https://nfarm.click/return-vnpay";
        $vnp_TxnRef = $entry->id; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = "Thanh toán hóa đơn phí dich vụ";
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $entry->total;
        $vnp_Locale = 'vn';
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_BankCode" => 'NCB'
        );


        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;

        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        return redirect($vnp_Url);
    }

    public function completePayment(Request $request)
    {
        $id = $request->get('vnp_TxnRef');
        $status = $request->get('vnp_ResponseCode');

        $entry = OrderModel::where('id', $id)->first();

        if ($status == '00') {
            $entry->update([
                'status' => OrderStatusEnum::PAYED
            ]);
        }

        return redirect()->route('order.show', ['id' => $id]);
    }
}
