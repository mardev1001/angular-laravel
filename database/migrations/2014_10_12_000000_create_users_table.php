<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('oauth_provider');
            $table->string('oauth_provider_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password',60);
            $table->string('avatar');
            $table->enum('email_verified', ['1','0'])->default('0');
            $table->string('email_verification_code', 60);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
