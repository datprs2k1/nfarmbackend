<?php

namespace App\Services\UserInfoService;

use App\Repositories\UserInfo\IUserInfoRepository;
use App\Services\_Abstract\BaseService;
use App\Services\_Exception\AppServiceException;
use App\Services\_Trait\SaveFile;
use App\Transformers\UserInfoTransformer;

class UserInfoService extends BaseService
{
    use SaveFile;
    public function __construct(IUserInfoRepository $userInfoRepository)
    {
        $this->mainRepository = $userInfoRepository;
    }

    public function get()
    {
        $this->mainRepository->setFilters([

        ]);

        $query = $this->mainRepository->getQuery();

        $entries = $this->mainRepository->filterWithPagination($query);

        return fractal($entries, new UserInfoTransformer);
    }

    public function show($id)
    {
        return DbTransactions()->addCallbackJson(function () use ($id) {
            $entry = $this->mainRepository->where('user_id', $id)->first();

            if(!$entry) {
                throw new AppServiceException("Người dùng không tồn tại");
            }

            return fractal($entry, new UserInfoTransformer);
        });
    }

    public function update($id, $data)
    {
        return DbTransactions()->addCallbackJson(function () use ($id, $data) {

            $entry = $this->mainRepository->where('user_id', $id)->first();

            if(!$entry) {
                throw new AppServiceException("Tài khoản không tồn tại.");
            }

            if(isset($data['identity_front'])) {
                $data['identity_front'] = $this->saveFile($data['identity_front'], PATH_IDENTITY, SOURCE_IDENTITY);
            }

            if(isset($data['identity_back'])) {
                $data['identity_back'] = $this->saveFile($data['identity_back'], PATH_IDENTITY, SOURCE_IDENTITY);
            }

            $entry->update($data);

            return true;
        });
    }

}
