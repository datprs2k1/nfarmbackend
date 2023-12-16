<?php

namespace App\Services\UserService;

use App\Http\Requests\_Abstract\ApiBaseRequest;
use App\Models\CartModel;
use App\Repositories\Cart\ICartRepository;
use App\Repositories\User\IUserRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFileTrait;
use App\Services\MailService\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class UserService extends BaseService
{
    use SaveFileTrait;
    protected $mainRepository;
    protected $cartRepository;
    protected $mailService;
    function __construct(IUserRepository $entryRepository)
    {
        $this->mainRepository = $entryRepository;
    }

    function get()
    {
        $entries = $this->mainRepository->where('role_id', '!=', 1)->get();

        $entries = DataTables::of($entries)->addIndexColumn()
        ->addColumn('statusText', function($item) {
            $html = $item->status == 1 ? "<h4><span class='badge bg-success'>Hoạt động</span></h4>" : "<h4><span class='badge bg-danger'>Không hoạt động</span></h4>";
            return $html;
        })
        ->rawColumns(['statusText'])
        ->make();

        return $this->sendSuccessResponse($entries->original);
    }
}
