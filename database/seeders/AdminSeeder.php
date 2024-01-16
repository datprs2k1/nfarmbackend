<?php

namespace Database\Seeders;

use App\Models\UserModel;
use App\Repositories\User\UserRepository;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $reposiory;
    public function __construct(UserRepository $userRepository)
    {
        $this->reposiory = $userRepository;
    }

    public function run()
    {
        //
        DB::statement("SET FOREIGN_KEY_CHECKS = 0");
        DB::table("users")->truncate();
        DbTransactions()->addCallback(function () {
            $user = $this->reposiory->create([
                "name" => "admin",
                "email" => "admin@admin.com",
                "password" => bcrypt("123456"),
                "phone"=> "0969688924",
                "role_id" => UserModel::ROLE_ADMIN,
            ]);
            $role = Role::findByName(ROLE_ADMIN);
            $user->assignRole($role);
        });
        DB::statement("SET FOREIGN_KEY_CHECKS = 1");
    }
}
