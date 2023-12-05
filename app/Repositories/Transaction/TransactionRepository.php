<?php

namespace App\Repositories\Transaction;

use App\Models\TransactionModel;
use App\Repositories\_Abstract\BaseRepository;

class TransactionRepository extends BaseRepository implements ITransactionRepository
{
    protected $model;

    public function model()
    {
        return TransactionModel::class;
    }
}
