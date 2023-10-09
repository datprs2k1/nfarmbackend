<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (! File::isDirectory(public_path('storage/products'))) {
            File::makeDirectory(public_path('storage/products'), 0777, true, true);
        }

        File::copy(public_path('images/products/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png'), public_path('storage/products/nextX-AI-ki-ket-hop-tac-voi-Atrocast.png'));
        File::copy(public_path('images/products/nong-nghiep-cong-nghe-cao-thailan.jpg'), public_path('storage/products/nong-nghiep-cong-nghe-cao-thailan.jpg'));
        File::copy(public_path('images/products/machinelearning.jpg'), public_path('storage/products/machinelearning.jpg'));

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('posts')->truncate();

        // DB::table('posts')->insert($data);

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    }
}
