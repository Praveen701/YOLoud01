<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfluencersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influencers', function (Blueprint $table) {
            $table->id();
            $table->integer('iid')->unsigned();
            $table->longText('PID')->nullable();
            $table->string('phone')->nullable();
            $table->Date('dob')->nullable();
            $table->string('gender')->nullable(); //0 male 1 female 2
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pincode')->nullable();
            $table->longText('intrest')->nullable();
            $table->longText('primarycategory')->nullable();
            $table->longText('contentphoto')->nullable();
            $table->string('inftype')->nullable();
            $table->longText('payment')->nullable();
            $table->longText('occupation')->nullable();
            $table->longText('languages')->nullable();
            $table->string('platform')->nullable();
            $table->integer('phonestatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('emailstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('categorystatus')->default(0);//00 pending 1 active 2 rejected
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
        Schema::dropIfExists('influencers');
    }
}
