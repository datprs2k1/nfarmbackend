<?php

namespace Database\Seeders;

use App\Repositories\Admin\IAdminRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $reposiory;
    public function __construct(IAdminRepository $adminRepository)
    {
        $this->reposiory = $adminRepository;
    }

    public function run()
    {
        //
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
        DB::table("admins")->truncate();
        DbTransactions()->addCallback(function () {
            $this->reposiory->create([
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => bcrypt("123456")
            ]);
        });
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }
}
