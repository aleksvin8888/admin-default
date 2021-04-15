<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();;
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('verification_code');
            $table->integer('is_verificated');
            $table->string('soft_deleted');
            $table->string('slug_name');
            $table->integer('is_blocked');
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('roles');
//            $table->timestamp('email_verified_at')->nullable();
//            $table->rememberToken();
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
}
