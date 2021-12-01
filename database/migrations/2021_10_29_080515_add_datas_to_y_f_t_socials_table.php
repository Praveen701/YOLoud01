<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatasToYFTSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('y_f_t_socials', function (Blueprint $table) {
              $table->longText('ycname')->nullable();
            $table->longText('fbname')->nullable();
            $table->longText('icost')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('y_f_t_socials', function (Blueprint $table) {
            //
        });
    }
}
