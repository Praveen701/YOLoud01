<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDatasToInstagramSocialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instagram_socials', function (Blueprint $table) {
             $table->longText('istory')->nullable();
            $table->longText('ispost')->nullable();
            $table->longText('ireel')->nullable();
            $table->longText('ivedio')->nullable();
            $table->longText('iigtv')->nullable();
            $table->integer('iconnect')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instagram_socials', function (Blueprint $table) {
            //
        });
    }
}
