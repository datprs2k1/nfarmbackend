<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->double('coin')->nullable();
            $table->string('phone');
            $table->bigInteger('role_id');
            $table->tinyInteger('status')->default(1);
            $table->string('password');
            $table->string('singature')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('allow_new_via_email')->nullable();
            $table->date('dob')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('website')->nullable();
            $table->string('occupation')->nullable();
            $table->boolean('show_dob')->nullable();
            $table->boolean('enable_2step_verification')->nullable();
            $table->double('exp')->nullable();
            $table->string('ref_code');
            $table->bigInteger('parent_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
