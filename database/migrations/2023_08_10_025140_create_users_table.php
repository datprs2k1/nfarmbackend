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
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('dob')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->double('coin')->default(0);
            $table->double('point')->default(0);
            $table->string('password');
            $table->bigInteger('role_id');
            $table->tinyInteger('status')->default(1);
            $table->boolean('verifyEmail')->default(false);
            $table->boolean('verifyPhone')->default(false);
            $table->string('ref_code')->unique()->nullable();
            $table->integer('rank')->default(0);
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
