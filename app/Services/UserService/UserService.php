<?php

namespace App\Services\UserService;

use App\Repositories\User\IUserRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFile;
use App\Services\UserInfoService\UserInfoService;
use App\Transformers\UserTransformer;

class UserService extends BaseService
{
    use SaveFile;

    protected $userInfoService;
    public function __construct(IUserRepository $userRepository, UserInfoService $userInfoService)
    {
        $this->mainRepository = $userRepository;
        $this->userInfoService = $userInfoService;
    }

    public function get()
    {
        $this->mainRepository->setFilters([

        ]);

        $query = $this->mainRepository->getQuery();

        $entries = $this->mainRepository->filterWithPagination($query);

        return fractal($entries, new UserTransformer);
    }

    public function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {
            $entry = $this->mainRepository->find($id);

            if(!$entry) {
                throw new AppServiceException("Người dùng không tồn tại");
            }

            $entry = $entry->load('info');

            return $this->sendSuccessResponse(fractal($entry, new UserTransformer)->parseIncludes(['info']));
        });
    }

    public function update($id, $request)
    {
        return DbTransactions()->addCallbackJson(function () use ($id, $request) {
            $data = $request->all();

            $entry = $this->mainRepository->find($id);

            if(isset($data['avatar'])) {
                $data['avatar'] = $this->saveFile($data['avatar'], PATH_AVATAR, SOURCE_AVATAR);
            }

            if(!$entry) {
                throw new AppServiceException("Tài khoản không tồn tại.");
            }

            $entry->update($data);

            $this->userInfoService->update($id, $data);

            return true;
        });
    }


}
