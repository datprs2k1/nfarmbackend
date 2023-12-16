<?php

namespace App\Services\TransactionService;

use App\Enums\Transaction\TransactionStatusEnum;
use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\CartModel;
use App\Repositories\Cart\ICartRepository;
use App\Repositories\Transaction\ITransactionRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use App\Services\MailService\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class TransactionService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    protected $cartRepository;
    protected $mailService;
    function __construct(ITransactionRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->with(['order', 'user'])->orderBy('updated_at', 'desc')->get();

        $entries->each(function ($entry) {
            $entry->statusText = TransactionStatusEnum::getDescription((int) $entry->status);
        });

        $entries = DataTables::of($entries)->addIndexColumn()
        ->addColumn('statusText', function($item) {
            $html = $item->status == 1 ? "<h4><span class='badge bg-success'>$item->statusText</span></h4>" : "<h4><span class='badge bg-danger'>$item->statusText</span></h4>";
            return $html;
        })
        ->addColumn('actions', function ($item) {
            return '<button type="button" rel="tooltip" class="btn btn-outline-primary rounded-pill btn-sm"
            data-original-title="" title="" id="show" data-id="' . $item->id . '">
            <i class="uil-info-circle font-20"></i>
            <div class="ripple-container"></div>
        </button>';
        })->rawColumns(['actions', 'statusText'])->make();

        return $this->sendSuccessResponse($entries->original);
    }
}
