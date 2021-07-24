<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherOppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_opps', function (Blueprint $table) {
            $table->id();
            $table->string('otitle');
            $table->longText('odes')->nullable();
            $table->longText('ocontactus');
            $table->integer('oppstatus')->default(0);//0 Inactive //1 Active
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
        Schema::dropIfExists('other_opps');
    }
}
