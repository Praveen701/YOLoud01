<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampMacsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_macs', function (Blueprint $table) {
            $table->id();
            $table->integer('cid')->unsigned();
            $table->integer('iid')->unsigned();
            $table->integer('bid')->unsigned();
            $table->date('csdate');
            $table->date('cedate');
            $table->string('ustatus')->nullable();
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
        Schema::dropIfExists('camp_macs');
    }
}
