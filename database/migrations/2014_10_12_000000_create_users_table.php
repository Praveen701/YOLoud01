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
            $table->id();
            $table->string('name');
            $table->longText('UID')->nullable();
            $table->string('email')->unique();
            $table->boolean('terms')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('type')->default(0); // 0 influencer 1 admin 2 brands
            $table->integer('profilestatus')->default(0);//0 PendingApproval 1 Approved 
            $table->integer('accountstatus')->default(0);//0 active //1 inactive
            $table->integer('verified')->default(0);//0 Not Verified //1 Verified
            $table->string('notification_preference')->default('mail, database');
            $table->longText('avatar')->nullable();
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
        Schema::dropIfExists('users');
    }
}
