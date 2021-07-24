<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYFTSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('y_f_t_socials', function (Blueprint $table) {
            $table->id();
            $table->integer('iid')->unsigned();
            $table->longText('yurl')->nullable();
            $table->longText('furl')->nullable();
            $table->string('tusername')->nullable();
            $table->integer('yurlstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('furlstatus')->default(0);//00 pending 1 active 2 rejected
            $table->integer('tusernamestatus')->default(0);//00 pending 1 active 2 rejected
            
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
        Schema::dropIfExists('y_f_t_socials');
    }
}
